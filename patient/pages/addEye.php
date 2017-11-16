<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
	}
	$patient_id=$_POST['patient_id'];
	if(!empty($_POST['visualacuityladd'])){
		$visualacuityl=$_POST['visualacuityl']."-".$_POST['visualacuityladd'];
	}else{
		$visualacuityl=$_POST['visualacuityl'];
	}
	if(!empty($_POST['visualacuityradd'])){
		$visualacuityr=$_POST['visualacuityr']."-".$_POST['visualacuityradd'];
	}else{
		$visualacuityr=$_POST['visualacuityr'];
	}
	if(!empty($_POST['withpinholeladd'])){
		$withpinholel=$_POST['withpinholel']."-".$_POST['withpinholeladd'];
	}else{
		$withpinholel=$_POST['withpinholel'];
	}
	if(!empty($_POST['withpinholeradd'])){
		$withpinholer=$_POST['withpinholer']."-".$_POST['withpinholeradd'];
	}else{
		$withpinholer=$_POST['withpinholer'];
	}

	
	
	
	$rxl=$_POST['rxl'];
	$rxr=$_POST['rxr'];
	$pdl=$_POST['pdl'];
	$pdr=$_POST['pdr'];
	$eyeremark=$_POST['eyeremark'];
	$sql="INSERT INTO eye(PATIENT_ID,LVISUAL_ACUITY,RVISUAL_ACUITY,LWITH_PINHOLE,RWITH_PINHOLE,L_RX,R_RX,PD,EYE_REMARK) VALUES ('$patient_id','$visualacuityl','$visualacuityr','$withpinholel','$withpinholer','$rxl','$rxr','$pdl','$eyeremark')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		echo '<script language="javascript" type="text/javascript"> 
		window.location = "eye.php?id=1";
		</script>';
	}
?>