<?php  include 'sheader.php';?>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
		<?php
	
    $sql="select * from testimonial where tid='$_GET[id]' ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   
	 ?>
		<div class="card mt-3 shadow"><form method="POST">
			<div class="card-header"><strong>Edit Testimonial</strong></div>
			<div class="card-body">
				<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">User Name<span class="text-danger">*</span></div>
				<div class="col-5"><input type="text" name="name" class="form-control" value="<?php echo $row['name']?>"></div>
				<div class="col-2"></div>

				 </div>
				 <div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Email<span class="text-danger">*</span></div>
				<div class="col-5"><input type="email" name="email" class="form-control" value="<?php echo $row['email']?>"></div>
				<div class="col-2"></div>

				 </div>
				
				 <div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Message<span class="text-danger">*</span></div>
				<div class="col-5"><textarea cols="6" rows="12" class="form-control" name="msg"><?php echo $row['message']?></textarea></div>

				<div class="card-footer mt-2">
					<button type="submit" class="btn-success btn" name="update">Update User</button>
					<button type="reset" class="btn-primary btn" name="reset">Reset</button>
				</form>

			<?php
			if (isset($_POST['update']))
			{
				
				$sql="update testimonial set name='$_POST[name]',email='$_POST[email]',message='$_POST[msg]' where tid='$_GET[id]'";
				if($conn->query($sql)===TRUE)
				{
					echo "<script>window.alert('Update succesfully');window.location='edittestimonial.php?id=$_GET[id]';</script>";
				}
				else{
					echo 	$msg= "Update failed";	
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
<?php include'footer.php';?>
