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
		Middle Initial: <input type="text" name="middlename">
		<br/>
		Age: <input type="text" name="age">
		<br/>
		Sex:
			<select name="formSex">
			<option value="">Select...</option>
			<option value="m">Male</option>
			<option value="f">Female</option>
		</select>
		Present Address: <input type="text" name="praddress">
		<br/>
		Provincial Address: <input type="text" name="address">
		<br/>
		Civil Status: <input type="text" name="civilstatus">
		<br/>
		Birthdate: <input type="date" name="birthdate">
		<br/>
		Birthplace: <input type="text" name="birthplace">
		<br/>
		Religion: <input type="text" name="preligion">
		<br/>
		Occupation: <input type="text" name="occupation">
		<br/>
		Monthly Income: <input type="text" name="monthlyincome">
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