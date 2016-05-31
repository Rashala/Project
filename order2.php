<?php
require_once("databaseConnection.php");
if(isset($_POST['order2'])){

							$firstname=$_POST['firstname'];
							$lastname=$_POST['lastname'];
							$middlename=$_POST['middlename'];
							$address=$_POST['address'];
							$contact=$_POST['contact'];
							$email=$_POST['email'];
							$foodname=$_POST['foodname'];
							echo "firstname : ".$_POST['firstname'];
							echo "lastname : ".$_POST['lastname'];
							echo "middlename : ".$_POST['middlename'];
							echo "address : ".$_POST['address'];
							echo "contact : ".$_POST['contact'];
							echo "email : ".$_POST['email'];
							echo "foodname : ".$_POST['foodname'];
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