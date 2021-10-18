<?php include 'header.php';?>

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

    $sql="select * from parcel where consignment_no='".$_POST['track']."'";
    if (isset($_POST['tracknow'])) {
    	# code...
    
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $cons_no=$row['consignment_no'];
}
	 ?>

    


	<div class="container">
		<div class="row">
		<div class="col-2"></div>
		<div class="col-8 mt-3 mb-5 p-2">
			<h5>Tracking Shipment</h5><form method="POST">
			<div class="card ">
				<div class="card-header">
					<div class="row">
						<div class="col-3"><strong>Consignment no:<?php echo $row['consignment_no']?></strong></div>
						<div class="col-7"></div>
						<div class="col-2"><?php echo"<a href='modifyconsign.php?con_no=$cons_no'>Modify</a>"?></div>


					</div>
					</div>


					<table class="table" >
						<tr >
							<th >Shipper</th>
							<th>Reciever</th>


						</tr>
						<tr class="ml-2 mt-2">
							<td><?php echo$row['ship_name']?></td>
							
							
							<td><?php echo $row['recv_name']?></td>
						</tr>
						<tr class="ml-2 mt-2">
							<td><?php echo$row['ship_phone']?></td>
							
							
							<td><?php echo $row['recv_phone']?></td>
						</tr>
						<tr class="ml-2 mt-2">
							<td><?php echo$row['ship_address']?></td>
							
							
							<td><?php echo $row['recr_address']?></td>
						</tr>
						<tr class="ml-2 mt-2">
							<th>Origin</th>
							<td><?php echo $row['origin']?></td>
							<th>Destination</th>
							<td><?php echo $row['destination']?></td>
						</tr>
						<tr class="ml-2 mt-2">
							<th>Pickup date/time</th>
							<td><?php echo $row['pickup_date']?>/<?php echo $row['pickup_time']?></td>
							<th>Weight</th>
							<td><?php echo $row['weight']?></td>
						</tr>
						<tr class="ml-2 mt-2">
							<th>Courier</th>
							<td><?php echo $row['courier']?></td>
							<th>Status</th>
							<td> <?php 
		 			if($row['status']=="D")
					echo "Delivered";
					else if($row['status']=="DL")
					echo "Delay";
					else if($row['status']=="t")
					echo "In Transit";
					else
						echo "";
		  ?></td>
						</tr>
						<tr class="ml-2 mt-2">
							<th>Expected Delivery date</th>
							<td><?php echo $row['expected_dly']?></td>
							<th>Freight</th>
							<td><?php echo $row['total_freight']?></td>
						</tr>
						<tr >
							<th>Comments</th>
							<td ><?php echo $row['comments']?></td>
						
							
						</tr>
					</table>
				</form>
			
		</div>

	</div>
</div>

</body>
</html>		
 <?php include 'footer.php';?>