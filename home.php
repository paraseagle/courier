
<?php include'connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="icofont/icofont.css" rel="stylesheet"/>
</head>
<body>
<?php
	$sql="select * from admin order by aid desc";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    
	 	?>
	<div class="container">
	<div class="row mt-5 mb-5">
		<div class="col-4"><h4 style="font-family: sans-serif;">About Us</h4></div>
		<div class="col-8"></div>

	</div>
	<div class="row mt-3 mb-3">
		<div class="col-12" style="font-family: system-ui;" ><?php echo $row['about']?></div>
	</div>

	</div>
</div>


<div class="card mt-5 mb-5">
	<div class="card-img"><img src="assets/img/sep.jpg" height="450px" width="100%">
    <div class="card-img-overlay">
    	<div class="container">
    		<div class="container-fluid">
    			<div class="text-center text-light fw-lighter"><h5 style="font-size: 45px; margin-left: -25px; font-family: serif;">OUR SERVICES</h5></div>
    			<div class="row">
    				<?php
				$sql="select * from services  order by sid desc";
				$result=$conn->query($sql);
				if ($result->num_rows>0) {
				 	while($row=$result->fetch_assoc())
				 	{
				 		$sid=$row['sid'];
				 		

				 		?>
    				<div class="col-4 text-light mt-4 "><h4 style="font-family: ui-serif;"><?php echo $row['services_name']?></h4>
    					<br>
    					<div><?php echo $row['content']?></div>
    				</div>
    					<?php	 		

				 	}
				 }
				 else{
				 	echo "<td>no blog found</td>";
				 } 


				?>
    			</div>
    		</div>
    	</div>
    </div>
	</div>
</div>

<div class="row mt-3 mb-5">
	<div class="container">
		<div class="row">
			<?php
				$sql="select * from partner_logo  order by lid desc";
				$result=$conn->query($sql);
				if ($result->num_rows>0) {
				 	while($row=$result->fetch_assoc())
				 	{
				 		$lid=$row['lid'];
				 		
                       $logo=$row['logo'];
				 		?>
			<div class="col-3 mt-3 mb-3"><a href="http://<?php echo $row['url']; ?>" target="_blank"><img src="admin/<?php echo $logo;?>" height="60px"></a></div>
			<?php	 		

				 	}
				 }
				 else{
				 	echo "<td>no blog found</td>";
				 } 


				?>
		</div>
	</div>
</div>


<div class="row text-center" style="background-color: #fd7e14;">
	<div class="col-2"></div>
	<div class="col-8 text-light " style="margin-top: 80px;margin-bottom: 80px;">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  

  </ol>
  
 <div class="carousel-inner">
			<?php
				$sql="select * from testimonial  order by tid desc limit 3";
				$result=$conn->query($sql);
				if ($result->num_rows>0) {
					$row=$result->fetch_assoc();
					$message=$row['message'];
					?>
					<div class="carousel-item active">
				 			
      <h4><?php echo $message;?></h4>
      <h6><?php echo $row['name'];?></h6>
    </div>
    <?php
				 	while($row=$result->fetch_assoc())
				 	{
				 		$tid=$row['tid'];
				 		
                       $message=$row['message'];
				 		
				 		?>
				 		<div class="carousel-item ">

				 			
      <h4><?php echo $message;?></h4>
      <h6><?php echo $row['name'];?></h6>
    </div>
				 		


				 		<?php	 		

				 	}
				 }
				 else{
				 	echo "<td>no testimonial found</td>";
				 } 


				?>
				</div>
				

</div>
</div></div>
	<div class="col-2"></div>
</div>
</div>

    
</body>
</html>

