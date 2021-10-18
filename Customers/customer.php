<?php 
include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/bootstrap.css" rel="stylesheet"/>
<link href="../icofont/icofont.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

	<style type="text/css">
		body{font-size: 12px;font-family: verdana;}
	</style>

</head>
<body>
	
	</div><div class="container">
	<h4 class="mt-4">Company List</h4>
	<div class="card mt-3">
		
<table id="myTable" class="table">
	<tr>
		<th>Sr.No</th>
		<th>Login name</th>
		<th>Company Name</th>
		<th>Address</th>
		<th>City</th>
		<th>Mobile</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
	
	
 <?php
	$serial=1;
		$sql="select * from customer order by cid desc";

				$result=$conn->query($sql);
				if ($result->num_rows>0) {
				 	while($row=$result->fetch_assoc())
				 	{$srno=$serial++;
				 		$pid=$row['cid'];
				 		echo"<tr>";
				 		echo"<td>".$srno."</td>";
				 	   
				 		echo"<td>".$row['cuname']."</td>";
				 		echo"<td>".$row['compname']."</td>";
				 		echo"<td>".$row['address']."</td>";
				 		echo"<td>".$row['city']."</td>";
				 		echo"<td>".$row['mobile']."</td>";
				 		echo "<td><a href='customer.php?delid=$pid'><i class='icofont icofont-bin'></i></a></td>";
				 		echo "<td><a href='update.php?id=$pid'><i class=' icofont-edit'></i></a></td>";
				 		echo "</tr>";


				 	}
				 }
				 else{
				 	echo "no customer found";
				 } 


				?>
	
</table>
 
<?php
			if (isset($_GET['delid'])) {
			 	$sql="DELETE from customer where cid='$_GET[delid]'";
			 	if ($conn->query($sql)===TRUE) {
			 		echo "<script>window.alert('record deleted successfully');
			 		window.location='customer.php';</script>";
			 	}
			 	else{
			 		echo "error.".$sql."<br>".$conn->error;
			 	}
			 } 
			?>
</div></div>
</body>
</html>
<?php  include 'footer.php';?>