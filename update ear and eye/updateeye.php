<?php
    $connect = mysqli_connect('localhost','root','');
    $id=$_GET['id'];
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
    $rem=$_POST['eyeremark'];
    $vl=$_POST['visualacuityl'];
    $vr=$_POST['visualacuityr'];
    $wl=$_POST['withpinholel'];
    $wr=$_POST['withpinholer'];
    $rl=$_POST['rxl'];
    $rr=$_POST['rxr'];
    $pl=$_POST['pdl'];
	
    $sql="UPDATE eye SET  eye_remark ='$rem' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE eye SET lvisual_acuity ='$vl' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE eye SET  rvisual_acuity ='$vr' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE eye SET lwith_pinhole ='$wl' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE eye SET rwith_pinhole ='$wr' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE eye SET l_rx ='$rl' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE eye SET r_rx ='$rr' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
    $sql="UPDATE eye SET pd='$pl' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
    }  
 
    else{
        echo '<script language="javascript" type="text/javascript"> 
		alert("Patient Successfully Updated");
        </script>';
        header("refresh:0.2; url=displayEye.php?id=$id");
	}
?>