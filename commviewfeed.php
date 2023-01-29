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
        body
        {
           background-image: url("");
        }
 	</style>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 100px;">Feedback Details</h1>
 		<table border="1px;" width="90%">
 			<tr>
 				<th>S.No</th>
 				<th>ID</th>
 				<th>Feedback</th>
 				<th>Suggestion</th>
 				<th>College</th>
 				
 						
 						
 			</tr>
 			<?php 

               
 				$i=1;
 				$q1="SELECT   feedback.fid,feedback.fid,feedback.feed,feedback.suggest,feedback.collcode,college.collname from feedback inner join  college on feedback.collcode=college.collcode ";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						<td><?php echo $i; ?></td>
 						<td><?php echo $row['fid']; ?></td>
 						<td><?php echo $row['feed']; ?></td>
 						<td><?php echo $row['suggest']; ?></td>
 						<td><?php echo $row['collname']; ?></td>
 						
 						
 						 						
 						
 						
 						<?php $i++; ?>
 					</tr>

 				<?php }



 			 ?>
 		</table>
 		<br><br><br>
 	</center>
 
 
 </body>
 </html>