<?php include 'pheader.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/bootstrap.css" rel="stylesheet"/>
<link href="../icofont/icofont.css" rel="stylesheet"/>
<style type="text/css">
	body{font-size: 12px; font-family: verdana;}

</style>
</head>
<body>
	<section>
	<div class="row ">
		<div class="col-2"></div>
		<div class="col-8 mt-3 mb-5">
			<div class="card bg-light text-dark shadow"><form method="POST" onSubmit="MM_validateForm('Shippername','','R','Shipperaddress','','R','Receivername','','R','Receiveraddress','','R','ConsignmentNo','','R','Origin','','R','Destination','','R','Departure','','R','ExpectedDate','','R');return document.MM_returnValue" >
				<div class="card-header"><strong>Add Parcel</strong></div>
				<div class="ml-4 mt-3"><h5>Shipper Info:</h5></div>
				<div class="row mt-1">
					<div class="col-1"></div>
					<div class="col-3">Shipper Company:</div>
					
					<div class="col-7"><input type="text" name="sn" class="form-control" required="">
                     </div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
			<div class="col-1"></div>
		

					
					<div class="col-3 text-center">Phone:</div>
					<div class="col-7"><input type="phone" name="phone" class="form-control"  required=""></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Address:</div>
					<div class="col-7"><textarea class="form-control" cols="3" rows="3" name="addr" required=""></textarea></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Origin:</div>
					<div class="col-7"><input type="text" name="origin" class="form-control" required=""></div>
					<div class="col-1"></div> 	
						 
						

				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Email:</div>
					<div class="col-7"><input type="email" name="em" class="form-control" required=""></div>
					<div class="col-1"></div>


				</div>
				<div class="ml-4 mt-3"><h5>Receiver Info:</h5></div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3">Receiver Name:</div>
					<div class="col-7"><input type="text" name="rn" class="form-control" required=""></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Phone:</div>
					<div class="col-7"><input type="text" name="rph" class="form-control" required=""></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Address:</div>
					<div class="col-7"><textarea class="form-control" cols="3" rows="3" name="address" required=""></textarea></div>
					<div class="col-1"></div>


			</div>
			<div class="ml-4 mt-3"><h5>Shipment Info:</h5></div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3">Consignment No:</div>
					<div class="col-7"><input type="number" name="consignment" class="form-control" required=""></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Type Of Shipment:</div>
					<div class="col-7"><select class="form-control" name="shiptype">
						<option value="D">Documents</option>
						<option value="P">Parcel</option>
						<option value="S">Sentiments</option>

					</select></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Weight:</div>
					<div class="col-7"><input type="text" name="weight" class="form-control">(kg)</div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Courier:</div>
					<div class="col-7"><input type="text" name="courier" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Packages:</div>
					<div class="col-7"><input type="text" name="pack" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Invoice No:</div>
					<div class="col-7"><input type="text" name="inv" class="form-control" required=""></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Product:</div>
					<div class="col-7"><input type="text" name="product" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Quantity:</div>
					<div class="col-7"><input type="text" name="qnt" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Booking Mode:</div>
					<div class="col-7"><select class="form-control" name="bookmode"> 
						<option value="P">Paid</option>
						<option value="TB">TBB</option>
						<option value="T">ToPay</option></select></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Total Freight:</div>
					<div class="col-7"><input type="text" name="tf" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Mode:</div>
					<div class="col-7"><select class="form-control" name="mode"> <option value="A">Air</option>
						<option value="S">Sea</option>
						<option value="R">Road</option>
						<option value="TR">Train</option></select></div>

					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Carrier:</div>
					<div class="col-7"><input type="text" name="carrier" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Carrier No :</div>
					<div class="col-7"><input type="number" name="cno" class="form-control" required=""></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Dept Time:</div>
					<div class="col-7"><input type="Time" name="dept" class="form-control" required=""></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Destination:</div>
					<div class="col-7"><input type="text" name="dest" class="form-control" required=""></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Pickup Date:</div>
					<div class="col-7"><input type="Date" name="pd" class="form-control" placeholder="mm/dd/yyyy"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Pickup Time:</div>
					<div class="col-7"><input type="Time" name="pt" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Status:</div>
					<div class="col-7"><select class="form-control" name="status"><option value="t">In Transist</option></select></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Expected Dly Date:</div>
					<div class="col-7"><input type="date"  class="form-control" placeholder="mm/dd/yyyy" required="" name="edd"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3 mb-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Comments:</div>
					<div class="col-7"><textarea class="form-control" cols="2" rows="2" name="comments"></textarea></div>
					<div class="col-1"></div>
		</div>
		
		
		<div class="col-2"></div>

	</div>
	<div class="card-footer  mb-5"><button type="submit" class="btn bg-success text-light" name="add">Submit</button></form>


			<?php
			if(isset($_POST['add'])){
             
    $sql1="select * from parcel where consignment_no='$_POST[consignment]'";

$result=$conn->query($sql1);
				if ($result->num_rows>0) {
				 echo "<script>window.alert(' Consignment number already exists Try another one');</script>";
				
				}
					else	$msg= "";
				{

       
			$sql =  "INSERT INTO parcel  (ship_name, ship_phone, ship_address,shiper_email, recv_name,recv_phone, recr_address,consignment_no, type_shipment, weight, courier, packages, invoice_no, product, quantity,booking_mode,total_freight, mode, carrier,carrier_no,dept_time, origin, destination,pickup_date, pickup_time, status, expected_dly,comments) 
 VALUES('$_POST[sn]','$_POST[phone]','$_POST[addr]','$_POST[em]','$_POST[rn]','$_POST[rph]','$_POST[address]','$_POST[consignment]','$_POST[shiptype]','$_POST[weight]','$_POST[courier]','$_POST[pack]','$_POST[inv]','$_POST[product]','$_POST[qnt]','$_POST[bookmode]','$_POST[tf]','$_POST[mode]','$_POST[carrier]', '$_POST[cno]','$_POST[dept]','$_POST[origin]','$_POST[dest]','$_POST[pd]','$_POST[pt]','t' ,'$_POST[edd]','$_POST[comments]');"; 
				if ($conn->query($sql)===TRUE) {
				 echo "<script>window.alert('Parcel added successfull');</script>";
				
				}
					else "<script>window.alert('Parcel Not added');</script>";
				}

}       

			?>

	</div>
</div>
</section>

<?php


?>

	
</body>
</html>
<?php include 'footer.php';?>