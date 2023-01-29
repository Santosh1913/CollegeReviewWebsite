<?php 
include "commnav.php";
include "connect.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
    <style type="text/css">
    h1
    {
        margin-top: 120px;
    }
        th,td
        {
            padding: 20px;
        }
        th
        {
        	text-align: left;
        	font-size:15px;
        }
        table
        {
            border-collapse: collapse;
            border:1px;
        }
    </style>
 </head>
 <body>
 	<center>
 		<h1><u>Committee Details</u></h1>
        <table>
 	<table>
 		
 		
 		<?php 
 			$q="Select * from commitee where email='$email'";
 			$rs=mysqli_query($conn,$q);
 			while($row=mysqli_fetch_assoc($rs))
 			{?>
 				<tr>
 					 <th>Committee ID</th>
 					<td><?php echo $row['id']; ?></td>
 				</tr>
 				<tr>
 					<th>Committee Name</th>
 					<td><?php echo $row['name']; ?></td>
 				</tr>
 				<tr>
 					<th>Committee Address</th>
 					<td><?php echo $row['address']; ?></td>
 				</tr>
 				<tr>
 					<th>Committee Contact</th>
 					<td><?php echo $row['contact']; ?></td>					
 				</tr>
 				<tr>
 					<th>Committee Website</th>
 					<td><?php echo $row['email']; ?></td>
 				</tr>
 				<tr>
 					<th>Committee Email</th>
 					<td><?php echo $row['website']; ?></td>
 				</tr>
                
               
              
               
                
 				
 			<?php }

 		 ?>
 		
 	</table>
 	</center>
 
 </body>
 </html>
