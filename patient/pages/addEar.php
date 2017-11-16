<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
	}
	$patient_id=$_POST['patient_id'];
	$left_ear=$_POST['leftear'];
	$right_ear=$_POST['rightear'];
	$ear_remark=$_POST['earremark'];
	$sql="INSERT INTO ear(PATIENT_ID,LEFT_EAR,RIGHT_EAR,EAR_REMARK) VALUES ('$patient_id','$left_ear','$right_ear','$ear_remark')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		
		header('refresh:0;url=ear.php');
		
	}
?>