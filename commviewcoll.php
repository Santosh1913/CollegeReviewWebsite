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
 		<h1 style="margin-top: 100px;">College details</h1>
 		<table border="1px;" width="90%">
 			<tr>
 				<th>S.No</th>
 				<th>College Code</th>
 				<th>College Name</th>
 				<th>College Address</th>
 				<th>College Contact</th>
 				<th>College Email</th>
 				<th>College Website</th> 				
 						
 			</tr>
 			<?php 
 				$i=1;
 				$q1="SELECT * from college";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						<td><?php echo $i; ?></td>
 						<td><?php echo $row['collcode']; ?></td>
 						<td><?php echo $row['collname']; ?></td>
 						<td><?php echo $row['colladdr']; ?></td>
 						<td><?php echo $row['collcontact']; ?></td>
 						<td><?php echo $row['collemail']; ?></td>
 						<td><a href="<?php echo $row['collweb']; ?>"></a><?php echo $row['collweb']; ?></td>

 						<td><input type="button" value="Branch Details" onclick="window.location='commviewbranch.php?collcode=<?php echo $row['collcode']; ?>'"></td>
 						<td><input type="button" value="Give Feedback" onclick="window.location='commgivefeed.php?collcode=<?php echo $row['collcode']; ?>'"></td>
 						
 						<?php $i++; ?>
 					</tr>

 				<?php }



 			 ?>
 		</table>
 		<br><br><br>
 	</center>
 
 
 </body>
 </html>