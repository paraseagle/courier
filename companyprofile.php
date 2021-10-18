<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{font-size: 12px; font-family: verdana;}
	input{
		font-size: 30px;
	}
	</style>
</head>
<body>
<div class="row">
	<div class="col-1"></div>
	<div class="col-10">
		<div class="card mt-3 shadow">
			<div class="card-header"><h5>Edit Company</h5></div>
			<?php
				$sql="select * from admin  order by aid desc";
				$result=$conn->query($sql);
				if ($result->num_rows>0) {
				 $row=$result->fetch_assoc();
				 	
			 		
				 		

				 		?>	 		
			<form method="POST"  enctype="multipart/form-data">
				<div class="ml-4 mt-2" ><strong>Company Info:</strong></div>
			<div class="row p-2 mt-2">
				<div class="col-2"></div>
				<div class="col-3">Company Name:</div>
				<div class="col-5"><input type="text" value="<?php echo $row['coname']?>" name="coname" class="form-control"></div>
				<div class="col-2"></div>


			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Phone Number:</div>
				<div class="col-5"><input type="text" name="phone" class="form-control " value="<?php echo $row['ph']?>"></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Email:</div>
				<div class="col-5"><input type="email" name="em" class="form-control" value="<?php echo $row['mail']?>"></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Address:</div>
				<div class="col-5"><textarea class="form-control" cols="3" rows="3" name="txt"><?php echo $row['addr']?></textarea> </div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">About us Content:</div>
				<div class="col-5"><textarea class="form-control" cols="5" rows="5" name="content"><?php echo $row['about']?></textarea></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">App Logo:</div>
				<div class="col-5"><input type="file" name="browse" class="form-control"  accept=".jpg, .jpeg, .png"></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">App Logo Image:</div>
				<div class="col-5"><img src="<?php echo $row['app_logo']?>"></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Site Logo:</div>
				<div class="col-5"><input type="file" name="sl" accept=".jpg, .jpeg, .png" class="form-control"></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Site Logo Image:</div>
				<div class="col-5"><input type="file" name="sli" accept=".jpg, .jpeg, .png" class="form-control"></div>
				<div class="col-2"></div>

			</div>
			<div class="ml-4"><strong>Social Setting:</strong></div>
              <div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Facebook Page Name:</div>
				<div class="col-5"><input type="text" name="fpn" class="form-control" value="<?php echo $row['fb']?>"></div>
				<div class="col-2"></div>

			</div>	
			  <div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Twitter Page Name:</div>
				<div class="col-5"><input type="text" name="tpn" class="form-control" value="<?php echo $row['twitter']?>"></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Gpluse Page Name:</div>
				<div class="col-5"><input type="text" name="gpn" class="form-control" value="<?php echo $row['gpluse']?>"></div>
				<div class="col-2"></div>

			</div>
			<div class="ml-4"><strong>SEO Setting:</strong></div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Title:</div>
				<div class="col-5"><input type="text" name="title" class="form-control" value="<?php echo $row['title']?>"></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Keyword:</div>
				<div class="col-5"><input type="text" name="key" class="form-control" value="<?php echo $row['keyword']?>"></div>
				<div class="col-2"></div>

			</div>
			<div class="row mt-2 mb-5">
				<div class="col-2"></div>
				<div class="col-3">Description:</div>
				<div class="col-5"><input  type="text" name="desp" class="form-control" value="<?php echo $row['desp']?>"></div>
				<div class="col-2"></div>
				
			</div>
			<div class="card-footer"><button name="update" type="submit" class="btn btn-success" >Update</button></div>

			</form>
		 <?php
    if(isset($_POST['update'])){

				$dir='applogo/';
				$temp=$_FILES['browse']['tmp_name'];
				$filename=$dir.$_FILES['browse']['name'];
				$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
				if ($ext=='jpg'or $ext='jpeg'or $ext=='png') {
				
				
				if(move_uploaded_file($temp,$filename)){
					$sql="update admin set coname='$_POST[coname]',ph='$_POST[phone]',mail='$_POST[em]',addr='$_POST[txt]',about='$_POST[content]',fb='$_POST[fpn]',twitter='$_POST[tpn]',gpluse='$_POST[gpn]',title='$_POST[title]',keyword='$_POST[key]',desp='$_POST[desp]',app_logo='$filename' where aid='$_SESSION[aid]'";
 
				if ($conn->query($sql)) {
					echo "<script>window.location='companyprofile.php';</script>";
				
				}
				else{
					echo "Error:".$sql."<br>".$conn->error;
				}
			}
}
}
?>

			
				 		

		</div>
	</div>
	<div class="col-1"></div>
	
<?php }?>
</div>


</body>
</html>
<?php include 'footer.php';?>