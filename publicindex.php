<?php 
include "pubnav.php";
include "connect.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <style type="text/css">
    h1
    {
        margin-top:50px;
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
            margin-top: 50px;
        }
    </style>
 </head>
 <body>
    <center>
        <h1>Public Details</h1>
    <table>
        
        
        <?php 
            $q="Select * from public where email='$email'";
            $rs=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($rs))
            {?>
                
                <tr>
                    <th>Public Name</th>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <tr>
                    <th>Public  Address</th>
                    <td><?php echo $row['address']; ?></td>
                </tr>
                <tr>
                    <th>Public Contact</th>
                    <td><?php echo $row['contact']; ?></td>                 
                </tr>
                 <tr>
                    <th>Public Email</th>
                    <td><?php echo $row['email']; ?></td>                 
                </tr>
                    
              
               
                
                
            <?php }

         ?>
        
    </table>
    </center>
 
 </body>
 </html>
