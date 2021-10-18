<?php include 'pheader.php';
include '../connection.php';?>
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
	
    $sql="select * from parcel where pid='$_GET[id]'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    
	 ?>

	
	<div class="container">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">

	<h4 class="mt-2 fw-bold">Edit Shipment</h4>
<div class="card mt-3 shadow " >
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
											echo"Aeroplane";
													else if($row['mode']=='R') 
													 	echo' Road';
													else if($row['mode']=='TR')
													  echo'Train';
													else if($row['mode']=='S')
													 	echo'Ship';
										
													
													  
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
				 		if ($row['status']=='t') 
				 			echo " In Transit";
				 		
				 		

				 		
				 			else if ($row['status']=='D') 
				 		 echo "Delivered";
				 		else if ($row['status']=='DL') 
				 			echo " Delay";
				 		?></div>
			<div class="col-4"></div>

		</div>
		<div class="row mt-1">
			<div class="col-4"></div>
			<div class="col-2">Comments:</div>
			<div class="col-2"><?php echo $row['comments']?></div>
			<div class="col-4"></div>

		</div>
	</div>
	
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6 mt-3"><strong>UPDATE STATUS</strong></div>
		<div class="col-3"></div>

		<form method="POST">
	
	</div>
		<?php
	
    $sql="select * from parcel where pid='$_GET[id]' ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   
	 ?>


	<div class="row mt-1 ml-2">
		<div class="col-2">New Location:</div>
		<div class="col-4"><input type="text" name="dest" class="form-control" value="<?php  echo $row['destination']; ?> "></div>
		<div class="col-6"></div>


	</div>
<div class="row mt-1 ml-2">
		<div class="col-2">New Status:</div>
		<div class="col-4"><select class="form-control" name="status">
			<option value="t"  
<?php  if ($row['status']=='t') {?> selected="selected" <?php } ?> >In Transit
			</option>
<option value="D" <?php  if ($row['status']=='D') {?> selected="selected" <?php } ?>>Delivered</option>
			<option value="DL" <?php  if ($row['status']=='DL') {?> selected="selected" <?php } ?>>Delay</option>

		</select></div>
		
		<div class="col-6"><?php echo"<a href='markdelivered.php?cons_no=$row[consignment_no]'>Mark this shipment as to be delivered</a>"?></div>


	</div>
<div class="row mt-1 ml-2">
		<div class="col-2">Comments</div>
		<div class="col-4"><textarea class="form-control" name="comments" rows="5" cols="5"><?php echo $row['comments']?></textarea></div>
		<div class="col-6"></div>
		<div class="row">
		<div class="col-2"></div>
		<div class="col-6"><input class="form-control" type="hidden" name="consignment" value="<?php echo $row['consignment_no']?>"></div>
		<div class="col-4"></div>



	</div>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-3 mb-5"><button type="submit" name="up" class="btn btn-danger mt-2" value="Update">Update</button></form>

			<?php
			if (isset($_POST['up']))
			{
				
				$sql="update parcel set destination='$_POST[dest]',status='$_POST[status]',comments='$_POST[comments]' where pid='$_GET[id]'";
				if($conn->query($sql)===TRUE)
				{
					echo "<script>window.alert('Update succesfully');window.location='editshipment.php?id=$_GET[id]';</script>";
				}
				else{
					echo "<script>window.alert('Update Failed');</script>";	
				}
			}
			?></div>
		<div class="col-7"></div>


	</div><div class="col-2"></div>

	 </div>
</div></div></div></div>




</body>
</html>
<?php include 'footer.php';?>