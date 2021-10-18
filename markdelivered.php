<?php include 'pheader.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/bootstrap.css" rel="stylesheet"/>
<link href="../icofont/icofont.css" rel="stylesheet"/>

	<style type="text/css">
		body{font-size: 12px;font-family: verdana;}
	</style>
</head>
<body>
	<?php
$qry="update parcel set status='D' where consignment_no='$_GET[cons_no]'";
    $sql="select * from parcel  where  consignment_no='$_GET[cons_no]' ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
	 ?>
	<h4 class="text-center mt-2">Consignment Updated</h4>

	<div class="row">
	<div class="col-3"></div>
	<div class="col-6">
		<div class="card shadow">
			<div class="container"><form method="POST">
			<div class="card-body">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-4">Delivery Date:</div>
					<div class="col-6"><input type="date" name="pd" class="form-control" value="<?php echo $row['pickup_date'];?>"></div>

				</div>
				<div class="row">
					<div class="col-2"></div>
					<div class="col-4">Delivery Time:</div>
					<div class="col-6"><input type="text" name="pt" class="form-control mt-2"  value="<?php echo $row['pickup_time'];?>"></div>

				</div>
				<div class="row">
					<div class="col-2"></div>
					<div class="col-4">Comments</div>
					<div class="col-6"><textarea class="form-control mt-2" cols="3" rows="3" name="comments"><?php echo $row['comments'];?></textarea></div>

				</div>
				<div class="row">
					<div class="col-2"></div>
					<div class="col-4"></div>
					<div class="col-6"><button type="submit" class="btn btn-danger mt-2 " name="set">Set Delivery</button></div>

				</div>
			</div>
		    </div>
		</div>
	</div>
	<div class="col-3"></div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">

<div class="card mt-3 shadow mb-3 " >
	<div class="container">
		<div class="row  mt-3 ">
			<div class="col-3 ">Shipper Name:</div>
			<div class="col-2" style="margin-left: -30px;"><?php echo $row['ship_name']?></div>
			<div class="col-2"></div>
			<div class="col-3">Reciever name:</div>
			<div class="col-2"><?php echo $row['recv_name']?></div>
		</div>
		<div class="row  mt-1">
			<div class="col-3">Shipper Phone:</div>
			<div class="col-2"  style="margin-left: -30px;"><?php echo $row['ship_phone']?></div>
			<div class="col-2"></div>
			<div class="col-3">Reciever Phone:</div>
			<div class="col-2"><?php echo $row['recv_phone']?></div>

			

		</div>
		<div class="row  mt-1 mb-3">
			<div class="col-3">Shipper Address:</div>
			<div class="col-2" style="margin-left: -30px;"><?php echo $row['ship_address']?></div>
			<div class="col-2"></div>
			<div class="col-3">Reciever name:</div>
			<div class="col-2"><?php echo $row['recr_address']?></div>

			

		</div>
		<div class="row mt-2">
			<div class="col-4"></div>
			<div class="col-2">Consignmento No:</div>
			<div class="col-2" ><?php echo $row['consignment_no']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Ship Type:</div>
			<div class="col-2"><?php  if ($row['type_shipment']=='D')
			                          $val='Documents';
			                          elseif ($row['type_shipment']=='P') 
			                          	$val="Parcel";
			                          elseif ($row['type_shipment']=='S') 
			                          	$val='Sentiments';
			                          else 
			                          	$val='';
			                          
			                          	echo $val;
			                          	
			                          
			                          

			                          
			                          	
			                          
				
			 ?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Weight</div>
			<div class="col-2"><?php echo $row['weight']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Courier</div>
			<div class="col-2"><?php echo $row['courier']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Packages</div>
			<div class="col-2"><?php echo $row['packages']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Invoice No:</div>
			<div class="col-2"><?php echo $row['invoice_no']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Booking Mode:</div>
			<div class="col-2"><?php
	  								if($row['booking_mode']=='P') 
													$val="Paid";
													else if($row['booking_mode']=='T') 
													 $val='To Pay';
													else if($row['booking_mode']=='TB')
													  $val='To Be Paid';
													else
														$val='';
													  
													echo $val;
	  						                          ?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Total Freight:</div>
			<div class="col-2"><?php echo $row['total_freight']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Mode:</div>
			<div class="col-2"><?php if($row['mode']=='A') 
														$val=="Aeroplane";
													else if($row['mode']=='R') 
													 	$val==' Road';
													else if($row['mode']=='TR')
													  	$val=='Train';
													else if($row['mode']=='S')
													 	 $val=='Ship';
													else
														$val='';
														echo $val;
													
													  
	  											 ?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Origin</div>
			<div class="col-2"><?php echo $row['origin']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Destination</div>
			<div class="col-2"><?php echo $row['destination']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Pickup Date/Time</div>
			<div class="col-2"><?php echo $row['pickup_date']?>/<?php echo $row['pickup_time']?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Status</div>
			<div class="col-2"><?php
				 		echo $row['status'];
				 		?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Comments:</div>
			<div class="col-2"><?php echo $row['comments']?></form>
	<?php
			if (isset($_POST['set']))
			{
				
				$sql1="update parcel set  status='D', pickup_date='$_POST[pd]',pickup_time='$_POST[pt]',comments='$_POST[comments]' where consignment_no='$_GET[cons_no]'";
				if($conn->query($sql1)===TRUE)
				{
					echo "<script>window.alert('Update succesfully');window.location='delivered.php?consignment_no=$_GET[cons_no]';</script>";
				}
				else{
					echo 	$msg= "login name or company name already taken";	
				}
			}
			?>
			</div>
			<div class="col-4"></div>

		</div>
	</div>
	
</body>
</html>
<?php include 'footer.php';?>