<?php 
	include "connect.php";
	include "commnav.php";


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
 		<h1 style="margin-top: 100px;">Add Inspection Details</h1>
 		<form method="post">
 			<table>
 				<tr>
 					<th>Inspection Code</th>
 					<td><input type="text" name="code"></td>
 				</tr>
 				<tr>
 					<th>Inspection Member1</th>
 					<td><input type="text" name="mem1"></td>
 				</tr>
 				<tr>
 					<th>Inspection Member2</th>
 					<td><input type="text" name="mem2"></td>
 				</tr>
 				<tr>
 					<th>Inspection Member3</th>
 					<td><input type="text" name="mem3"></td>
 				</tr>
 				<tr>
 					<th>Inspection Member4</th>
 					<td><input type="text" name="mem4"></td>
 				</tr>
 				<tr>
 					<th>Inspection Date</th>
 					<td><input type="date" name="inspdate"></td>
 				</tr>
 				<tr>
 					<th>College 1 Visited</th>
 					<td>
 						<select name="coll1">
 							<option>Select College</option>
 							<?php 
 								$q1="SELECT * from college";
 								$rs1=mysqli_query($conn,$q1);
 								while($row=mysqli_fetch_assoc($rs1))
 								{
 									$name=$row['collname'];
 									$collcode=$row['collcode'];
 									?>

 									<option value="<?php echo $collcode; ?>"><?php echo $name; ?></option>
 								<?php }
 								

 							 ?>
 							 
 						</select>
 					</td>
 				</tr>

 				<tr>
 					<th>College 2 Visited</th>
 					<td>
 						<select name="coll2">
 							<option>Select College</option>
 							<?php 
 								$q1="SELECT * from college";
 								$rs1=mysqli_query($conn,$q1);
 								while($row=mysqli_fetch_assoc($rs1))
 								{
 									$name=$row['collname'];
 									$collcode=$row['collcode'];
 									?>

 									<option value="<?php echo $collcode; ?>"><?php echo $name; ?></option>
 								<?php }
 								

 							 ?>
 							 
 						</select>
 					</td>
 				</tr>
 				<tr>
 					<th>College 3 Visited</th>
 					<td>
 						<select name="coll3">
 							<option>Select College</option>
 							<?php 
 								$q1="SELECT * from college";
 								$rs1=mysqli_query($conn,$q1);
 								while($row=mysqli_fetch_assoc($rs1))
 								{
 									$name=$row['collname'];
 									$collcode=$row['collcode'];
 									?>

 									<option value="<?php echo $collcode; ?>"><?php echo $name; ?></option>
 								<?php }
 								

 							 ?>
 							 
 						</select>
 					</td>
 				</tr>
 			</table>
 			
 			<input type="submit" name="add" value="Add">
 			<br><br><br><br>
 		</form>
 	</center>
 	<?php 
 	if(isset($_POST['add']))
 	{
 		$code=$_POST['code'];
 		$mem1=$_POST['mem1'];
 		$mem2=$_POST['mem2'];
 		$mem3=$_POST['mem3'];
 		$mem4=$_POST['mem4'];
 		$inspdate=$_POST['inspdate'];
 		$coll1=$_POST['coll1'];
 		$coll2=$_POST['coll2'];
 		$coll3=$_POST['coll3'];

 		
 		

 		
 			$q1="INSERT into inspection values('$code','$mem1','$mem2','$mem3','$mem4','$inspdate','$coll1','$coll2','$coll3') ";
 			$rs1=mysqli_query($conn,$q1);
 			
 			if($rs1)
 			{
 				echo "<script type='text/javascript'>
 				alert('Data Added Successful');
 				window.location=('inspectiondet.php');
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