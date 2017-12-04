<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.bigdiv{
			background-color: cyan;
			margin:10px;
			border-radius: 5px;
			padding:10px;
			text-align: center;
		}
		.maindiv{
			background-color:blue;
		}
	</style>
</head>

<body>



<?php
$con = mysqli_connect("localhost","root","vodafone2510") or die("unable to connect");
$db = mysqli_select_db($con,"recipe_final");
session_start();
?>
<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 2;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<?php
$arraynew = array();
$query = "select recipeid, categories from recipemastertable";
$result = mysqli_query($con,$query);
$storerecid = array();

while($row = $result->fetch_assoc()){
	$arraynew[] = $row;
}

$testvar = array();
$inpstring = $_POST['email'];
$testvar = explode(",",$inpstring);

for($i = 0; $i <=10; $i++)
{	
	$testarr = array();
	$arraynew1 = array();
	$testexplode = $arraynew[$i]['categories'];
	$idd = $arraynew[$i]['recipeid'];
	$testarr = explode(", ",$testexplode);
	$notmatch = array();
	$match = array();
	$now = array();
	?>
	
		<?php
	foreach($testvar as $inp)
	{

		if(in_array($inp,$testarr))
		{	
			?>

			<div class="col-md-<?php echo $bootstrapColWidth; ?>">
				<?php
			foreach($testarr as $inpmatch)
			{
				if(in_array($inpmatch,$testvar))
					array_push($match, $inpmatch);
					
				else
					array_push($notmatch, $inpmatch);
					
			}

			array_push($storerecid, $arraynew[$i]['recipeid']);
			$_SESSION["matchidarray"] = $storerecid;

			$query1 = "select * from recipemastertable where recipeid = $idd";
			$result1 = mysqli_query($con,$query1);
			while($row1 = $result1->fetch_assoc())
				$arraynew1[] = $row1;

			foreach($arraynew1 as $titlearr)
			{
				//print_r($titlearr['recipeid']);
				//echo "<br>";
				$imgpath = $titlearr['image']; 
						echo "<br> <img src=\"".$imgpath."\" width='350' height='200'>"; 
						echo "<br>";
				echo "<br>";
				?>

				<center>
				<a  href="recipedisp.php?Item_id=<?php echo $idd ?>"><?php print_r($titlearr['title']); ?></a></center><br>
					
				<?php
				?>
				
				<?php
			}
			$_SESSION["matcharray"] = $match;
			$_SESSION["nomatcharray"] = $notmatch;
			?>
			<div class="col-md-6">
			<?php
			echo "Matched";
			foreach($match as $mt)
			{
				echo " <h5 style='color:green'> $mt &nbsp </h5>" ;
			}
			?>
			</div>
			<div class="col-md-6">
			<?php 
			echo "Unmatched";
			echo "<h5 style='color:red'>";
			foreach($notmatch as $nomatch)
			{
				echo " $nomatch";
				echo "<br>";
			}
			echo "</h5>";
			?>
			</div>
		</div>
		<?php
		$rowCount++;
   		if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
			break;
		
			?>
			
			<?php
		}

		?>
		
		<?php 
	}
	?> 
	<?php
}

?> 

<?php
mysqli_close($con);
?>

</body> 
</html>
