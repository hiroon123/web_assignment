<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="icon.png" />
	<style type="text/css">
.sidebar 
{
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}
.sidebar a 
{
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none !important;
}
.sidebar a.active 
{
  background-color: #4CAF50;
  color: white;
}
.sidebar a:hover:not(.active) 
{
  background-color: #555;
  color: white;
}
div.content 
{
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}
@media screen and (max-width: 700px) 
{
  .sidebar   
  {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}
@media screen and (max-width: 400px) 
{
  .sidebar a 
  {
    text-align: center;
    float: none;
  } 
}
#heading
{
	position: relative;
	font-size: 35px;
	border:1px solid;
	padding: 10px 10px;
	left: auto;
	right: auto;
}
#search
{
	position: relative;
	margin-top: 25px;
	margin-left:15px; 
}
#search input[type=text]
{
	padding: 5px 5px;
	width: 300px;
	font-size: 18px;
}
#search button
{
	margin-left: 10px;
	padding: 10px 20px;
}
	</style>
	<link rel="shortcut icon" href="icon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<title>Control Panel - CarZone.lk</title>
</head>
<body>
	<div class="sidebar">
		<a class="active" href="Control_Panel.php">Show All Ads</a>
		<a href="./Resources/Control_Panel/add_new.php">Add New Add</a>
		<a href="">About</a>
	</div>
	<div class="content">
		<br>
		<form action="./Resources/Control_Panel/Search.php" method="GET">
			<span id="heading">Control Panel - CarZone.lk</span>&nbsp&nbsp
			<div id="search">
			<input type="text" placeholder="Search..." name="search"><button class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
		</div>
		</form>
		<br>
		<div class="container-fluid">
		<div id="search-results">
			<div class="well">
				<div class="container-fluid">
					<hr>
					<?php 
					include './Resources/Php/connect.php';
					$sql = "SELECT * FROM ads ORDER BY id DESC";
					$result = mysqli_query($conn,$sql);
					if (mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
						$index = $row['id'];
						echo '
						<div class="row">
						<div class="col-sm-2">
							<a href="result">
							<img src="data:image/jpeg;base64,'.base64_encode($row['img1']).'" width="80%" height="80%" class="thumb-image" class="img-responsive">
							</a>
						</div>
						<div class="col-sm-2">
							<label>Ad ID:&nbsp<span style="color:red;">'.$row['id'].'</span></label><br>
							<label>Brand:&nbsp<span style="color:blue;">'.$row['brand'].'</span></label><br>
							<label>Model:&nbsp<span style="color:blue;">'.$row['model'].'</span></label><br>
							<label>Edition:&nbsp<span style="color:blue;">'.$row['edition'].'</span></label><br>
							<label>Year:&nbsp<span style="color:green;">'.$row['year'].'</span></label><br>
							<label>Vehicle Type:&nbsp<span style="color:orange;">'.$row['v_type'].'</span></label><br>
						</div>
						<div class="col-sm-2">
							<label>Location:&nbsp<span style="color:black;">'.$row['location'].'</span></label><br>
							<label>Fuel Type:&nbsp<span style="color:black;">'.$row['f_type'].'</span></label><br>
							<label>Transmission:&nbsp<span style="color:black;">'.$row['transmission'].'</span></label><br>
							<label>Engine Capacity:&nbsp<span style="color:rgb(34,34,34);">'.$row['engine_capacity'].'</span></label><br>
							<label>Price:&nbsp<span style="color:red;">'.$row['price'].'LKR</span></label><br>
						</div>
						<div class="col-sm-3">
							<label>Add Name:&nbsp<br><span style="color:grey;">'.$row['full_name'].'</span></label><br>
							<label>Description:&nbsp<br><span style="color:grey;">'.$row['description'].'</span></label><br>	
						</div>
						<div class="col-sm-3">
							<a href="./Resources/Control_Panel/edit.php?index='.$index.'"><button class="btn btn-danger">Edit Ad</button></a>&nbsp
							<a href="./Resources/Control_Panel/delete.php?index='.$index.'"><button class="btn btn-warning">Delete Ad</button></a>	
						</div>
					</div>
					<hr>';
					}
					mysqli_close($conn);
				}
				?>
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>