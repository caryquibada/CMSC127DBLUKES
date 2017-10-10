<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'upcmscdb')){
		echo 'Database "upcmscdb" is not selected';
	}
	$left_ear=$_POST['leftear'];
	$right_ear=$_POST['rightear'];
	$ear_remark=$_POST['earremark'];

	$sql="INSERT INTO table (leftear,rightear,earremark) VALUES ('$left_ear','$right_ear','$ear_remark')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		echo 'Inserted';
	}
	header("refresh:0.5; url=add_ear.php");
?>