<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner" style="background: url(3.jpg);background-size: cover;min-height: 800px;">
	<div class="container">
		<!-- <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;" style="color:#000 !important"> TMS - Tourism Management System</h1> -->
	</div>
</div>






<!---holiday---->
<div class="container">
	<div class="holiday" >
	



	
	<h3>Package List</h3>

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h5>Package Type : <?php echo htmlentities($result->PackageType);?></h5>
					<h5><b>Package Location :</b> <b style="color: #34ad00;"><?php echo htmlentities($result->PackageLocation);?></b></h5>
					<h5><b>Package Duration :</b><b style="color: #34ad00;"> <?php echo htmlentities($result->PackageDuration);?></b></h5>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>INR <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View More Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>



<!--- routes ---->
<center>
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3><?php $sql = "SELECT id from tblusers";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
					?>			<?php echo htmlentities($cnt);?></h3>
				<p>Registered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3><?php $sql1 = "SELECT BookingId from tblbooking";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$cnt1=$query1->rowCount();
					?>
								<?php echo htmlentities($cnt1);?></h3>
				<p>Booking</p>
				</div>
				<div class="clearfix"></div>
</div>
<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt" style="font-size: 50px;"></i></a>
			</div>
			<div class="rou-rgt">
				<h3><?php $sql2 = "SELECT id from tblenquiry";
$query2= $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$cnt2=$query2->rowCount();
					?>
								<?php echo htmlentities($cnt2);?></h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
</div>
</center>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>