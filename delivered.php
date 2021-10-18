
<?php include 'pheader.php';?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body{font-size: 12px; font-family: verdana;}
	</style>
</head>
<body>

	
	<div class="container">
		<h4 class="mt-3">Delivered Parcel</h4>
<div class="card mb-5">
		<div class="card shadow">
			<table class="table">
				<tr>
					<th>Sr.No</th>
					<th>Sender</th>
					<th>Consignment No </th>
					<th>Destination</th>
					<th>Origin</th>
					<th>Pickup date/time</th>
					

					<th>Status</th>
					
					<th>Delete</th>
					<th>Update</th>

				</tr>
				<?php



$serial=1;				
	
		$sql="select * from parcel where status='D'  order by pid desc";

				$result=$conn->query($sql);
				if ($result->num_rows>0) {
				 	while($row=$result->fetch_assoc())
				 	{$srno=$serial++;
				 		$pid=$row['pid'];
				 		echo"<tr>";
				 		echo"<td>".$srno."</td>";
				 	   
				 		echo"<td>".$row['ship_name']."</td>";
				 		echo"<td>".$row['consignment_no']."</td>";
				 		echo"<td>".$row['destination']."</td>";
				 		echo"<td>".$row['origin']."</td>";
				 		echo"<td>".$row['pickup_date']."-".  $row['pickup_time']."</td>";
				 		
                          if ($row['status']=='D') {
				 			echo "<td> Delivered
				 		</td>";
				 		# code...
				 		}
				 		else
				 			if ($row['status']=='t') {
				 		 echo "<td>In Transit";
				 		};



				 		echo "<td><a href='delivered.php?delid=$pid'><i class='icofont icofont-bin'></i></a></td>";
				 		echo "<td><a href='editshipment.php?id=$pid'><i class=' icofont-edit'></i></a></td>";
				 		echo "</tr>";


				 	}
				 }
				 else{
				 	echo "no customer found";
				 } 


				?>


	

</tbody>

</table>


<?php
			if (isset($_GET['delid'])) {
			 	$sql="DELETE from parcel where pid='$_GET[delid]'";
			 	if ($conn->query($sql)===TRUE) {
			 		echo "<script>window.alert('record deleted successfully');
			 		window.location='delivered.php';</script>";
			 	}
			 	else{
			 		echo "error.".$sql."<br>".$conn->error;
			 	}
			 } 
			?>
		</div>
	</div>
</div>

</body>
</html>
<?php include 'footer.php';?>