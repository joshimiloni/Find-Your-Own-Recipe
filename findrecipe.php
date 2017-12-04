<!DOCTYPE html>
<html lang="zxx">
<head>
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
	
<body>
	<?php

$con = mysqli_connect("localhost","root","vodafone2510") or die("unable to connect");
$db = mysqli_select_db($con,"recipe_final");
session_start();
?>
	<!-- start array declarations-->
	<?php 
    $dairy = array("Milk", "Butter", "Cream", "Whipping cream", "Eggs", "Cheese", "Sour Cream", "Egg Whites", "Peanut Butter", "Vanilla Extract", "Mozzarella", "Parmesan");
    $vegetable = array("Lentil", "Celery", "Lettuce", "Bean", "Tomato", "Carrot", "Onion", "Bay Leaves", "Shallots", "Potato", "Fennel", "Basil", "Spinach", "Snap Pea", "Kimchi", "Scallions", "Pea", "Parsley", "Cornichons", "Gherkins", "Baby Peas", "Marjoram", "Sweet Potato", "Yam", "Lemongrass", "Macadamia", "Cilantro", "Chive", "Escarole", "Mushroom", "Turkih Bay Leaves", "Asparagus", "Radish", "Red Bell Pepper", "Watercress", "Tarragon Leaves", "Leafy Green", "Treviso Radicchio", "Cucumber");
    $nonveg = array("Turkey", "Chicken", "Pork", "Fish", "Anchovy", "Fillets", "Bacon", "Ham", "Chicken Broth", "Steak", "Gelatin", "Shrimp", "Blacan", "Beef Tenderloin", "Beef Broth", "Tuna", "Cod", "Halibut", "Pancetta"); 
    $fruit = array("Apple", "Lemon", "Dried Fruit", "Avocado", "Kumquats", "Coconut", "Banana", "Peach", "Juniper Berries", "Capers", "Asian Pear", "Orange", "Pear");
    $spices = array("Thyme", "Black Pepper", "Salt", "Garlic Clove", "Pepper", "Ground Nutmeg", "Currants", "Garlic", "Chilli Powder", "Ginger", "Rosemary", "Nutmeg", "Galangal", "Turmeric", "Red Chiles", "Sea Salt", "Asian Chilli Paste", "White Pepper", "Clove", "Cinnamon");
    $seasonings = array("Vinegar", "Oregano", "Mayonnaise", "Apple Cider Vinegar", "Fresh Mint", "Jalapeno", "Black Peppercorns");
    $extras = array("Cookie", "Tortillas", "Egg Noodles", "Pasta", "White Rice", "Rice Noodles", "Cake", " Lime Juice", "White Cornmeal", "Orange Juice");
    $oil = array("Olive Oil", "Vegetable Oil"); 
    $sauces = array("Pesto Sauce", "Soy Sauce", "Sesame Sauce" ,"Mustard", "Sauce"); 
    $sweetners = array("Sugar", "Chocolate", "Chocolate Chips", "Brown Sugar", "Honey", "Jam", "Jelly", "Strawberry Preserves");
    $seedsnuts = array("Candlenuts", "Mustard Seeds", "Coriander Seeds", "Cumin Seeds", "Sesame Seeds", "Pecan");
    $alcohol = array("Port", "Red Wine", "White Wine", "Brandy"); 
    $bakingandgrains = array("Flour", "Baugette", "White Bread", "Bean-Curd Puffs", "Wheat", "Bread", "Breadcrumbs");
?>
<!-- end array declarations-->
<!--start php col-md-divisions-->
<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 2;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<!--end php col-md-divisions-->
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
							<li class="active"><a href="findrecipe.php" class="scroll hvr-bounce-to-bottom">Find Recipe</a></li>
							<li><a href="contact.php" class="scroll hvr-bounce-to-bottom">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
	 </div>
</div>
<!-- banner -->

<div class="agile_menu" id="menu">
		<div class="container">
		<div class="menu_w3ls_agile_top_section">
			<div class="row">	
			<div class="ziehharmonika col-md-4">
			<!-- start dairy-->
			<h3 style="padding-top:15px;padding-bottom:15px">DAIRY</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($dairy as $dai){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px;padding-right:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $dai; ?>" onchange = "checker(this)">
           <?php 
		 echo $dai 
	   ?>

	 <p id = "<?php echo $dai; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end dairy-->

<!-- start vegetable-->
			<h3 style="padding-top:15px;padding-bottom:15px">VEGETABLE</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($vegetable as $veg){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $veg; ?>" onchange = "checker(this)">
           <?php 
		 echo $veg 
	   ?>

	 <p id = "<?php echo $veg; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end vegetable-->
<!-- start nonveg-->
			<h3 style="padding-top:15px;padding-bottom:15px">NON-VEG</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($nonveg as $non){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $non; ?>" onchange = "checker(this)">
           <?php 
		 echo $non 
	   ?>

	 <p id = "<?php echo $non; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end nonveg-->	
<!-- start fruit-->
			<h3 style="padding-top:15px;padding-bottom:15px">FRUIT</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($fruit as $fru){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $fru; ?>" onchange = "checker(this)">
           <?php 
		 echo $fru 
	   ?>

	 <p id = "<?php echo $fru; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end fruit-->
<!-- start spices-->
			<h3 style="padding-top:15px;padding-bottom:15px">SPICE</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($spices as $spi){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $spi; ?>" onchange = "checker(this)">
           <?php 
		 echo $spi 
	   ?>

	 <p id = "<?php echo $spi; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end spices-->	
<!-- start seasonings-->
			<h3 style="padding-top:15px;padding-bottom:15px">SEASONINGS</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($seasonings as $season){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $season; ?>" onchange = "checker(this)">
           <?php 
		 echo $season 
	   ?>

	 <p id = "<?php echo $season; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end seasonings-->	
<!-- start extras-->
			<h3 style="padding-top:15px;padding-bottom:15px">EXTRAS</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($extras as $ext){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $ext; ?>" onchange = "checker(this)">
           <?php 
		 echo $ext 
	   ?>

	 <p id = "<?php echo $ext; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end extras-->	
<!-- start oil-->
			<h3 style="padding-top:15px;padding-bottom:15px">OIL</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($oil as $oils){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $oils; ?>" onchange = "checker(this)">
           <?php 
		 echo $oils 
	   ?>

	 <p id = "<?php echo $oils; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end oil-->
<!-- start sauce-->
			<h3 style="padding-top:15px;padding-bottom:15px">SAUCE</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($sauces as $sauce){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $sauce; ?>" onchange = "checker(this)">
           <?php 
		 echo $sauce 
	   ?>

	 <p id = "<?php echo $sauce; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end sauce-->
<!-- start sweetners-->
			<h3 style="padding-top:15px;padding-bottom:15px">SWEETNERS</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($sweetners as $sweet){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $sweet; ?>" onchange = "checker(this)">
           <?php 
		 echo $sweet 
	   ?>

	 <p id = "<?php echo $sweet; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end sweetners-->	
<!-- start seedsnuts-->
			<h3 style="padding-top:15px;padding-bottom:15px">SEEDS AND NUTS</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($seedsnuts as $seeds){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $seeds; ?>" onchange = "checker(this)">
           <?php 
		 echo $seeds 
	   ?>

	 <p id = "<?php echo $seeds; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end seedsnuts-->
<!-- start alcohol-->
			<h3 style="padding-top:15px;padding-bottom:15px">ALCOHOL</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($alcohol as $alc){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $alc; ?>" onchange = "checker(this)">
           <?php 
		 echo $alc 
	   ?>

	 <p id = "<?php echo $alc; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end alcohol-->
<!-- start bakingandgrains-->
			<h3 style="padding-top:15px;padding-bottom:15px">BAKING AND GRAINS</h3>
			<div>
			   <div class="w3_agile_recipe-grid">
                 
<?php
foreach ($bakingandgrains as $baking){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="padding-left:0px">

	 <input type="checkbox" class = "classname" value = "<?php echo $baking; ?>" onchange = "checker(this)">
           <?php 
		 echo $baking 
	   ?>

	 <p id = "<?php echo $baking; ?>"> </p>
        </div>	
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>          
									
								   
								<div class="clearfix"> </div>
					    </div>

			</div>
			<!--end bakingandgrains-->			
		</div>
		<div class="col-md-8">
			<form method="post">
			<textarea type="text"  name="inputtest" style="border:1px solid #000000;" id="inputtest" class="DISTRIBUTION" rows="7" cols="93"/></textarea>
			<br>
			<!--<textarea type="text" id="test" rows="46" cols="100"/></textarea>-->
			<div class="row">
         <div id="output" style="border:1px solid #000000;min-height:1000px;margin-top:20px;margin-left:13px;margin-right:0px;">
         </div>
     </div>
			</form>
		</div>	
	</div>
		</div>
	</div>
</div>

<!-- js -->

<script src="js/jquery-2.2.3.min.js"></script>
<!-- start-smoth-scrolling -->
<!--<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<!-- Calendar -->

						<script src="js/jquery-ui.js"></script>
						<script>
								$(function() {
									$( "#datepicker" ).datepicker();
								});
						</script>
						<!-- //Calendar -->  
<script src="js/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script src="js/ziehharmonika.js"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
	<!-- Gallery-Tab-JavaScript -->
			<script src="js/cbpFWTabs.js"></script>
			<script>
				(function() {
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
					});
				})();
			</script>
		<!-- //Gallery-Tab-JavaScript -->


<!-- Swipe-Box-JavaScript -->
			<!--<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script> -->
		<!-- //Swipe-Box-JavaScript -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Flavorful
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/d11.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

<!-- flexSlider -->
	<!--<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script> -->
<!-- //flexSlider -->
<!-- start-smoth-scrolling -->
		<!--	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script> -->
	
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script>
var results = [];

$(".classname").change(function () {
    var item = $(this).val();
    var index = results.indexOf(item);
    if ($(this).is(":checked")) {
        if (index == -1) {
            results.push(item);
        }
    } else {
        if (index > -1) {
            results.splice(index, 1);
        }
    }
    $(".DISTRIBUTION").val(results.join(","));
});
</script>

<script>
changeTextarea();
   
function changeTextarea(){
        $('#output').html("loading...");

        var email = $('textarea').val();

        $.post("recipe.php", {email:$('textarea').val()} );

        // ACCESS QUERY RESULTS (HOPEFULLY!)
        $.ajax({                                      
            url: 'recipe.php',
            type: 'post',
           data: {
        email: $('textarea').val()
    },
            success: function(data)
                {
                    var result = data
                    $('#output').html(result);
                }
    });
    setTimeout("changeTextarea()", 6000);
}
 

    </script>
    
</body>
</html>
