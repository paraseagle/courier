<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="icofont/icofont.css" rel="stylesheet"/>
</head>
<body>
<?php $sql="select * from admin order by aid desc";
  $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    
?>
	<div class="row bg-dark text-light text-center">
		<div class="col-3"></div>
		<div class="col-6 mt-5 mb-5"><h2 class="text-light  text-center">You Can Contact Us</h2>
          <p><?php echo $row['coname'];?><br>
          <?php echo $row['addr'];?><br>
          <?php echo $row['ph'];?></p>
          <p><a href="mailto:<?php echo $row['mail'];  ?>" class="text-decoration-none text-light" ><?php echo $row['mail'];?></a></p>
           <p class="mt">
            <a href="https://www.facebook.com/<?php echo $row['fb']; ?>" target="_blank" class="text-decoration-none text-light"  ><i class="icofont-facebook icofont-3x"></i></a>
            <a href="https://www.twitter.com/<?php echo $row['twitter']; ?>" target="_blank" class="text-decoration-none text-light"><i class="icofont-twitter icofont-3x"></i></a>
            <a href="https://plus.google.com/<?php echo $row['gpluse']; ?>" target="_blank" class="text-decoration-none text-light"><i class="icofont-google-plus icofont-3x"></i></a>
          </p>
           <h6 class="mt">COPYRIGHT &copy; <?php echo date("Y"); ?> - Powered By <a href="index.php" target="_blank" class="text-decoration-none text-light"><?php echo $row['coname'] ?></a></h6>
          

		</div>
		<div class="col-3"></div>

	</div>

</body>
</html>
































<script  src="js/jquery.js"></script>

	<script src="js/bootstrap.bundle.min.js"></script>

