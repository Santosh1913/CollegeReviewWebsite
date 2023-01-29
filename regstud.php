<?php 

	include "connect.php";
	include "mainnav.php";

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
 		<form method="post">

 			<table>
 				<h1 style="margin-top:10px; ">STUDENT REGISTRATION </h1>
 				
 				<tr>
 					<th> NAME</th>
 					<td><input type="text" name="name"></td>
 				</tr>
 				<tr>
 					<th> REGISTER NO</th>
 					<td><input type="text" name="regno"></td>
 				</tr>
 				<tr>
 					<th> ADDRESS</th>
 					<td><input type="text" name="add"></td>
 				</tr>
 				<tr>
 					<th> CONTACT</th>
 					<td><input type="text" name="cont"></td>
 				</tr>
 				
 				<tr>
 					<th> EMAIL</th>
 					<td><input type="text" name="email"></td>
 				</tr>
 				<tr>
 					<th>PASSWORD</th>
 					<td><input type="password" name="pass"></td>
 				</tr>
 				
 			</table>
 			<input type="submit" name="reg" value="REGISTER">
 		</form>
 		<br><br><br>
 	</center>
 	<?php 
 	if(isset($_POST['reg']))
 	{
 		
 		$name=$_POST['name'];
 		$reg=$_POST['regno'];
 		$add=$_POST['add'];
 		$cont=$_POST['cont']; 		
 		$email=$_POST['email'];
 		$pass=$_POST['pass'];
 		

 		
 			$q1="INSERT into student values('$name','$add','$cont','$email','$pass','$reg') ";
 			$rs1=mysqli_query($conn,$q1);
 			
 			if($rs1)
 			{
 				echo "<script type='text/javascript'>
 				alert('Data Added Successful');
 				window.location=('student.php');
 				</script>";
 			}
 			else
 			{
 				echo "<script type='text/javascript'>
 				alert('Something Went Wrong');

 				
 				</script>";
 				die(mysqli_error($conn));
 			}
 		
 		
 	}


 	 ?>
 
 </body>
 </html>