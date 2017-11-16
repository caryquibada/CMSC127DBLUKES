<?php
    $connect = mysqli_connect('localhost','root','');
    $id=$_GET['id'];
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
	$rem=$_POST['earremark'];
	$lear=$_POST['leftear'];
    $rear=$_POST['rightear'];
    $sql="UPDATE ear SET ear_remark ='$rem' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE ear SET left_ear='$lear' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE ear SET right_ear='$rear' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
        echo '<script language="javascript" type="text/javascript"> 
		window.location = "earup.php?id='.$id.'&status=1";
		</script>';
	}
?>