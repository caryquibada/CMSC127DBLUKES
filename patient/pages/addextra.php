<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
    $pid=$_GET['pid'];
    $problem=$_POST['problem'];
    $hbackground=$_POST['hbackground'];
    $no_occu=$_POST['no_occu'];
    $no_floors=$_POST['no_floors'];
    $no_rooms=$_POST['no_rooms'];
    $housestatus=$_POST['housestatus'];
    $owner=$_POST['owner'];
    $toilet=$_POST['toilet'];
    $water=$_POST['water'];
	$sql="INSERT INTO extra(problem_presented,hist_background,no_occupants,no_floors,no_rooms,status_house,ownership,type_toilet,source_water,patient_id) VALUES ('$problem','$hbackground','$no_occu','$no_floors','$no_rooms','$housestatus','$owner','$toilet','$water','$pid')";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript"> 
        window.location = "error.php";
        </script>';
	}else{
		echo '<script language="javascript" type="text/javascript"> 
        window.location = "expenses.php?pid='.$pid.'";
        </script>';
		
	}
?>