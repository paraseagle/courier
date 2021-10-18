
<!DOCTYPE html>
<?php session_start(); include 'connection.php' 


 ?>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="icofont/icofont.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css">

</head>
<body>
	<div class="row">
		<div class="col-12">
			<div class="card">

	
		<img src="assets/img/header.jpg" width="100%" height="700px">
    <div class="card-img-overlay">
    
    		<div class="card-body">
    			<div class="row">
                    <?php
    $sql="select * from admin order by aid desc";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    
        ?>
    				<div class="col-9"></div>
    				<div class="col-3 " style="text-align: right;"><a href="https://www.facebook.com/<?php echo $row['fb']; ?>" target="_blank" class="text-decoration-none"><i class="icofont-facebook text-light  icofont-2x ml-3 "></i></a><a href="https://www.twitter.com/<?php echo $row['twitter']; ?>" target="_blank" class="text-decoration-none"><i class="icofont-twitter text-light ml-3 icofont-2x "></i></a><a href="https://www.plus.google.com/<?php echo $row['gpluse']; ?>" target="_blank" class="text-decoration-none"><i class="icofont-google-plus icofont-2x text-light ml-3 "></i></a></div>

    			</div>
<form method="POST" action="trackshipmentstatus.php">
    			<h1 class="text-light text-center " style="margin-top: 130px;" >Track Now(Consignment No)</h1>
    			<div class="row">
    				<div class="col-3"></div>
    				
    				<div class="col-4 mt-4"><input type="text" name="search" id="search" class="form-control p-4 rounded-pill" placeholder="Enter Your AWB or Shipment Number here"></div>
    				<div class="col-2 mt-4 "><button class="rounded-pill p-3 text-light b1 " type="submit" name="tracknow" style="font-weight: bold; font-size: 20px; border:none;background-color:  #fd7e14;"onclick="return trakvalid();" >Track now</button></form></div>
    				<div class="col-3"></div>

    			</div>
    		</div>
    	
    	
    </div></div>




	    </div>
	</div>
	
	
</body>
</html>