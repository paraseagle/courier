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
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8 mt-5" style=" box-shadow: 2px 2px 2px grey;">
			<div class="card " ><form method="POST" action="modyconsign.php">
				<div class="card-header"><strong>Track and Trace your Cargo/Courier</strong></div>
			</div>
			<div class="card-body">
				<div class="text-center"><strong>Key in the Shipment Number to MODIFY the data. This is helpful if you have made spelling errors while adding the shipment.</strong></div>
				<div class="text-center mt-3"><strong><u>Enter The Consignment No</u></strong></div>
				<div class="row">
					<div class="col-3"><input type="text" name="track" id="track" class="form-control">Ex:53455335</div>
					<div class="col-9"></div>
					
					

				</div>
				<div class="card-footer"><button class="btn btn-success" name="tracknow" type="submit" value="Track Now">Track Now</button><button class="btn" name="reset" type="reset">Reset</button></form>		




				</div>
			</div>
		</div>
		<div class="col-2"></div>
		


	</div>

</body>
</html>
<?php include 'footer.php';?>