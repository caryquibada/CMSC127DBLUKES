<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
	}
	$placeholder=0;
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$minitial=$_POST['middlename'];
	$minitial=strtoupper($minitial);
	$schoolid=$_POST['school_id'];
	$age=$_POST['age'];
	$numage=(int)$age;
	$sex=$_POST['optionsRadios'];
	$paddress=$_POST['praddress'];
	$address=$_POST['address'];
	$birthdate=$_POST['birthdate'];
	$bday=date('Y-m-d H:i',strtotime($birthdate));
	$birthplace=$_POST['birthplace'];
	$cstatus=$_POST['civilstatus'];
	$religion=$_POST['preligion'];
	$monthly_income=$_POST['monthlyincome'];
	$occupation=$_POST['occupation'];
	$cnumber=$_POST['contactnumber'];
	$education=$_POST['formEduc'];
	
	$sql="INSERT INTO patient (PATIENT_FNAME,PATIENT_LNAME,PATIENT_MINITIAL,SCHOOL_NUMBER,AGE,SEX,PRESENT_ADDRESS,PROVINCIAL_ADDRESS,CIVIL_STATUS,BIRTHPLACE,RELIGION,OCCUPATION,MONTHLY_INCOME,CONTACT_NUMBER,HIGHEST_EDUC_ATTAINMENT,BIRTHDATE) VALUES ('$fname','$lname','$minitial','$schoolid','$numage','$sex','$paddress','$address','$cstatus','$birthplace','$religion','$occupation','$monthly_income','$cnumber','$education','$bday')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
		$placeholder=0;
		echo '<script language="javascript" type="text/javascript"> 
		window.location = "new.php?id=0";
		</script>';
		
	}else{
		echo '<script language="javascript" type="text/javascript"> 
		window.location = "new.php?id=1";
		</script>';
	}
?>