<!DOCTYPE html>
<?php  include '../connection.php' ;

 ?>
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
	<div class="row bg-info">
		<div class="col-2"></div>
		<div class="col-8 text-dark "><h3  style="text-shadow: 2px 2px 2px white;">Courier Admin</h3>
        
		</div>
		<div class="col-2"></div>

	</div>

<div class="row bg-info "  >
		<div class="col-2"></div>
		<div class="col-8 bg-dark p-2 " style="border-radius:5px; "><a href="../admin/home.php"class="text-decoration-none text-light p-2">Home</a>
			<a href="../admin/pending.php" class="text-decoration-none text-light p-2">Parcel</a>
			<a href="customer.php" class="text-decoration-none text-light p-2">Customers</a>
			<a href="../admin/searchcons.php"class="text-decoration-none text-light p-2">Search Consignment</a>
			<a href="../admin/searchcons.php"class="text-decoration-none text-light p-2">Company Profile</a>
			<a href="#"class="text-decoration-none text-light p-2">CMS</a>
			<a href="logout.php"class="text-decoration-none text-light p-2">Logout</a>
        
		</div>
		<div class="col-2"></div>

	</div>
	<div class="row p-3" style="background-color: #002b80;">
		<div class="col-2"></div>
		<div class="col-4"><a href="adduser.php" class="p-3 text-light text-decoration-none">Add Customer</a><a href="customer.php" class=" p-3 text-light text-decoration-none">Customers</a></div>
		<div class="col-4"></div>

	</div>
	
	</div>
	
</body>
</html>
