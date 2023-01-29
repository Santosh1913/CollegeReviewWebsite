<?php 
	include "adminnav.php";
	include "connect.php";
	$id=$_GET['id'];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Committee</title>
 	<style type="text/css">
 		th,td
 		{
 			padding: 20px;
 		}
 		td input
 		{
 			width: 200px;
 			height: 50px;
 			border-radius: 20px;
            background-color: white;
            color: black;
 		}
        input
        {
            width: 150px;
            height: 40px;
            border-radius: 20px;
            background-color: black;
            color: white;
        }
        body
        {
            background-color: gray;
            background-repeat: no-repeat;
            background-size: cover;
        }

 	</style>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top:40px;"><u>Add Committee Details</u></h1>
 		<form method="post" action="">

 			<table>
 				<?php 
 					$edit="SELECT * from commitee where id='$id'";
 					$res=mysqli_query($conn,$edit);
 					while($row=mysqli_fetch_assoc($res))
 					{ ?>
 						<tr>
 					<th>Committee ID</th>
 					<td><input type="text" name="comm_name" value="<?php echo $row['id']; ?>" readonly></td>
 				</tr>
 						<tr>
 					<th>Committee Name</th>
 					<td><input type="text" name="comm_name" value="<?php echo $row['name']; ?>"></td>
 				</tr>
 				<tr>
 					<th>Committee Address</th>
 					<td><input type="text" name="comm_address" value="<?php echo $row['address']; ?>"></td>
 				</tr>
 				
 				<tr>	
 					<th>Committee Email</th>
 					<td><input type="email" name="comm_email" value="<?php echo $row['email']; ?>"></td>
 				</tr>
                <tr>    
                    <th>Committee Contact</th>
                    <td><input type="text" name="comm_contact" value="<?php echo $row['contact']; ?>"></td>
                </tr>
                <tr>    
                    <th>Committee Website</th>
                    <td><input type="text" name="comm_web" value="<?php echo $row['website']; ?>"></td>
                </tr>

 				<?php	}



 				 ?>
 				
 				
 				
 				 			
 			</table>
 			<br><center><input type="submit" name="reg" value="Updated"> 
	<input type="reset" name="reset" value= "Cancel"></center>
 			
		</form>
 	</center>
    <br><br>
    <?php 
    include "connect.php";
    if(isset($_POST['reg']))
    {
        $comm_name=$_POST['comm_name'];
        $comm_address=$_POST['comm_address'];
        $comm_email=$_POST['comm_email'];
        $comm_contact=$_POST['comm_contact'];
        $comm_web=$_POST['comm_web'];
        $pass=$_POST['pass'];

       
        $q1="UPDATE commitee set name='$comm_name', address='$comm_address', contact='$comm_contact',email='$comm_email',website='$comm_web' where id='$id' ";
        $r1=mysqli_query($conn,$q1);
        
        if($r1)
        {
            
            echo "<script>
                alert('Updated Sucess');
                window.location=('adminviewcomm.php');
                </script>";
        }
        else
        {
            echo "<script>
            alert('Something went wrong');            
            </script>";
            die(mysqli_error($conn));

        }   
    }
    ?>

 
 </body>
 </html>