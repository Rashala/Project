<?php

session_start();
require_once("databaseConnection.php");



if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $db = new DB();
  echo "Username : ".$username;
  echo "Passwor : ".$password;
    $user = $db->login($username,$password);
    if (!is_null($user)) {
 foreach ($user as $row) { 
        echo "<br> login";
        echo "<br> complete user info:::";
        echo "<br>id:" . $row->user_id;
        echo "<br>user name:" . $row->user_name;
        echo "<br>password:" . $row->password;

        $_SESSION["yummylunchbox_userid"] = $row->user_id;
        $_SESSION["yummylunchbox_username"] =$row->user_name;
		$_SESSION["yummylunchbox_password"] = $row->password;
		
        print_r($_SESSION);
        if ($row->user_id>0) {
            echo "<br>admin";
            header("Location: retrieve_order.php"); /* Redirect browser */
			 exit();
        } 
}
       
    } else {
        header("Location: index.html");
		exit;
		 echo '<script language="javascript">';
echo 'if(confirm("Failed to login!!! Do you want to go home page again?")){
 header("Location: index.html");
 exit;
}else{
}';
echo '</script>';
    }
  //  echo "<br>" . $username . " is your username" . $password . " is your password";
} else {
   echo '<script language="javascript">';
echo 'alert("Failed to login!!!")';
echo '</script>';
}

?>
