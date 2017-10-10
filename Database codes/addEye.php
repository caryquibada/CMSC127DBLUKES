<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'upcmscdb')){
		echo 'Database "upcmscdb" is not selected';
	}
	$visual_acuity=$_POST['vacuity'];
	$with_pinhole=$_POST['wpinhole'];
	$rx=$_POST['rx'];
	$pd=$_POST['pd'];
	$eye_remark=$_POST['eyeremark'];
	
	$sql="INSERT INTO eye (visual_acuity,with_pinhole,rx,pd,eyeremark) VALUES ('$visual_acuity','$with_pinhole','$rx','$pd','$eye_remark')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		echo 'Inserted';
	}
	header("refresh:0.5; url=add_eye.php");
?>