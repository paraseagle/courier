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
	<div class="row ">
		<div class="col-2"></div>
		<div class="col-8">

			<?php



    $sql="select * from parcel where consignment_no='$_GET[con_no]' ";
  
    
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

	 ?>

	 <h4></h4>
			<div class="card bg-light text-dark"><form method="POST">
				
				<div class="ml-4 mt-3"><h5>Shipper Info:</h5></div>
				<div class="row mt-1">
					<div class="col-1"></div>
					<div class="col-3">Shipper Name:</div>
					<div class="col-7"><input type="text" name="sn" class="form-control" required="" value="<?php echo($row['ship_name'])?>" ></div>
					<div class="col-1"></div>

				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Phone:</div>
					<div class="col-7"><input type="phone" name="phone" class="form-control"  value="<?php echo($row['ship_phone'])?>" required=""></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Address:</div>
					<div class="col-7"><textarea class="form-control" cols="3" rows="3" name="addr" required=""><?php echo($row['ship_address'])?></textarea></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Email:</div>
					<div class="col-7"><textarea class="form-control" cols="3" rows="3" name="mail" required=""><?php echo($row['shiper_email'])?></textarea></div>
					<div class="col-1"></div>


				</div>
				
				<div class="ml-4 mt-3"><h5>Receiver Info:</h5></div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3">Receiver Name:</div>
					<div class="col-7"><input type="text" name="rn" class="form-control" required=""  value="<?php echo($row['recv_name'])?>"></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Phone:</div>
					<div class="col-7"><input type="text" name="rph" class="form-control"  value="<?php echo($row['recv_phone'])?>" required=""></div>
					<div class="col-1"></div>


				</div>
				<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Address:</div>
					<div class="col-7"><textarea class="form-control" cols="3" rows="3" name="address" required=""><?php echo($row['recr_address'])?></textarea></div>
					<div class="col-1"></div>


			</div>
			<div class="ml-4 mt-3"><h5>Shipment Info:</h5></div>
				
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
					<div class="col-7"><input type="text" name="weight"  value="<?php echo($row['weight'])?>" class="form-control">(kg)</div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Courier:</div>
					<div class="col-7"><input type="text" name="courier"   value="<?php echo($row['courier'])?>" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Packages:</div>
					<div class="col-7"><input type="text" name="pack" class="form-control"  value="<?php echo($row['packages'])?>"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Invoice No:</div>
					<div class="col-7"><input type="text" name="inv" class="form-control" required=""  value="<?php echo($row['invoice_no'])?>"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Product:</div>
					<div class="col-7"><input type="text" name="product"  value="<?php echo($row['product'])?>" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Quantity:</div>
					<div class="col-7"><input type="text" name="qnt" class="form-control"  value="<?php echo($row['quantity'])?>"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Booking Mode:</div>
					<div class="col-7"><select class="form-control" name="bookmode"> 
						<option value="P"<?php if ($row['booking_mode']=='P') { ?> selected="selected" <?php }?>>Paid</option>
						<option value="TB"<?php if ($row['booking_mode']=='TB') { ?> selected="selected" <?php }?>>TBB</option>
						<option value="T"<?php if ($row['booking_mode']=='T') { ?> selected="selected" <?php }?>>ToPay</option></select></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Total Freight:</div>
					<div class="col-7"><input type="text"  value="<?php echo($row['total_freight'])?>" name="tf" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Mode:</div>
					<div class="col-7"><select class="form-control" name="mode"> <option value="A"<?php if ($row['mode']=='A') { ?> selected="selected" <?php }?>>Air</option>
						<option value="S" <?php if ($row['mode']=='S') { ?> selected="selected" <?php }?>>Sea</option>
						<option value="R"<?php if ($row['mode']=='R') { ?> selected="selected" <?php }?>>Road</option>
						<option value="TR"<?php if ($row['mode']=='TR') { ?> selected="selected" <?php }?>>Train</option></select></div>

					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Carrier:</div>
					<div class="col-7"><input type="text" name="carrier" class="form-control"  value="<?php echo($row['carrier'])?>"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Carrier No :</div>
					<div class="col-7"><input type="number" name="cno" class="form-control"   value="<?php echo($row['carrier_no'])?>" required=""></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Dept Time:</div>
					<div class="col-7"><input type="text" name="dept"  value="<?php echo($row['dept_time'])?>" class="form-control" required=""></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Origin:</div>
					<div class="col-7"><input type="text" name="origin" class="form-control" required=""  value="<?php echo($row['origin'])?>"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Destination:</div>
					<div class="col-7"><input type="text" name="dest"   value="<?php echo($row['destination'])?>"class="form-control" required=""></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Pickup Date:</div>
					<div class="col-7"><input type="Date" name="pd" class="form-control" placeholder="mm/dd/yyyy"  value="<?php echo($row['pickup_date'])?>"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Pickup Time:</div>
					<div class="col-7"><input type="text" name="pt"  value="<?php echo($row['pickup_time'])?>" class="form-control"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Status:</div>
					<div class="col-7"><input type="radio" name="status" class="" value="t"   <?php if($row['status']=='t'){ ?> checked="checked" <?php } ?>>In Transit<input type="radio" name="status" class="ml-2" value="D"   <?php if($row['status']=='D'){ ?> checked="checked" <?php } ?>>Delivered<input type="radio" class="ml-2" name="status" value="DL"   <?php if($row['status']=='DL'){ ?> checked="checked" <?php } ?>>Delay</div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Expected Dly Date:</div>
					<div class="col-7"><input type="date"  class="form-control" placeholder="mm/dd/yyyy" required="" name="edd"  value="<?php echo($row['expected_dly'])?>"></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3 mb-3">
					<div class="col-1"></div>
					<div class="col-3 text-center">Comments:</div>
					<div class="col-7"><textarea class="form-control" cols="2" rows="2" name="comments"><?php echo($row['comments'])?></textarea></div>
					<div class="col-1"></div>
		</div>
		<div class="row mt-3 mb-3">
					<div class="col-1"></div>
					<div class="col-3 "></div>
					<div class="col-7"><button type="submit" class="btn btn-danger" name="sub">Update</button>
                    </form>

                    	<?php
			if (isset($_POST['sub']))
			{
				
				$sql="update parcel set ship_name='$_POST[sn]',ship_phone='$_POST[phone]',ship_address='$_POST[addr]',shiper_email='$_POST[mail]',recv_name='$_POST[rn]',recv_phone='$_POST[rph]',recr_address='$_POST[address]',type_shipment='$_POST[shiptype]',weight='$_POST[weight]',courier='$_POST[courier]',packages='$_POST[pack]',invoice_no='$_POST[inv]',product='$_POST[product]',quantity='$_POST[qnt]',booking_mode='$_POST[bookmode]',total_freight='$_POST[tf]',mode='$_POST[mode]',carrier='$_POST[carrier]',carrier_no='$_POST[cno]',dept_time='$_POST[dept]',origin='$_POST[origin]',destination='$_POST[dest]',pickup_date='$_POST[pd]',pickup_time='$_POST[pt]',status='$_POST[status]',comments='$_POST[comments]'where consignment_no='$_GET[con_no]'";
				if($conn->query($sql)===TRUE)
				{
					echo "<script>window.alert('Update succesfully');window.location='modifyconsign.php?con_no=$_GET[con_no]';</script>";
				}
				else{
					 echo 	 "<script>window.alert('Update failed');</script>";	
					// echo "Error:".$sql."<br>".$conn->error;
				
				}
			}
			?>
					</div>
					<div class="col-1"></div>
		</div>
		
		
		<div class="col-2"></div>

	</div>
		
	

	
					<div class="col-7"></div>
					<div class="col-1"></div>
		</div>
	</div></div>
		
</body>
</html>
<?php include 'footer.php';?>