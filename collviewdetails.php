<?php 
	include "collnav.php";
    include "connect.php"

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
 		body
 		{
 			background-image:url("img2.jpg");
 			background-repeat: no-repeat;
 			background-size: cover;
 		}
 	</style>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 100px">College Information</h1>

 		
 		<table>
 			<?php 
 				$q1= "SELECT * from colldetails where id='$collcode'";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						<th>College Code</th>
 						<td><?php echo $row['id']; ?></td>
 					</tr>
 					<tr>
 						<th>College Type</th>
 						<td><?php echo $row['colltype']; ?></td>
 					</tr>
 					<tr>
 						<th>Number of Branches</th>
 						<td><?php echo $row['branches']; ?></td>
 					</tr>
 					

 				<?php }

 			 ?>
 		</table>
 	</center>
 	<br><br>
 
 
 </body>
 </html>