<?php include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="icofont/icofont.css" rel="stylesheet"/>
</head>
<body>
      <div class="row">
      	<div class="col-4"></div>
      	<div class="col-4 mt-5 mb-5 p-5 box">
      		<div class="card shadow">

      			<div class="card-header "  ><strong>Courier Admin Login</strong></div>
      			<div class="container">
      			<div class="card-title  text-dark p-2 mt-2" style="border-radius: 10px; background-color:  #C9F6F6; font-size: 14px;">Type anything to log in </div>
      			<form method="POST">
      			
      			<input type="text" name="un" placeholder="Username" class="form-control mb-3 " required="required">
      		<input type="password" name="pw" placeholder="Password" class="form-control" required="required">
      		<button type="submit" class=" btn mt-4 mb-4 text-light" name="login" style="background-color: #A9A9A9">Login</button>

      		</form>
      		<?php
			if(isset($_POST['login']))
			{
			$sql="select * from admin where uname='$_POST[un]' and password='$_POST[pw]';";
			$result=$conn->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				$_SESSION['aid']=$row['aid'];
				$_SESSION['un']=$row['uname'];
				echo"<script>window.location='admin/home.php';</script>";
			}
			else{
			echo"<script> window.alert('invalid username or password');</script>";
		}
		}
			?>
      		</div></div>

      		


 
      </div>
      	<div class="col-4"></div>

      </div>

</body>
</html>