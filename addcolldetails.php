<?php 

	include "collnav.php";
    include "connect.php";

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
 		<form method="post">

 			<table>
 				<h1 style="margin-top:10px; ">ADD COLLEGE Details </h1>
 				
 				<tr>
 					<th>COLLEGE TYPE</th>
 					<td><input type="text" name="ctype"></td>
 				</tr>
 				<tr>
 					<th>Number of Branches</th>
 					<td><input type="text" name="branch"></td>
 				</tr>
 				
 				
 			</table>
 			<input type="submit" name="reg" value="REGISTER">
 		</form>
 		<br><br><br>
 	</center>
 	<?php 
 	if(isset($_POST['reg']))
 	{
 		$ctype=$_POST['ctype'];
 		$branch=$_POST['branch'];
 		
 		

 		
 			$q1="INSERT into colldetails values('$collcode','$ctype','$branch') ";
 			$rs1=mysqli_query($conn,$q1);
 			
 			if($rs1)
 			{
 				echo "<script type='text/javascript'>
 				alert('Data Added Successful');
 				window.location=('collindex.php');
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