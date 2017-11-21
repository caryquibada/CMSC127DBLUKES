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
    $civilstatus=$_POST['civilstatus'];
    $praddress=$_POST['praddress'];
    $address=$_POST['address'];
    $bdate=$_POST['birthdate'];
    $bday=date('Y-m-d H:i',strtotime($bdate));
    $bplace=$_POST['birthplace'];
    $religion=$_POST['preligion'];
    $occupation=$_POST['occupation'];
    $connum=$_POST['contactnumber'];
    $monthly_income=$_POST['monthlyincome'];
    $education=$_POST['formEduc'];
    $remark=$_POST['patientremark'];
    $sql="UPDATE patient SET patient_fname='$fname' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE patient SET monthly_income='$monthly_income' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE patient SET highest_educ_attainment='$education' where patient_id=$id";
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
    $sql="UPDATE patient SET civil_status='$civilstatus' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE patient SET present_address='$praddress' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE patient SET provincial_address='$address' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE patient SET birthdate='$bday' where patient_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE patient SET religion='$religion' where patient_id=$id";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE patient SET birthplace='$bplace' where patient_id=$id";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE patient SET contact_number='$connum' where patient_id=$id";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}
    $sql="UPDATE patient SET occupation='$occupation' where patient_id=$id";
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
        echo '<script language="javascript" type="text/javascript"> 
		window.location = "recordns.php";
		</script>';
	}
?>