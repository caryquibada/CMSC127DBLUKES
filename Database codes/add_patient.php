<html>
<head>
<title>Insert Patient Data to MYSQL Database Using PHP</title>
</head>
<body>
	<form action="add.php" method="post">
		First Name: <input type="text" name="firstname">
		<br/>
		Last Name: <input type="text" name="lastname">
		<br/>
		Sex:
			<select name="formSex">
			<option value="">Select...</option>
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select>

		Address: <input type="text" name="address">
		<br/>
		Civil Status: <input type="text" name="civilstatus">
		<br/>
		Religion: <input type="text" name="religion">
		<br/>
		Occupation: <input type="text" name="occupation">
		<br/>
		Contact Number: <input type="text" name="contactnumber">
		<br/>
		Educational Attainment:
			<select name="formEduc">
			<option value="">Select...</option>
			<option value="Elementary">Elementary</option>
			<option value="Elementary Graduate">Elementary Graduate</option>
			<option value="Highschool">Highschool</option>
			<option value="Highschool Graduate">Highschool Graduate</option>
			<option value="College">College</option>
			<option value="College Graduate">College Graduate</option>
		<br/>
		<input type="submit" value="Insert">
	</form>
</body>
</html>