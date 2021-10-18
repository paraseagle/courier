<?php  include 'sheader.php';?>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
		<?php
	
    $sql="select * from partner_logo where lid='$_GET[id]' ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   
	 ?>
		<div class="card mt-3 shadow"><form method="POST" enctype="multipart/form-data">
			<div class="card-header"><strong>Update Partner</strong></div>
			<div class="card-body">
				<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Title<span class="text-danger">*</span></div>
				<div class="col-5"><input type="text" name="title" class="form-control" value="<?php echo $row['title']?>"></div>
				<div class="col-2"></div>

				 </div>
				 <div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Url<span class="text-danger">*</span></div>
				<div class="col-5"><input type="text" name="url" class="form-control" value="<?php echo$row['url']?>"></div></div>
				<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Logo<span class="text-danger">*</span></div>
				<div class="col-5"><input type="file" name="browse" class="form-control" accept=".jpg, .jpeg, .png"><br><img src="<?php echo $row['logo'];?>" height="30px" ></div>
				<div class="col-2"></div>

				 </div>
				

				<div class="card-footer mt-2">
					<button type="submit" class="btn-success btn" name="update">Update User</button>
					<button type="reset" class="btn-primary btn" name="reset">Reset</button>
				</form>
				 <?php
    if(isset($_POST['update'])){

				$dir='partner_logo/';
				$temp=$_FILES['browse']['tmp_name'];
				$filename=$dir.$_FILES['browse']['name'];
				$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
				if ($ext=='jpg'or $ext='jpeg'or $ext=='png') {
				
				
				if(move_uploaded_file($temp,$filename)){
					$sql="update partner_logo set title='$_POST[title]',url='$_POST[url]',logo='$filename' where lid='$_GET[id]'";
				if ($conn->query($sql)) {
					echo "<script>window.location='partner.php';</script>";
				
				}
				else{
					echo "Error:".$sql."<br>".$conn->error;
				}
			}
}
}
?>
			
				

				</div>
				<div class="col-2"></div>

				 </div>
			</div>
		</div>
	</div>
	<div class="col-2"></div>

</div>
</form></div></div>
<?php include'footer.php';?>