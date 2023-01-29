<?php 
	include "adminnav.php";
	include "connect.php";

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
 				<tr>
 					<th>Committee Name</th>
 					<td><input type="text" name="comm_name"></td>
 				</tr>
 				<tr>
 					<th>Committee Address</th>
 					<td><input type="text" name="comm_address"></td>
 				</tr>
 				
 				<tr>	
 					<th>Committee Email</th>
 					<td><input type="text" name="comm_email"></td>
 				</tr>
                <tr>    
                    <th>Committee Contact</th>
                    <td><input type="text" name="comm_contact"></td>
                </tr>
                <tr>    
                    <th>Committee Website</th>
                    <td><input type="text" name="comm_web"></td>
                </tr>
 				<tr>	
 					<th>Committee Password</th>
 					<td><input type="password" name="pass" required></td>
 				</tr>
 				
 				 			
 			</table>
 			<br><center><input type="submit" name="reg" value="Register"> 
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

       
        $q1="INSERT INTO commitee value('0','$comm_name','$comm_address','$comm_contact','$comm_email','$comm_web','$pass') ";
        $r1=mysqli_query($conn,$q1);
        
        if($r1)
        {
            
            echo "<script>
                alert('Registered Sucess');
                window.location=('adminaddcomm.php');
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