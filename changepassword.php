	<?php   include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{font-size: 12px;font-family: verdana;}
	</style>
	
</head>
<body>
	<div class="container ">
		<h3 class="text-center mt-4 mb-3">Change Admin Password</h3>
		
		<div class="row ">
			<div class="col-2"></div>
			<div class="col-8">
           <?php
				$sql="select * from admin where aid='$_SESSION[aid]'";
				$result=$conn->query($sql);
				$row=$result->fetch_assoc();
				$pw=$row['password'];

				?>
				<form method="POST">
			<div class="card shadow">
					<div class="text-center mt-3">Change Admin Password</div>
						
					<div class="row mt-2">
						<div class="col-2"></div>
						<div class="col-3">Current Password:</div>
						<div class="col-5"><input type="password" name="cp" class="form-control"></div>
						<div class="col-2"></div>


					</div>
					<div class="row mt-2">
						<div class="col-2"></div>
						<div class="col-3">New Password:</div>
						<div class="col-5"><input type="password" name="np" class="form-control"></div>
						<div class="col-2"></div>


					</div>
					<div class="row mt-2">
						<div class="col-2"></div>
						<div class="col-3">Confirm Password:</div>
						<div class="col-5"><input type="password" name="rp" class="form-control"></div>
						<div class="col-2"></div>


					</div>
					<div class="row mt-2 mb-4">
						<div class="col-2"></div>
						<div class="col-3"></div>
						<div class="col-5"><button type="submit" class="btn btn-danger" name="change">Submit</button>
						</div>
					</form>
					<?php
					if (isset($_POST['change'])) 
					{
					$encpass=($_POST['cp']);
					if ($pw==$encpass) 
					{
					if ($_POST['np']==$_POST['rp'])
					{
					$encpass=($_POST['np']);
					$sql="update admin set password='$encpass' where aid='$_SESSION[aid]' ";
					if ($conn->query($sql)===TRUE)
					echo "<script>window.alert('Password Changed Successfully');
					window.location='../admin.php';
					</script>";
					else 
					echo "error:".$sql."<br>".$conn->error;
					}
					else{
						echo "<script>window.alert('Retype Password Not Match');
						</script>";
					}
				}	
                 else{
                 	echo "<script>window.alert('Existing Password Not Match');
						</script>";
                 
					 
									
								}			
							}		
							
					

					 ?>
						<div class="col-2"></div>


					</div>
				</div>
			</div>
			<div class="col-2"></div>

				
</div></div>
			
	
						

</body>
</html>
<?php include 'footer.php';?>
