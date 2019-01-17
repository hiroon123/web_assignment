<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="icon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./Resources/Stylesheets/index-style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<title>CarZone - Welcome </title>
</head>
<body>
	<div class="top-nav-bar">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>                        
      			</button>
				<div class="navbar-brand">CarZone&nbsp</div>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
  				<li class="active"><a href="#home">Home</a></li>
  				<li><a href="./Resources/Pages/search.php">Cars for Sale&nbsp</a></li>
  			</ul>
  			<button class="btn btn-success navbar-btn" data-toggle="modal" data-target="#post_an_add">Post an Add</button>
  			<ul class="nav navbar-nav navbar-right">
  				<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp Hotline: +94778652276</li>&nbsp</a></li>
  			</ul>
			</ul>
		</div>
	</nav>
	</div>
	<div id="post_an_add" class="modal fade" role="document">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" align="center">Post An Add</h4>
				</div>
				<div class="modal-body">
					<div class="container col-sm-12">
					<form name="post_add" action="./Resources/Php/add_data.php" method="POST" enctype="multipart/form-data">
					<div class="row">
					<div class="col-sm-6">
						<br>
						<label for="category">Vehicle Type:</label>
						<select name="category" id="category" class="form-control">
							<option required>Sedan</option>
							<option>Coupe</option>
							<option>SUV</option>
							<option>Hatch Back</option>
							<option>Hybrid</option>
							<option>Convertible</option>
							<option>Sport</option>
							<option>Truck</option>
						</select><br><br>
						<label for="location">Location:</label>
						<select name="location" id="location" class="form-control">
							<option required>Colombo</option>
							<option>Kandy</option>
							<option>Kurunegala</option>
							<option>Badulla</option>
							<option>Gampaha</option>
							<option>Digana</option>
							<option>Pallekale</option>
							<option>Kundasale</option>
						</select><br><br>
						<label for="brand">Brand:</label>
						<input type="text" name="brand" class="form-control" required>
						<br><br>
						<label for="model">Model:</label>
						<input type="text" name="model" class="form-control" required>
						<br><br>
						<label for="edition">Edition:</label>
						<input type="text" name="edition" class="form-control" required>
						<br><br>
						<label for="year">Year:</label>
						<input type="text" name="year" class="form-control" required>
						<br><br>
						<div class="well">
						<label for="fuel">Fuel Type:</label><br>
						<input type="radio" name="fuel" value="Petrol" required> Petrol<br>
						<input type="radio" name="fuel" value="Diesel" required> Diesel<br>
						<input type="radio" name="fuel" value="Electric" required> Electric<br>
						<input type="radio" name="fuel" value="Petrol Hybrid" required> Petrol Hybrid<br>
						<input type="radio" name="fuel" value="Diesel Hybrid" required> Diesel Hybrid<br>
						<input type="radio" name="fuel" value="Solar Power" required> Solar Power<br>
					</div>
					</div>
					<div class="col-sm-6">
						<br>
						<label for="img1">Upload Images (Max 5)</label><br>
						<input type="file" name="img1" id="img1"  class="form-control" required><br>
						<br>
						<div class="well">
						<label for="condition">Condition</label><br>
						<input type="radio" name="condition" value="Used" required> Used<br>
						<input type="radio" name="condition" value="New" required> New<br>
						<input type="radio" name="condition" value="Reconditioned" required> Reconditioned<br>
						</div>
						<label for="transmission">Transmission:</label>
						<select name="transmission" id="transmission" class="form-control">
							<option required>Auto</option>
							<option>Manual</option>
							<option>Tiptronic</option>
						</select><br><br>
						<label for="engine_cap">Engine Capacity:</label>
						<input type="text" name="engine_cap" class="form-control"  required>
						<br><br>
						<label for="price">Price:</label>
						<input type="text" name="price" class="form-control"  required>
						<br><br>
					</div>
					</div>	
					<label for="description">Description:</label><br>
					<textarea name="description" rows="5" cols="60" class="form-control"  required></textarea>
					<br><br>	
					
				</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" id="submit">Submit</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel slide" id="main_carousel" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#main_carousel" data-slide-to="0" class="active"></li>
			<li data-target="#main_carousel" data-slide-to="1"></li>
			<li data-target="#main_carousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="./Resources/Images/mercedes_benz_s63_white_car-wallpaper-1920x600.jpg" alt="Mercedez">
				<div class="carousel-caption">
        			<span class="brand-label">CarZone</span>
      			</div>
			</div>
			<div class="item">
				<img src="./Resources/Images/2016_porsche_boxster_2-wallpaper-1920x600.jpg" alt="Porsche">
				<div class="carousel-caption">
        			<span class="brand-label">CarZone</span>
      			</div>
			</div>
			<div class="item">
				<img src="./Resources/Images/aston_martin_db11_car-wallpaper-1920x600.jpg" alt="Aston Martin">
				<div class="carousel-caption">
        			<span class="brand-label">CarZone</span>
      			</div>
			</div>
		</div>
		<a class="left carousel-control" href="#main_carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#main_carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>
	<br>
	<br>
	<div class="trending-searches">
		<div class="container-fluid">
			<center><span align="center" style="font-weight: bold; font-size: 30px;"><img src="./Resources/Images/icons8-increase-48.png">&nbsp&nbspTrending Advertiesments</span></center>
			<table>
				<tr>
					<?php
					include './Resources/Php/connect.php';
					$sql = "SELECT * FROM ads ORDER BY id DESC LIMIT 6";
					$result = mysqli_query($conn,$sql);
					if (mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
						echo '
					<td><img src="data:image/jpeg;base64,'.base64_encode($row['img1']).'" width="300px" height="200px" class="thumb-image" class="img-responsive"><br><h6 style="color:grey;">'.$row['full_name'].'</h6><h6 >Rs. '.$row['price'].'</h6></td>';
						}
					}
					?>
				</tr>
			</table>
			<a href="./Resources/Pages/search.php"><button style="float: right;margin-right: 12px !important;" class="btn btn-info">See All Ads</button></a>
		</div>
	</div>
	<br>
	<div class="branding">
	<div class="well">
		<table>
				<tr>
					<td>
						<div class="row">
							<div class="col-sm-4">
								<img src="./Resources/Images/icons8-easy-48.png">&nbsp&nbsp&nbsp<span class="label-header">Easy</span>
							</div>
							<div class="col-sm-8">
								You can select your desired vehicle type and use many filters tune your search results.
							</div>
						</div>			
					</td>
					<td>
						<div class="col-sm-4">
							<img src="./Resources/Images/icons8-quick-mode-on-48.png">&nbsp&nbsp&nbsp<span class="label-header">Fast</span>
						</div>
						<div class="col-sm-8">
								You can quickly select ads and contact its owners for arrangements.
						</div>
					</td>
					<td>
						<div class="col-sm-5">
							<img src="./Resources/Images/icons8-low-price-48.png"><span class="label-header">&nbsp&nbsp&nbspCheap</span>
						</div>
						<div class="col-sm-7">
								We will post your ads charging the lowest price possible.
						</div>
					</td>
				</tr>
		</table>
	</div>
	</div>
	<div class="animation">
	 	<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
		<h1>Looking for a
 		 <span
    		 class="txt-rotate"
    		 data-period="2000"
    		 data-rotate='[ "Sedan?", "SUV?", "Hybrid?", "Truck?", "Coupe?" ]'></span>
		</h1>
		<h2>CarZone is the Perfect Place.</h2>
		<script type="text/javascript" src="./Resources/Scripts/animation.js"></script>
	</div>
	<div class="vehicle-types">
	<h3 align="center">Select Vehicle Type</h3>
	<br>
	<br>
	<div class="container">
		<table>
			<tr>
				<td>
					<center><a href="./Resources/Pages/search_vtype.php?type=Sedan"><img src="./Resources/Images/Screen Shot 2019-01-03 at 19.11.40.png" class="img-responsive" width="50%"></center>
					<h5 align="center">Sedan</h5></a>
				</td>
				<td>
					<center><a href="./Resources/Pages/search_vtype.php?type=Coupe"><img src="./Resources/Images/coupe.png" class="img-responsive" width="50%"></center>
					<h5 align="center">Coupe</h5></a>
				</td>
				<td>
					<center><a href="./Resources/Pages/search_vtype.php?type=SUV"><img src="./Resources/Images/suv.png" class="img-responsive" width="50%"></center>
					<h5 align="center">Suv</h5></a>
				</td>
				<td>
					<center><a href="./Resources/Pages/search_vtype.php?type=Hatch Back"><img src="./Resources/Images/hb.png" class="img-responsive" width="50%"></center>
					<h5 align="center">Hatch Back</h5></a>
				</td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td><center><a href="./Resources/Pages/search_vtype.php?type=Hybrid"><img src="./Resources/Images/hy.png" class="img-responsive" width="50%"></center>
					<h5 align="center">Hybrid</h5></a>
				</td>
				<td><center><a href="./Resources/Pages/search_vtype.php?type=Convertible"><img src="./Resources/Images/con.png" class="img-responsive" width="50%"></center>
					<h5 align="center">Convertible</h5></a>
				</td>
				<td><center><a href="./Resources/Pages/search_vtype.php?type=Sport"><img src="./Resources/Images/sport.png" class="img-responsive" width="50%"></center>
					<h5 align="center">Sport</h5></a>
				</td>
				<td><center><a href="./Resources/Pages/search_vtype.php?type=Truck"><img src="./Resources/Images/truck.png" class="img-responsive" width="50%"></center>
					<h5 align="center">Truck</h5></a>
				</td>
			</tr>
		</table>
	</div>
	</div>
	<br><br>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h4>About Us</h4>
					<br>
					<span class="footer-desc">
						We are a Group of 3 Undergraduates of NSBM Green University Town - Homagama.This Web Application is a Assignment of Web Based Application Development Module.
					</span>
				</div>
				<div class="col-sm-4">
					<h4>Contact Info</h4>
					<br>
					<span class="footer-desc">
						<i class="fa fa-location-arrow"></i> NSBM Green University Town , Dampe , Pitipana , Homagama <br>
						<i class="fa fa-phone"></i> 0778652276<br>
						<i class="fa fa fa-envelope"></i> info@example.com<br>
					</span>
				</div>
				<div class="col-sm-4">
					<h4>Find Us</h4>
					<br>
					<center>
					<span class="footer-desc">
						Hiroon Wijekoon - 10024611<br>
						K L Samarasinghe - 10025157<br>
						R M U W Bandara - 10025428<br>
					</span>
				</center>
				</div>
		</div>
		<br>
		<hr>
		</div>
		<center>
		<ul class="footer-bottom">
			<li><a href="">Home</a></li>
			<li><a href="">Cars For Sale</a></li>
			<li><a href="">Post an Ad</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
		</ul>
		</center>
		<div class="text-center" style="color: grey;">Copyright @2019 | Designed By HKU Apps</div>
		<ul class="social_footer_ul">
			<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
			<li><a href=""><i class="fab fa-twitter"></i></a></li>
			<li><a href=""><i class="fab fa-linkedin"></i></a></li>
			<li><a href=""><i class="fab fa-instagram"></i></a></li>
		</ul>
		<br><br>
	
</body>
</html>