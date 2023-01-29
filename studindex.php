<?php 
include "studnav.php";
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
 		<h1>Student Details</h1>
 	<table>
 		
 		
 		<?php 
 			$q="SELECT * from student where reg_no='$email'";
 			$rs=mysqli_query($conn,$q);
 			while($row=mysqli_fetch_assoc($rs))
 			{?>
 				<tr>
 					 <th>Student Name</th>
 					<td><?php echo $row['stud_name']; ?></td>
 				</tr>
 				<tr>
 					<th>Student Address </th>
 					<td><?php echo $row['stud_addr']; ?></td>
 				</tr>
 				
 				<tr>
 					<th>Student Contact</th>
 					<td><?php echo $row['stud_contact']; ?></td>					
 				</tr>
 				<tr>
 					<th>Student  Email</th>
 					<td><?php echo $row['stud_email']; ?></td>
 				</tr>
 				
               
              
               
                
 				
 			<?php }

 		 ?>
 		
 	</table>
 	</center>
 
 </body>
 </html>
