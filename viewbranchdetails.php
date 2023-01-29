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
        td
        {
            text-align: center;
        }
    </style>
 </head>
 <body>
    <center>
        <h1 style="margin-top: 100px;">Branch details</h1>
        <table border="1px;" width="90%">
            <tr>
                <th>S.No</th>
                <th>Branch Name</th>
                <th>Number of 1st year Students</th>
                <th>Number of 2nd year Students</th>
                <th>Number of 3rd year Students</th>
                <th>Number of Teaching</th>
                <th>Number of Non Teaching</th>
                <th>Number of classrooms</th>
                <th>Number of Labs</th>                 
            </tr>
            <?php 
                $i=1;
                $q1="SELECT * from branch_details where coll_code='$collcode'";
                $rs1=mysqli_query($conn,$q1);
                while($row=mysqli_fetch_assoc($rs1))
                { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['bname']; ?></td>
                        <td><?php echo $row['fy']; ?></td>
                        <td><?php echo $row['sy']; ?></td>
                        <td><?php echo $row['ty']; ?></td>
                        <td><?php echo $row['teaching']; ?></td>
                        <td><?php echo $row['non-teach']; ?></td>
                        <td><?php echo $row['classrooms']; ?></td>
                        <td><?php echo $row['labs']; ?></td>
                        <?php $i++; ?>
                    </tr>

                <?php }



             ?>
        </table>
        <br><br><br>
    </center>
 
 </body>
 </html>