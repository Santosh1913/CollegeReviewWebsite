<?php 
include "pubnav.php";
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
        td
        {
            text-align: center;
        }
    </style>
 </head>
 <body>
    <center>
        <h1 style="margin-top: 100px;">Feedback details</h1>
        <table border="1px;" width="90%">
            <tr>
                <th>S.No</th>
                <th>College Code</th>
                <th>Feedback  </th>
                <th>Suggestion </th>
                               
                        
            </tr>
            <?php 
                $i=1;
                $q1="SELECT * from pubfeedback";
                $rs1=mysqli_query($conn,$q1);
                while($row=mysqli_fetch_assoc($rs1))
                { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['coll_code']; ?></td>
                        <td><?php echo $row['feedback']; ?></td>
                        <td><?php echo $row['suggestion']; ?></td>
                       

                      
                        
                        <?php $i++; ?>
                    </tr>

                <?php }



             ?>
        </table>
        <br><br><br>
    </center>
 
 
 </body>
 </html>