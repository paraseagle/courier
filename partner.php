<?php include'sheader.php';?>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8"><form method="POST" enctype="multipart/form-data">
		<div class="mt-3"><h4>Partner list</h4></div>
		<div class="card shadow p-3">
			
				<table class="table"> 
					<tr>
						<th>Srno.</th>
						<th>Partner </th>
						<th>Url </th>
						<th>Logo</th>
						<th>Edit</th>
					</tr>

 <?php
	$serial=1;
		$sql="select * from partner_logo order by lid desc";

				$result=$conn->query($sql);
				if ($result->num_rows>0) {
				 	while($row=$result->fetch_assoc())
				 	{$srno=$serial++;
				 		$lid=$row['lid'];
				 		echo"<tr>";
				 		echo"<td>".$srno."</td>";
				 	   
				 		echo"<td>".$row['title']."</td>";
				 		echo"<td>".$row['url']."</td>";
				 		echo "<td><img src='".$row['logo']."'
				 		width='70px' height='50px'></td>";

				 		echo "<td><a href='editpartner.php?id=$lid'><i class=' icofont-edit'></i></a></td>";
				 		echo "</tr>";


				 	}
				 }
				 else{
				 	echo "no list found";
				 } 


				?>
			</table></div></form></div></div>
	
<?php include'footer.php';?>
