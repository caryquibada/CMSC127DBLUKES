<html>
<body>
<?php
$id = $_GET['id'];
$connect = mysqli_connect('localhost','root','');
if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
	}

// sql to delete a record
$sql = "DELETE FROM patient WHERE patient_id = $id"; 

if (mysqli_query($connect, $sql)) {
	mysqli_close($connect);
    header('Location: records.php'); 
    exit;
} else {
    echo '<script language="javascript" type="text/javascript"> 
	window.location = "error.php";
	</script>';
}
?>
</body>
</html>