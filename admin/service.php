<?php include'sheader.php';?>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
		<div class="mt-3"><h4>Service list</h4></div>
		<div class="card shadow p-3">
			
				<table class="table">
					<tr>
						<th>Srno.</th>
						<th>Service Name </th>
						<th class="text-center">Service Content </th>
						<th>Edit</th>
					</tr>

 <?php
	$serial=1;
		$sql="select * from services order by sid desc";

				$result=$conn->query($sql);
				if ($result->num_rows>0) {
				 	while($row=$result->fetch_assoc())
				 	{$srno=$serial++;
				 		$sid=$row['sid'];
				 		echo"<tr>";
				 		echo"<td>".$srno."</td>";
				 	   
				 		echo"<td>".$row['services_name']."</td>";
				 		echo"<td>".$row['content']."</td>";
				 		echo "<td><a href='editservice.php?id=$sid'><i class=' icofont-edit'></i></a></td>";
				 		echo "</tr>";


				 	}
				 }
				 else{
				 	echo "no customer found";
				 } 


				?>
	


				</table>
			</div>
		</div>
	</div>
	<div class="col-2"></div>

</div>
<?php include'footer.php';?>
