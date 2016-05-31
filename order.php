<?php

session_start();
require_once("databaseConnection.php");


if (isset($_POST['order'])) {
$food_array = array();

	for($i = 1; $i <= 20; $i++){
	
		$food="food".$i;
		
		if(isset($_POST[$food])){
			array_push($food_array, $_POST[$food]);
		}
	}
	$food_string="";
	if(count($food_array)>0){
			for($i = 0; $i < count($food_array); $i++){
				
				$food_string=$food_string.$food_array[$i];
				if($i+1<count($food_array)){
				$food_string=$food_string." , ";
				}
				
			}
			 $_SESSION["yummylunchbox_order"] = $food_string;
			}
	
	
   
	
   
}

?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>YUMMY LUNCH BOX</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
.form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style-6 h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea,
.form-style-6 select 
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: #2EBC99;
}
</style>

</head>

<body>
	<div class="header">
		<div>
			<a href="index.html"><img src="images/logo.png" alt="Logo"></a>
		</div>
		<!--<form action="index.html">
			<input type="text" value="Search For our Food" id="search">
			<input type="submit" value="" id="searchbtn">
		</form>-->
		<!--table tr:hover td {
background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}-->
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li >
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="menu.html">Menu</a>
					</li>
					
					<li>
						<a href="about.html">About us</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
				
			</div>
			<div class="body">
				<div id="content">
					<div><center>
			<?php  
			echo "<br>.Food Ordered: ".$_SESSION["yummylunchbox_order"]."<br>";
			//$food_string="";
		//	for($i = 0; $i < count($food_array); $i++){
		//		echo "<input type ='button' value='".$food_array[$i]."'>  ";
		//		$food_string=$food_string.$food_array[$i];
		//		if($i+1<count($food_array)){
		//		$food_string=$food_string." , ";
		//		}
				
		//	}
			
			?>
			
					<div class="form-style-6">

	
						<form action="" method="post" name="orderForm" onsubmit="return validateForm(this)">
						<input type="text" name="firstname" placeholder="Firstname" />
							<input type="text" name="middlename" placeholder="Middlename"/>
							<input type="text" name="lastname" placeholder="Lastname" />
							
									<input type="text" name="address" placeholder="Address" />
										<input type="number" name="contact" placeholder="Contact" />
						<input type="email" name="email" placeholder="Email Address" />
						<input type ="hidden" name="foodname" value="<?php echo $food_string ?>">
						<input type="submit" value="Order" name="order2"/>
						</form>
						<?php

if(isset($_POST['order2'])){

							$firstname=$_POST['firstname'];
							$lastname=$_POST['lastname'];
							$middlename=$_POST['middlename'];
							$address=$_POST['address'];
							$contact=$_POST['contact'];
							$email=$_POST['email'];
							$foodname=$_POST['foodname'];
						
//if(isset($_POST['firstname'] and isset($_POST['lastname']) and isset($_POST['middlename'])
							//		and isset($_POST['address']) and isset($_POST['contact']) and isset($_POST['email'])) )
							//		{
							$db = new DB();
							$order = $db->insert_order($foodname,$firstname,$middlename,$lastname,$email,$contact,$address);
							if($order==true){
								echo '<script language="javascript">';
								echo 'alert("Order have been successful!!!")';
								
								echo '</script>';
							}else{
								echo '<script language="javascript">';
								echo 'alert("Failed order operation")';
								echo '</script>';
							}
						//}
						}

														
						
						

						?>
					</div>
				
				</form>
				</div>
				</div>
				</div>
			<div class="footer">
			
			
					
			</div>
		</div>
			
				
				
	<script>
	function validateForm(theForm) {
    var firstname = theForm.firstname.value;
	    var lastname = theForm.lastname.value;
		    var middlename = theForm.middlename.value;
			    var address = theForm.address.value;  
				var contact = theForm.contact.value;
				    var email = theForm.email.value;
					
    if (firstname == null || firstname == "" 
		|| lastname == null || lastname == "" ||
		middlename == null || middlename == "" ||
		address == null || address == "" ||
		contact == null || contact == "" ||
		email == null || email == "" ) {
        alert("Fields must be filled out");
        return false;
    }
}
</script>	
				
			
	
	
</body>
</html>