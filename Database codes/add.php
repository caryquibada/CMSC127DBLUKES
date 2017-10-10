<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'upcmscdb')){
		echo 'Database "upcmscdb" is not selected';
	}
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$minitial=$_POST['middlename'];
	$age=$_POST['age'];
	$numage=(int)$age;
	$sex=$_POST['formSex'];
	$paddress=$_POST['praddress'];
	$address=$_POST['address'];
	$birthdate=$_POST['birthdate'];
	$bday=date('Y-m-d H:i',strtotime($birthdate));
	$birthplace=$_POST['birthplace'];
	$cstatus=$_POST['civilstatus'];
	$religion=$_POST['preligion'];
	$monthly_income=$_POST['monthlyincome'];
	$intmonthly=(int)$monthly_income;
	$occupation=$_POST['occupation'];
	$cnumber=$_POST['contactnumber'];
	$education=$_POST['formEduc'];
	
	$sql="INSERT INTO patient (PATIENT_FNAME,PATIENT_LNAME,PATIENT_MINITIAL,AGE,BIRTHDATE,SEX,PRESENT_ADDRESS,PROVINCIAL_ADDRESS,CIVIL_STATUS,BIRTHPLACE,RELIGION,OCCUPATION,MONTHLY_INCOME,CONTACT_NUMBER,HIGHEST_EDUC_ATTAINMENT) VALUES ('$fname','$lname','$minitial','$numage',$birthdate,'$sex','$paddress','$address','$cstatus','$birthplace','$religion','$occupation','$intmonthly','$cnumber','$education')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		echo 'Inserted';
	}
	echo $birthdate;
	header("refresh:10000; url=add_patient.php");
?>