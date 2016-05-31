<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>YUMMY LUNCH BOX</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php"><img src="images/logo.png" alt="Logo"></a>
		</div>
		<form action="">
			<input type="text" value="Search For our Food" id="search">
			<input type="submit" value="" id="searchbtn">
		</form>
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li class="current">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="#">Menu</a>
					</li>
					
					<li>
						<a href="about.html">About us</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
			
				
					<a href="index.php"> <img src="images/h.jpg" alt="Image" width=100%> </c> </a>
				
			<div class="footer">
				<ul>
					<li>
						<h2><a href="nm.html">Regular Menu</a></h2>
						<a href="nm.html"><img src="images/nm2.jpg" alt="Image" width=100% height=250></a>
					</li>
					<li>
						<h2><a href="db.html">Menu for Diabetic</a></h2>
						<a href="db.html"><img src="images/dbpic.jpg" alt="Image" width=100% height=250></a>
					</li>
				</ul>
				<ul>
					<li>
						<h2><a href="ob.html">Menu for Obesity</a></h2>
						<a href="ob.html"><img src="images/obpic.jpg" alt="Image" width=123.5% height=250></a>
					</li>
					<li>
						<h2><a href="bp.html">Menu for BP</a></h2>
						<a href="bp.html"><img src="images/bppic.jpg" alt="Image" width=100% height=250></a>
					</li>
				</ul>
			</div>
		</div>
		<div>
			<div>
				<h3>Learn To Cook</h3>
				
				<a href="https://www.youtube.com/watch?v=LN_cRm6HrQQ"><img src="images/cooking-video.png" alt="Image"></a>
				<span>Vegetable Rice</span>
			</div>
			<div>
				<h3>Featured Recipes</h3>
				<ul id="featured">
					<li>
						<a href="recipes.html"><img src="images/sandwich.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.html">Ham Sandwich</a></h2>
							<span>by: Abhishek</span>
						</div>
					</li>
					<li>
						<a href="recipes.html"><img src="images/biscuit-and-coffee.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.html">Biscuit &amp; Sandwich</a></h2>
							<span>by: Anshu</span>
						</div>
					</li>
					<li>
						<a href="recipes.html"><img src="images/pizza.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.html">Delicious Pizza</a></h2>
							<span>by: Binisha</span>
						</div>
					</li>
				</ul>
			</div><br><br>
			<form action="" method="post">
			Username:<input type="text" id="un" name="username">
			Password:<Input type="password" id="pwd" name="password">
			<input type="submit" value="login" name="login">
			<!--<input type="submit" value="signup">-->
			</form>
			<?php

				session_start();
				require_once("databaseConnection.php");
				

				if (isset($_POST['login'])) {
					$username = $_POST["username"];
					$password = $_POST["password"];

					$db = new DB();
				
					$user = $db->login($username,$password);
					if (!is_null($user)) {
						foreach ($user as $row) { 

							$_SESSION["yummylunchbox_userid"] = $row->user_id;
							$_SESSION["yummylunchbox_username"] =$row->user_name;
							$_SESSION["yummylunchbox_password"] = $row->password;
	
							if ($row->user_id>0) {
    
								header("Location: retrieve_order.php"); /* Redirect browser */
								exit();
							} 
						}
     				} else {
      
							echo '<script language="javascript">';
							echo 'if(confirm("Failed to login!!! ")){

							exit;
							}else{
							}';
							echo '</script>';
						}
					}	 

				?>
			<!--<div>
				<h3>Get Updates</h3>
				<a href="http://www.facebook.com/yummylunchbox" target="_blank" id="facebook">Facebook</a>
				<a href="http://www.twitter.com/yummylunchbox" target="_blank" id="twitter">Twitter</a>
				<a href="http://www.youtube.com/yummylunchbox" target="_blank" id="youtube">Youtube</a>
				<a href="http://www.flickr.com/yummylunchbox" target="_blank" id="flickr">Flickr</a>
				<a href="http://www.google.com/yummylunchbox" target="_blank" id="googleplus">Google&#43;</a>
			</div> -->
		</div>
	</div>
	<div class="footer">
		<div>
			<p>
				&copy; Copyright 201. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>