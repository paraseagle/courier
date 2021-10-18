<?php 
include 'header.php';


?>
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
	
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
			<div class="card mt-4"><form method="POST">
				
				<div class="card-header"><strong>Add Customer</strong></div>
			
									
				<div class="row mt-3">

					<div class="col-2"></div>
					<div class="col-3">Customer Name:<span class="text-danger">*</span></div>
					<div class="col-4"><input type="text" name="cn" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Company Name:<span class="text-danger">*</span></div>
					<div class="col-4"><input type="text" name="comp" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Address</div>
					<div class="col-4"><input type="text" name="add" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Email-Address:<span class="text-danger">*</span></div>
					<div class="col-4"><input type="email" name="email" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Country</div>
					<div class="col-4"><input type="text" name="country" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">State</div>
					<div class="col-4"><input type="text" name="state" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">City:<span class="text-danger">*</span></div>
					<div class="col-4"><input type="text" name="city" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Mobile No :<span class="text-danger">*</span></div>
					<div class="col-4"><input type="text" name="mn" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3 mb-3">
					<div class="col-2"></div>
					<div class="col-3">Landline No :</div>
					<div class="col-4"><input type="text" name="ln" class="form-control"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="card-footer ">
			<button type="submit" class="btn bg-success text-light" name="sub">Submit</button></form>
</div>
			<?php
			if(isset($_POST['sub'])){

				
         $sql="INSERT INTO customer (cuname, compname, address, city, mobile,landline,shipper_mail,country,state)VALUES('$_POST[cn]','$_POST[comp]','$_POST[add]','$_POST[city]','$_POST[mn]','$_POST[ln]','$_POST[email]','$_POST[country]','$_POST[state]');";
				if ($conn->query($sql)===TRUE) {
				 echo "<script>window.alert('Customer Added  Successfully');</script>";
				
				}
					else "<script>window.alert('login name or company name already taken');</script>";
				}

          else
          {
          	echo "<script>window.location='#';</script>";

          }


			?>
		</div>
		<div class="col-2"></div>
		


		</div>

	</div>

</body>
</html>
<?php  include 'footer.php';?>