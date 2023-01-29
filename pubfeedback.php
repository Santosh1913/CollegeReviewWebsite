<?php 
$collcode=$_GET['collcode'];
include "pubnav.php";
include "connect.php";
$dis="SELECT * from public where email='$email'";
$res=mysqli_query($conn,$dis);
while ($row=mysqli_fetch_assoc($res)) {
    $name=$row['name'];
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <style type="text/css">
        th,td{
            padding: 20px;
        }
        td input
        {
            width: 200px;
            height: 40px;
            border-radius: 10px;
        }
        input
        {
            width: 200px;
            height: 40px;
            border-radius: 10px;
        }
        td select
        {
            width: 200px;
            height: 40px;
            border-radius: 10px;
        }
    </style>
 </head>
 <body>
    <center>
        <h1 style="margin-top: 100px;"> GIVE FEEDBACK</h1>
        <form method="post">
        <table>
            <tr>
                <th>Give Feedback</th>
                <td><textarea name="feed"></textarea></td>
            </tr>
            <tr>
                <th>Give Suggestion</th>
                <td><textarea name="suggest"></textarea></td>
            </tr>
        </table>
        <input type="submit" name="add" value="FEEDBACK">
        </form>

    </center>
    <?php 
    if(isset($_POST['add']))
    {
        $feed=$_POST['feed'];
        $suggest=$_POST['suggest'];
        
        

        
            $q1="INSERT into pubfeedback values('0','$email','$name' ,'$feed','$suggest','$collcode') ";
            $rs1=mysqli_query($conn,$q1);
            
            if($rs1)
            {
                echo "<script type='text/javascript'>
                alert('Data Added Successful');
                window.location=('publicindex.php');
                </script>";
            }
            else
            {
                echo "<script type='text/javascript'>
                alert('Something Went Wrong');

                
                </script>";
            }
        
        
    }


     ?>
 
 </body>
 </html>