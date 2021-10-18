<?php  include 'sheader.php';?>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
		<?php
	
    $sql="select * from services where sid='$_GET[id]' ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   
	 ?>
		<div class="card mt-3 shadow"><form method="POST">
			<div class="card-header"><strong>Update Service</strong></div>
			<div class="card-body">
				<div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Service Name<span class="text-danger">*</span></div>
				<div class="col-5"><input type="text" name="service_name" class="form-control" value="<?php echo $row['services_name']?>"></div>
				<div class="col-2"></div>

				 </div>
				 <div class="row mt-2">
				<div class="col-2"></div>
				<div class="col-3">Service Content<span class="text-danger">*</span></div>
				<div class="col-5"><textarea cols="6" rows="12" class="form-control" name="content"><?php echo $row['content']?></textarea></div>

				<div class="card-footer mt-2">
					<button type="submit" class="btn-success btn" name="update">Update User</button>
					<button type="reset" class="btn-primary btn" name="reset">Reset</button>
				</form>

			<?php
			if (isset($_POST['update']))
			{
				
				$sql="update services set services_name='$_POST[service_name]',content='$_POST[content]' where sid='$_GET[id]'";
				if($conn->query($sql)===TRUE)
				{
					echo "<script>window.alert('Update succesfully');window.location='editservice.php?id=$_GET[id]';</script>";
				}
				else{
					echo "<script>window.alert('Update failed')</script>;";	
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
