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
 				<h1 style="margin-top:10px; ">BRANCH DETAILS </h1>
 				
 				<tr>
 					<th>BRANCH NAME</th>
 					<td><input type="text" name="bname"></td>
 				</tr>
 				<tr>
 					<th>Number of Students in 1st year</th>
 					<td><input type="text" name="fy"></td>
 				</tr>
 				<tr>
 					<th>Number of Students in 2nd year</th>
 					<td><input type="text" name="sy"></td>
 				</tr>
 				<tr>
 					<th>Number of Students in 3rd year</th>
 					<td><input type="text" name="ty"></td>
 				</tr>
 				<tr>
 					<th>Number of teaching Staff</th>
 					<td><input type="text" name="tech"></td>
 				</tr>
 				<tr>
 					<th>Number of Non-Teaching Staff</th>
 					<td><input type="text" name="nontech"></td>
 				</tr>
 				<tr>
 					<th>Number of classrooms</th>
 					<td><input type="text" name="classroom"></td>
 				</tr>
 				<tr>
 					<th>Number of labs</th>
 					<td><input type="text" name="lab"></td>
 				</tr>
 				
 				
 			</table>
 			<input type="submit" name="reg" value="REGISTER">
 		</form>
 		<br><br><br>
 	</center>
 	<?php 
 	if(isset($_POST['reg']))
 	{
 		$bname=$_POST['bname'];
 		$fy=$_POST['fy'];
 		$sy=$_POST['sy'];
 		$ty=$_POST['ty'];
 		$tech=$_POST['tech'];
 		$nontech=$_POST['nontech'];
 		$classroom=$_POST['classroom'];
 		$lab=$_POST['lab'];
 		

 		
 			$q1="INSERT into branch_details values('$bname','$fy','$sy','$ty','$tech','$nontech','$classroom' ,'$lab','$collcode') ";
 			$rs1=mysqli_query($conn,$q1);
 			
 			if($rs1)
 			{
 				echo "<script type='text/javascript'>
 				alert('Data Added Successful');
 				window.location=('branchdetails.php');
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