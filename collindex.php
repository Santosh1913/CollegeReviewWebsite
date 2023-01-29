<?php 
include "collnav.php";
include "connect.php";

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
        th
        {
        	text-align: left;
        	font-size:15px;
        }
    </style>
 </head>
 <body>
 	<center>
 		<h1>College Details</h1>
 	<table>
 		
 		
 		<?php 
 			$q="Select * from college where collcode='$collcode'";
 			$rs=mysqli_query($conn,$q);
 			while($row=mysqli_fetch_assoc($rs))
 			{?>
 				<tr>
 					 <th>College Code</th>
 					<td><?php echo $row['collcode']; ?></td>
 				</tr>
 				<tr>
 					<th>College Name</th>
 					<td><?php echo $row['collname']; ?></td>
 				</tr>
 				<tr>
 					<th>College Address</th>
 					<td><?php echo $row['colladdr']; ?></td>
 				</tr>
 				<tr>
 					<th>College Contact</th>
 					<td><?php echo $row['collcontact']; ?></td>					
 				</tr>
 				<tr>
 					<th>College Website</th>
 					<td><?php echo $row['collweb']; ?></td>
 				</tr>
 				<tr>
 					<th>College Email</th>
 					<td><?php echo $row['collemail']; ?></td>
 				</tr>
                
               
              
               
                
 				
 			<?php }

 		 ?>
 		
 	</table>
 	</center>
 
 </body>
 </html>
