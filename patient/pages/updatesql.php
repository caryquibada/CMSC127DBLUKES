<?php
    $connect = mysqli_connect('localhost','root','');
    $id=$_GET['id'];
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
    $minitial=$_POST['middlename'];
    $minitial=strtoupper($minitial);
	$age=$_POST['age'];
	$numage=(int)$age;
	$sex=$_POST['optionsRadios'];
	$schoolnum=$_POST['school_id'];
	$remark=$_POST['patientremark'];
    $sql="UPDATE patient SET patient_fname='$fname' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}
    $sql="UPDATE patient SET patient_lname='$lname' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}
    $sql="UPDATE patient SET patient_minitial='$minitial' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}
    $sql="UPDATE patient SET age='$numage' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}
	$sql="UPDATE patient SET school_number='$schoolnum' WHERE patient_id=$id";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}
	$sql="UPDATE patient SET patient_remark='$remark' WHERE patient_id=$id";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}
    $sql="UPDATE patient SET sex='$sex' where patient_id=$id";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}else{
		$school=$_GET['school'];
        echo '<script language="javascript" type="text/javascript"> 
		window.location = "records.php?school='.$school.'";
		</script>';
	}
	
?>