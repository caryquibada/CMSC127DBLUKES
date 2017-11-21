<?php
    $connect = mysqli_connect('localhost','root','');
    $id=$_GET['id'];
    $school=$_GET['school'];
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
    $rem=$_POST['eyeremark'];
    if(!empty($_POST['visualacuityladd'])){
      $vl=$_POST['visualacuityl']."-".$_POST['visualacuityladd'];
    }else{
      $vl=$_POST['visualacuityl'];
    }
    if(!empty($_POST['visualacuityradd'])){
      $vr=$_POST['visualacuityr']."-".$_POST['visualacuityradd'];
    }else{
      $vr=$_POST['visualacuityr'];
    }
    if(!empty($_POST['withpinholeladd'])){
      $wl=$_POST['withpinholel']."-".$_POST['withpinholeladd'];
    }else{
      $wl=$_POST['withpinholel'];
    }
    if(!empty($_POST['withpinholeradd'])){
      $wr=$_POST['withpinholer']."-".$_POST['withpinholeradd'];
    }else{
      $wr=$_POST['withpinholer'];
    }
    $rl=$_POST['rxl'];
    $rr=$_POST['rrx'];
    $pl=$_POST['pdl'];
	
    $sql="UPDATE eye SET  eye_remark ='$rem' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }  
    $sql="UPDATE eye SET lvisual_acuity ='$vl' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }  
    $sql="UPDATE eye SET  rvisual_acuity ='$vr' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }  
    $sql="UPDATE eye SET lwith_pinhole ='$wl' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }  
    $sql="UPDATE eye SET rwith_pinhole ='$wr' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }  
    $sql="UPDATE eye SET l_rx ='$rl' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }  
    $sql="UPDATE eye SET r_rx ='$rr' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }  
    $sql="UPDATE eye SET pd='$pl' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }else{
      echo '<script language="javascript" type="text/javascript"> 
  window.location = "records.php?school='.$school.'";
  </script>';
}
?>