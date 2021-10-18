<?php include '../connection.php';
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
	
	<?php
	$cid=$_GET['id'];
    $sql="select * from customer where cid='$_GET[id]'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
	 ?>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
			<div class="card mt-4"><form method="POST">
				<div class="card-header">Update Customer</div>
				<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Customer Name:<span class="text-danger">*</span></div>
					<div class="col-4"><?php echo $row['cuname']?></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Company Name:<span class="text-danger">*</span></div>
					<div class="col-4"><?php echo $row['compname'] ?></div>
					<div class="col-3"></div>
               <div><input type="hidden" name="password" class="form-control"></div>
				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Address</div>
					<div class="col-4"><input type="text" name="add" class="form-control" value="<?php echo $row['address']?>"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Email-Address:<span class="text-danger">*</span></div>
					<div class="col-4"><input type="email" name="email" class="form-control" value="<?php echo $row['shipper_mail']?>"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Country</div>
					<div class="col-4"><input type="text" name="country" class="form-control" value="<?php echo $row['country']?>"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">State</div>
					<div class="col-4"><input type="text" name="state" class="form-control" value="<?php echo $row['state']?>"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">City:<span class="text-danger">*</span></div>
					<div class="col-4"><input type="text" name="city" class="form-control" value="<?php echo $row['city']?>"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3">
					<div class="col-2"></div>
					<div class="col-3">Mobile No :<span class="text-danger">*</span></div>
					<div class="col-4"><input type="text" name="mn" class="form-control" value="<?php echo $row['mobile']?>"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="row mt-3 mb-3">
					<div class="col-2"></div>
					<div class="col-3">Landline No :</div>
					<div class="col-4"><input type="text" name="ln" class="form-control" value="<?php echo $row['landline']?>"></div>
					<div class="col-3"></div>

				
			</div>
			<div class="card-footer">
			<button type="submit" class="btn bg-success text-light" name="update" >Update</button></form>
</div>
			<?php
			if (isset($_POST['update']))
			{
				
				$sql1="update customer set password='$_POST[password]',shipper_mail='$_POST[email]',address='$_POST[add]',city='$_POST[city]',mobile='$_POST[mn]',country='$_POST[country]',state='$_POST[state]',landline='$_POST[ln]' where cid='$_GET[id]'";
				if($conn->query($sql1)===TRUE)
				{
					echo "<script>window.alert('Update succesfully');window.location='customer.php?id=$pid';</script>";
				}
				else{
					echo 	$msg= "login name or company name already taken";	
				}
			}
			?>
		</div>
		<div class="col-2"></div>
		


		</div>

	</div>

</body>
</html>
<?php  include 'footer.php';?>
