<?php 
	include "adminnav.php";
	include "connect.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
    <style type="text/css">
    h1
    {
        margin-top: 20px;
    }
        th,td
        {
            padding: 20px;
        }
        table
        {
            margin-top: 20px;
        }
        body
        {
            background-color: burlywood;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
 </head>
 <body>
 	<center>
 		<h1><u>Committee Details</u></h1>
 	<table border="1px;">
 		<tr>
            <th>Committee ID</th>
 			<th>Committee Name</th>
 			<th>Committee Address</th>
            <th>Committee Contact</th>
            <th>Committee Website</th>
            <th>Committee Email</th>
            <th colspan="2">UPDATION</th>
 		</tr>
 		
 		<?php 
 			$q="Select * from commitee";
 			$rs=mysqli_query($conn,$q);
 			while($row=mysqli_fetch_assoc($rs))
 			{?>
 				<tr>
 				<td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['website']; ?></td>
                <td><input type="button" value="EDIT" onclick="window.location='commedit.php?id=<?php echo $row['id']; ?>'"></td>
                <td><input type="button" value="DELETE" onclick="window.location='commdel.php?id=<?php echo $row['id']; ?>'"></td>
 				</tr>
 			<?php }

 		 ?>
 		
 	</table>
 	</center>
 
 </body>
 </html>