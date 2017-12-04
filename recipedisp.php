<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Find your Own Recipe</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flavorful Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Portfolio-CSS -->
<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<link href="css/team.css" rel="stylesheet" type="text/css">
<link href="css/JiSlider.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
</head> 

<style>
.jumbotron{
	margin-top:20px;
	background-color: lightcyan;
}
.dispimg{
	border-radius:5px;
	margin-bottom: 15px;
}
.rating-span{
	font-size: 13px;
	float:right;
	color: gray; 
	padding-top: 30px;
	padding-right:8px;
}
@media screen and (min-width: 699px){
.ingredient-div{
	border-right:1px solid lightgray;
}
}

</style>
</head>
<body>
<div class="main" id="home">
<!-- banner -->
		<div class="header-bottom">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="index.html"><span>F</span>lavorful <i class="fa fa-spoon" aria-hidden="true"></i> <p>Find your Own Recipe</p></a></h1>
					</div>
				</div>
			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li><a class="scroll" href="index.php">Home</a></li>
							<li class="active"><a href="test.php" class="scroll hvr-bounce-to-bottom">Find Recipe</a></li>
							<li><a href="contact.php" class="scroll hvr-bounce-to-bottom">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
	 </div>
</div>
<!-- banner -->
	<?php

		$con = mysqli_connect("localhost","root","vodafone2510") or die("unable to connect");
		$db = mysqli_select_db($con,"recipe_final");
		session_start();
	?>
	<?php $item_id = $_GET["Item_id"]; ?>
	<?php $query1 = "select * from recipemastertable where recipeid = $item_id"; 
	$result1 = mysqli_query($con,$query1); 
	while($row1 = $result1->fetch_assoc())
				$arraynew1[] = $row1;
				//print_r($arraynew1);
				?>
	<div class="container-fluid">
		<div class="jumbotron" style="background-color: lightcyan;">
			<div class="row">
				<div class="col-md-9">
					<?php $imgpath = $arraynew1['0']['image']; ?>
					<?php echo "<img src=\"".$imgpath."\" width='850' height='450'>"; ?>
 
					<h2 style="width:100%; font-size: 42px;"> <?php print_r($arraynew1['0']['title']); ?> <span class="rating-span"> Rating: 4 </span> </h2>
					<hr style="border-color: lightgray;">
					

					<div class="row">
						<div class="col-md-8 ingredient-div">

							<h2 style="border-right:"> Ingredients </h2>
							<hr style="border-color: lightgray;">
							<ul style="list-style-type: none; color: gray; ">
								 <?php 
								 $ingarray = explode(', ',$arraynew1['0']['ingredients']);
								 foreach($ingarray as $ing){?>
								 	<li> <?php print_r($ing); ?>  </li>
								 <?php }
								 ?>
							</ul>
						</div>
						<div class="col-md-4">
							<h2> Nutrition </h2>
							<hr style="border-color: lightgray;">
							<ul style="list-style-type: none; color: gray;">
								
								<li> Sodium: <?php print_r($arraynew1['0']['sodium']); ?></li>
								<li> Calories:<?php print_r($arraynew1['0']['calories']); ?></li>
								<li> Fats:<?php print_r($arraynew1['0']['fat']); ?></li> 
							</ul>
							<h3 style="border-right:"> Ingredients Present</h3>
							<hr style="border-color: lightgray;">
							<ul style="list-style-type: none; color: gray; ">
								<?php 
								$marray=array();
								$marray = $_SESSION["matcharray"];
								 foreach($marray as $match){?>
								 	<li> <?php print_r($match); ?>
								 	   </li>
								 <?php }
								 ?>
							</ul>
					<h3 style="margin-top: 5px; margin-bottom: -8px;"> Ingredients Required</h3>
							<hr style="border-color: lightgray;">
							<ul style="list-style-type: none; color: gray; ">
								<?php 
								$nmarray=array();
								$nmarray = $_SESSION["nomatcharray"];
								 foreach($nmarray as $nmatch){?>
								 	<li> <?php print_r($nmatch); ?>
								 	   </li>
								 <?php }
								 ?>
							</ul>
						</div>
					</div>
					<div>
						<h2 style="padding-top: 10px;"> Directions </h2>
						<hr style="border-color: lightgray;">
							<ol style="color: gray;">
								<?php if(!empty($arraynew1['0']['direction_001']))
								 echo "<li>" .$arraynew1['0']['direction_001']. "</li>"; ?>
								<?php if(!empty($arraynew1['0']['direction_002']))
								 echo "<li>" .$arraynew1['0']['direction_002']. "</li>"; ?>
								<?php if(!empty($arraynew1['0']['direction_003']))
								 echo "<li>" .$arraynew1['0']['direction_003']. "</li>"; ?>
								<?php if(!empty($arraynew1['0']['direction_004']))
								 echo "<li>" .$arraynew1['0']['direction_004']. "</li>"; ?>
								<?php if(!empty($arraynew1['0']['direction_005']))
								 echo "<li>" .$arraynew1['0']['direction_005']. "</li>"; ?>
								<?php if(!empty($arraynew1['0']['direction_006']))
								 echo "<li>" .$arraynew1['0']['direction_006']. "</li>"; ?>
							</ol>
					</div>

				</div>
				<div class="col-md-3">
					
					<h3 style="margin-top: 10px; margin-bottom: -8px;">
					Related recepies </h3>
					<hr style="border-color: lightgray;">
				
					<?php $matchid = $_SESSION["matchidarray"];
					//print_r($matchid);
					//print_r($item_id);
					$excluded_array= array_search($item_id, $matchid);
					unset($matchid[$excluded_array]);
					foreach($matchid as $matchidrelated){
						//print_r($matchrelated);
					$queryrelated = "select title,image from recipemastertable where recipeid = $matchidrelated"; 
					
					$resultrelated = mysqli_query($con,$queryrelated); 
					//print_r($resultrelated);

					$arrayrelated = array();
					while($rowrelated = $resultrelated->fetch_assoc()){
						$arrayrelated[] = $rowrelated;
					}	
						//print_r($arrayrelated);
						print_r($arrayrelated['0']['title']);
						?>
						<a href="recipedisp.php?Item_id=<?php echo $matchidrelated ?>">View</a>
						<?php 
						$imgpath = $arrayrelated['0']['image']; 
						echo "<img src=\"".$imgpath."\" width='300' height='200'>"; 
						echo "<br><br>";
					}
					?>	 	
				</div>
			</div>
		</div>
	</div>

</body>	
