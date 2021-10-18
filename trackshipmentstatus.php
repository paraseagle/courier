<?php include'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{font-size: 12px;font-family: verdana;}
	</style>
</head>
<body>

	
	<?php

    $sql="select * from parcel where consignment_no='".$_POST['search']."'";
    if (isset($_POST['tracknow'])) {
    	# code...
    
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $cons_no=$row['consignment_no'];
}
	 ?>

<div class="container">
	<div style="text-align: right;" class="mt-3"><a href="index.php"><button class="btn text-light" style="background-color: #fd7e14">Back</button></a></div>
	<div class="text-center mt-5" >
	<h5 style="font-size: 30px;">Forwarded Air Way Bill no:<?php echo $row['consignment_no']?></h5></div>
	<div style="background-color: #ffd699;" class="p-2">Air Way  Bill No:<?php echo $row['consignment_no']?> Date:<?php echo $row['pickup_date']?></div>
	<div class="row p-2">
		<div class="col-2"><strong>Status:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php 	if($row['status']=="D")
					echo "<span style=background-color:green;'><b style=color:white; padding:5px !important;'>&nbsp;&nbsp;&nbsp;Delivered&nbsp;&nbsp;&nbsp;</b></span>";
					else if($row['status']=="DL")
					echo "<span style='background-color:yellow; padding:0px !important;'>&nbsp;&nbsp;&nbsp;&nbsp;Delay&nbsp;&nbsp;&nbsp;&nbsp;</span>";
					else if($row['status']=="t")
					echo "<span style=background-color:red;'><b style=color:white; padding:5px !important;'>&nbsp;In Transit&nbsp;</b></span>";
					else
						echo "";?></div>
		<div class="col-1"></div>
		<div class="col-3"><strong>Expected Delivery Date:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['expected_dly']?></div>
	</div>
	<div class="row p-2">
		<div class="col-2"><strong>Origin:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['origin']?></div>
		<div class="col-1"></div>
		<div class="col-3"><strong>Destination:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['destination']?></div>
	</div>
	<div class="row p-2">
		<div class="col-2"><strong>Pieces:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['quantity']?></div>
		<div class="col-1"></div>
		<div class="col-3"><strong>Weight:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['weight']?></div>
	</div>
	<div style="background-color: #ffd699;" class="p-2">Shipper Information</div>
	<div class="row p-2">
		<div class="col-2"><strong>Shipper Name:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['ship_name']?></div>
		<div class="col-1"></div>
		<div class="col-3"><strong>Shipper Address:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['ship_address']?></div>
	</div>
    <div style="background-color: #ffd699;" class="p-2">Consignee Information</div>
	<div class="row p-2">
		<div class="col-2"><strong>Consignee Name:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['recv_name']?></div>
		<div class="col-1"></div>
		<div class="col-3"><strong>Consignee Address:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['recr_address']?></div>
	</div>

	<div class="row p-2">
		<div class="col-2"><strong>Booking Mode:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php  if($row['booking_mode']=="P")echo "Paid";
					else if($row['booking_mode']=="T")
					echo "To Pay";
					else if($row['booking_mode']=="TB")
					echo "To Be Paid";
					else
						echo ""; ?></div>
		<div class="col-1"></div>
		<div class="col-3"><strong>Consignee Phone:</strong></div>
		<div class="col-1"></div>
		<div class="col-2"><?php echo $row['recv_phone']?></div>
	</div>

	<div style="background-color: #ffd699;" class="p-2">Shipment Delivery Status</div>
	<div class="row p-2">
		<div class="col-2"><strong>Comment:</strong></div>
		<div class="col-1"></div>
		<div class="col-3"><?php echo $row['comments']?></div>
		<div class="col-6"></div>
		
	</div>

	<div style="background-color: #ffd699;"class="p-2 mb-4">Forwarded Air Way Bill no:<?php echo $row['consignment_no']?></div>



	
	


</div>
</body>
</html>
<?php include'footer.php';?>