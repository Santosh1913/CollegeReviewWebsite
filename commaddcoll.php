<?php 
	include "commnav.php";
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
 		input
 		{
 			width: 200px;
 			height: 50px;
 			border-radius: 20px;
 		}

 	</style>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top:40px;"> College Registartion</h1>
 		<form method="post" action="">

 			<table>
 				<tr>
 					<th>College Code</th>
 					<td><input type="text" name="coll_code"></td>
 				</tr>
 				<tr>
 					<th>College Name</th>
 					<td><input type="text" name="coll_name"></td>
 				</tr>
 				<tr>
 					<th>College Address</th>
 					<td><input type="text" name="coll_address"></td>
 				</tr>
 				
 				<tr>	
 					<th>College Email</th>
 					<td><input type="text" name="coll_email"></td>
 				</tr>
                <tr>    
                    <th>College Contact</th>
                    <td><input type="text" name="coll_contact"></td>
                </tr>
                <tr>    
                    <th>College Website</th>
                    <td><input type="text" name="coll_web"></td>
                </tr>
 				<tr>	
 					<th>College Password</th>
 					<td><input type="password" name="pass" required></td>
 				</tr>
 				
 				 			
 			</table>
 			<br><center><input type="submit" name="reg" value="Register"> 
	<input type="reset" name="reset" value= "Cancel"></center>
 			
		</form>
 	</center>
    <br><br>
   <?php 

		if(isset($_POST['reg']))
		{
			$coll_code=$_POST['coll_code'];
			$name=$_POST['coll_name'];
			$address=$_POST['coll_address'];
			$contact=$_POST['coll_contact'];
			$email=$_POST['coll_email'];
			$web=$_POST['coll_web'];
			$pass=$_POST['pass'];

			$q="INSERT into college values('$coll_code','$name','$address','$contact','$email','$web','$pass') ";
			$rs=mysqli_query($conn,$q);
			if($rs)
				{
					
					echo "<script type='text/javascript'>
					alert('College Added ');
					window.location=('commaddcoll.php');
					</script>";
				}
				else
				{
					echo "<script type='text/javascript'>
					alert('Error fill the details properly ');
					
					</script>";
					die(mysqli_error($conn));
				}
		}


	 ?>
	
 
 </body>
 </html>