<?php include 'sheader.php';?>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8"><form method="POST" enctype="multipart/form-data">
		<div class="mt-3"><h4>Testimonial  list</h4></div>
		<div class="card shadow p-3">
			
				<table class="table"> 
					<tr>
						<th>Srno.</th>
						<th>Name </th>
						<th>Email</th>
						<th>Entry Date</th>
						<th>Edit</th>
					</tr>

					<?php
	$serial=1;
		$sql="select * from testimonial order by tid desc";

				$result=$conn->query($sql);
				if ($result->num_rows>0) {
				 	while($row=$result->fetch_assoc())
				 	{$srno=$serial++;
				 		$tid=$row['tid'];
				 		echo"<tr>";
				 		echo"<td>".$srno."</td>";
				 	   
				 		echo"<td>".$row['name']."</td>";
				 		echo"<td>".$row['email']."</td>";
				 		echo"<td>".$row['date']."</td>";

				 		

				 		echo "<td><a href='edittestimonial.php?id=$tid'><i class=' icofont-edit'></i></a></td>";
				 		echo "</tr>";


				 	}
				 }
				 else{
				 	echo "no list found";
				 } 


				?>
			</table></div></form></div></div>
	
<?php include'footer.php';?>
