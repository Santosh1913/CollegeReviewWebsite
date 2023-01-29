<?php 
	include "connect.php";
	include "commnav.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		th,td
 		{
 			padding: 20px;
 		}
 		td
 		{
 			text-align: center;
 		}
 	</style>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 100px;">Inspection Member details</h1>
 		<table border="1px;" width="90%">
 			<tr>
 				<th>S.No</th>
 				<th>Inspection Code</th>
 				<th>Member 1</th>
 				<th>Member 2</th>
 				<th>Member 3</th>
 				<th>Member 4</th>
 				<th>Inspection Date</th> 
 				<th>College 1</th>
 				<th>College 2</th>
 				<th>College 3</th>				
 						
 			</tr>
 			<?php 
 				$i=1;
 				$q1="SELECT * from  inspection";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						<td><?php echo $i; ?></td>
 						<td><?php echo $row['id']; ?></td>
 						<td><?php echo $row['m1']; ?></td>
 						<td><?php echo $row['m2']; ?></td>
 						<td><?php echo $row['m3']; ?></td>
 						<td><?php echo $row['m4']; ?></td>
 						<td><?php echo $row['inspdate']; ?></td>
 						<td><?php echo $row['coll1']; ?></td>
 						<td><?php echo $row['coll2']; ?></td>
 						<td><?php echo $row['coll3']; ?></td>
 						 						
 						
 						
 						<?php $i++; ?>
 					</tr>

 				<?php }



 			 ?>
 		</table>
 		<br><br><br>
 	</center>
 
 
 </body>
 </html>