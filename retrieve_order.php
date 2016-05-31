<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>YUMMY LUNCH BOX</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style>

.button_example{
border:1px solid #7d99ca; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #a5b8da; background-image: -webkit-gradient(linear, left top, left bottom, from(#a5b8da), to(#7089b3));
 background-image: -webkit-linear-gradient(top, #a5b8da, #7089b3);
 background-image: -moz-linear-gradient(top, #a5b8da, #7089b3);
 background-image: -ms-linear-gradient(top, #a5b8da, #7089b3);
 background-image: -o-linear-gradient(top, #a5b8da, #7089b3);
 background-image: linear-gradient(to bottom, #a5b8da, #7089b3);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#a5b8da, endColorstr=#7089b3);
}

.button_example:hover{
 border:1px solid #5d7fbc;
 background-color: #819bcb; background-image: -webkit-gradient(linear, left top, left bottom, from(#819bcb), to(#536f9d));
 background-image: -webkit-linear-gradient(top, #819bcb, #536f9d);
 background-image: -moz-linear-gradient(top, #819bcb, #536f9d);
 background-image: -ms-linear-gradient(top, #819bcb, #536f9d);
 background-image: -o-linear-gradient(top, #819bcb, #536f9d);
 background-image: linear-gradient(to bottom, #819bcb, #536f9d);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#819bcb, endColorstr=#536f9d);
}


table a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;

	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child {
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child {
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child {
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr {
	text-align: center;
	padding-left:20px;
}
table td:first-child {
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;

	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td {
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td {
	border-bottom:0;
}
table tr:last-child td:first-child {
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child {
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
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
			
					<center>
				<a class="button_example" href="logout.php">   Logout   </a>
				</center>
			
				
				
				
			
				<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

	<!-- Table Header -->
	<?php

require_once("databaseConnection.php");
$db= new DB();
$result=$db->retrieve_order();
?>
	<thead>
		<tr>
			<th>Id</th>
			<th>Food Name</style></th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Email</th>
		</tr>
	</thead>
	<!-- Table Header -->

	<!-- Table Body -->
	<tbody>



		
		<?php 
		$i=1;
		foreach($result as $row){
		if($i%2==0){
		echo "<tr class='even'>";
		}else{
		echo "<tr>";
		}
echo "<td>".$row->order_id."</td>";
echo "<td>".$row->food_name."</td>";
echo "<td>".$row->first_name."</td>";
echo "<td>".$row->middle_name."</td>";
echo "<td>".$row->last_name."</td>";
echo "<td>".$row->address."</td>";
echo "<td>".$row->contact_no."</td>";
echo "<td>".$row->email."</td>";
echo "</tr>";
$i=$i+1;
}?>
		


	</tbody>
	<!-- Table Body -->

</table>
					
			
		</div>
			
				
				
				
				
			
	
	
</body>
</html>