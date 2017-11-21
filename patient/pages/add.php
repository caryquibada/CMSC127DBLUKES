
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
	$patient_remark=$_POST['patient_remark'];
	$query="SELECT * FROM PATIENT";
	$check=0;
	$result=mysqli_query($connect,$query);
	while($item=mysqli_fetch_array($result)){
		if($fname==$item['patient_fname']&&$lname==$item['patient_lname']&&$minitial==$item['patient_minitial']&&$age==$item['age']&&$sex==$item['sex']){
			$check=1;
			break;
		}
	}
	$sql="INSERT INTO patient (PATIENT_FNAME,PATIENT_LNAME,PATIENT_MINITIAL,SCHOOL_NUMBER,AGE,SEX,PRESENT_ADDRESS,PROVINCIAL_ADDRESS,CIVIL_STATUS,BIRTHPLACE,RELIGION,OCCUPATION,MONTHLY_INCOME,CONTACT_NUMBER,HIGHEST_EDUC_ATTAINMENT,BIRTHDATE,PATIENT_REMARK) VALUES ('$fname','$lname','$minitial','$schoolid','$numage','$sex','$paddress','$address','$cstatus','$birthplace','$religion','$occupation','$monthly_income','$cnumber','$education','$bday','$patient_remark')";
	if(!mysqli_query($connect,$sql)&&$schoolid!=1){
		echo 'Insert failure';
		$placeholder=0;
		echo '<script language="javascript" type="text/javascript"> 
		window.location = "new.php?id=0";
		</script>';
	}else if($check!=1&&$schoolid!=1){
		echo "<script language=\"javascript\" type=\"text/javascript\"> 
		window.location = \"new.php?id=1&sid=$schoolid\";
		</script>";
	}else if($check==1&&$schoolid!=1){
	echo "<script language=\"javascript\" type=\"text/javascript\"> 
			window.location = \"new.php?id=0&sid=$schoolid\"
		</script>";
	}else if($check!=1&&$schoolid==1){
		$query1="SELECT * FROM PATIENT where patient_fname='$fname' AND patient_lname='$lname' AND patient_minitial='$minitial'";
		$result1=mysqli_query($connect,$query1);
		$item1=mysqli_fetch_array($result1);
		$pid=$item1['patient_id'];
		echo "<script language=\"javascript\" type=\"text/javascript\"> 
		window.location = \"newns.php?pid=$pid\"
		</script>";
	}else{
		echo "<script language=\"javascript\" type=\"text/javascript\"> 
		window.location = \"new.php?id=0&sid=$schoolid\"
	</script>";
	}
?>
<script>
function Confirm()
	{
  		var x = confirm("Seems like this patient was entered already. Do you still want to add this patient?");
  		if (x)
      		return true;
 		 else
  		  return false;
	}  
</script>