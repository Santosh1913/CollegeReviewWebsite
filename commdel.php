<?php 
	include "connect.php";
	$id=$_GET['id'];

	$delete="DELETE from commitee where id='$id'";
	$res=mysqli_query($conn,$delete);

	if($res)
	{
		echo "<script>
		alert('Delted');
		window.location='adminviewcomm.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Error Delted');
		window.location='adminviewcomm.php';
		</script>";
	}


 ?>