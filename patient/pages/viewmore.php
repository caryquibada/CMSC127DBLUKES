
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Luke Foundation, Inc.</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <script src="../pages/js/jquery.min.js"></script>  
    <script src="../js/jquery.dataTables.min.js"></script>  
    <script src="../js/dataTables.bootstrap.min.js"></script>    
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script>
	function ConfirmDelete()
	{
  		var x = confirm("Are you sure you want to delete?");
  		if (x)
      		return true;
 		 else
  		  return false;
	}
	</script>

</head>

<body>

<div id="wrapper">
<nav class="navbar navbar-default navbar-static-fixed" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://localhost/Luke/"><img align = "left" class="img-responsive img-centered img-xs" style = "width:48px;" src="lukelogo.png">Luke Foundation, Inc. Database</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <a href="index.php">
                <i class="fa fa-home fa-fw"></i>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user-md fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="eye.php"><i class="fa fa-eye fa-fw"></i> Eye Check-up</a>
                </li>
                <li><a href="ear.php"><i class="fa fa-volume-up fa-fw"></i> Ear Check-up</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="newschool.php"><i class="fa fa-group fa-fw"></i> New Community</a>
                </li>
                <li><a href="new.php"><i class="fa fa-user fa-fw"></i> New Patient</a>
                </li>
                <li class="divider"></li>
                <li><a href="schools.php"><i class="fa fa-university fa-fw"></i> Community Records</a>
                </li>
                <li><a href="records.php"><i class="glyphicon glyphicon-folder-open fa-fw"></i> Community Patient Records</a>
                </li>
                <li><a href="recordns.php"><i class="fa fa-briefcase fa-fw"></i> Non-Community Patient Records</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-plus fa-fw"></i> New <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="newschool.php"><i class="fa fa-group fa-fw"></i> New Community</a>
                        </li>
                        <li>
                            <a href="new.php"><i class="fa fa-user fa-fw"></i> New Patient</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user-md fa-fw"></i>  Check up<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="eye.php"><i class="fa fa-eye fa-fw"></i> Eye Check-up</a>
                        </li>
                        <li>
                           <a href="ear.php"><i class="fa fa-volume-up fa-fw"></i> Ear Check-up</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-archive fa-fw"></i> Records<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="schools.php"><i class="fa fa-group fa-fw"></i> Community Records</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-open-o fa-fw"></i> Patient Records<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="records.php"><i class="fa fa-graduation-cap fa-fw"></i> Community Patient</a>
                                </li>
                                <li>
                                    <a href="recordns.php"><i class="fa fa-briefcase fa-fw"></i> Non-Community Patient</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-camera fa-fw"></i>  Photos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="addalbum.php"><i class="fa fa-plus fa-fw"></i> Add Album</a>
                        </li>
                        <li>
                           <a href="viewalbum.php"><i class="fa fa-eye fa-fw"></i> View Album</a>
                        </li>
						<li>
                           <a href="addgallery.php"><i class="fa fa-plus fa-fw"></i> Add Gallery</a>
                        </li>
						<li>
                           <a href="viewgallery.php"><i class="fa fa-eye fa-fw"></i> View Gallery</a>
                        </li>
						<li>
                           <a href="picture.php"><i class="fa fa-camera-retro fa-fw"></i> View Pictures</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
            <br>
            <h3>Family Composition</h3>
            <?php $pid=$_GET['pid'];
                    $connect = mysqli_connect('localhost','root','');
                    
                    if(!$connect){
                        echo 'No connection to server';
                    }
                    if(!mysqli_select_db($connect,'lukedb')){
                        echo 'Database "lukedb" is not selected';
                    }
                    $query="SELECT * FROM FAMILY WHERE PATIENT_ID=$pid";
                    $result=mysqli_query($connect,$query);
                    echo "<div class=\"table-responsive\"><table id=\"notStudent\" class=\"table table-hover table-striped\"><thead><tr>
                    <td>Name</td><td>Relationship</td><td>Age</td><td>Sex</td><td>Civil Status</td><td>Educational Attainment</td><td>Occupation</td><td>Remarks</td></tr></thead><tbody>";
                    while($row=mysqli_fetch_array($result)){
                        echo '<tr><td>'.$row['family_name'].'</td><td>'.$row['relationship'].'</td><td>'.$row['age'].'</td><td>'.$row['sex'].'</td><td>'.$row['civil_status'].'</td><td>'.$row['educational_attainment'].'</td><td>'.$row['occupation'].'</td><td>'.$row['remark'].'</td></tr>';
                    }
            ?>
            </tbody>
            </table>
        
            </div>
            <div class="col-lg-12">
            <?php
            $query="SELECT* FROM EXTRA WHERE PATIENT_ID=$pid";
            $result=mysqli_query($connect,$query);
            $array=mysqli_fetch_array($result);
             echo '
                <h3>Problem Presented</h3>
                    <p>'.$array['problem_presented'].'</p>
                
                <h3>Historical Background</h3>
                    <p>'.$array['hist_background'].'</p>';
            echo "<div class=\"table-responsive\"><table id=\"notStudent\" class=\"table table-hover table-striped\"><tr>
            <td>Number of</td><td>Occupants</td><td>Floors</td><td>Rooms</td></tr>
            <tr><td></td><td>".$array['no_occupants']."</td><td>".$array['no_floors']."</td><td>".$array['no_rooms']."</td></tr>
            <tr><td>House Status</td><td>Ownership of House</td><td>Type of Toilet</td><td>Source of Water</td></tr>
            <tr><td>".$array['status_house']."</td><td>".$array['ownership']."</td><td>".$array['type_toilet']."</td><td>".$array['source_water']."</td></tr>
            </table></div>"
            ?>
            </div>
            <div class="col-lg-12">
            <h3>Expenses</h3>
            <?php
            $query="SELECT* FROM EXPENSES WHERE PATIENT_ID=$pid";
            $result=mysqli_query($connect,$query);
            $expensesarray=mysqli_fetch_array($result);
            echo "<div class=\"table-responsive\"><table id=\"notStudent\" class=\"table table-hover table-striped\"><tr>
            <td>Electric Bill</td><td>Food</td><td>Fuel</td><td>Rent</td><td>Water</td><td>Transportation</td><td>Education</td><td>Clothing</td><td>Medical</td><td>Cellphone Load</td><td>Others</td></tr>
            <tr><td>".$expensesarray['electric']."</td><td>".$expensesarray['food']."</td><td>".$expensesarray['fuel']."</td><td>".$expensesarray['rent']."</td><td>".$expensesarray['water']."</td><td>".$expensesarray['transportation']."</td><td>".$expensesarray['education']."</td><td>".$expensesarray['clothing']."</td><td>".$expensesarray['medical']."</td><td>".$expensesarray['cellphoneload']."</td><td>".$expensesarray['others']."</td></tr></table></div>";
            ?>
            </div>
            <h3>Provider of Client's needs</h3>
            <div class="col-lg-12">
            <?php
            $query="SELECT* FROM PROVIDER WHERE PATIENT_ID=$pid";
            $result=mysqli_query($connect,$query);
            $providerarray=mysqli_fetch_array($result);
            echo "<div class=\"col-lg-3\"><h4>Name</h4>".$providerarray['name']."</div><div class=\"col-lg-3\"><h4>Occupation</h4>".$providerarray['occu']."</div><div class=\"col-lg-3\"><h4>Relationship</h4>".$providerarray['relationship']."</div><div class=\"col-lg-3\"><h4>Total Income</h4><br>".$providerarray['income']."</div><br><br>
            <div class=\"col-lg-3\"><h4>Needs Provided</h4>".$providerarray['needs_provided']."</div><div class=\"col-lg-3\"><h4>Name of Agency</h4>".$providerarray['donor_name']."</div><div class=\"col-lg-3\"><h4>NGO? or GO?</h4>".$providerarray['affiliation']."</div><div class=\"col-lg-3\"><h4>Services Provided</h4>".$providerarray['services_provided']."</div><br><div class=\"col-lg-12\"><h4>Family Income</h4><p>Family Income is ".$providerarray['total_income']."</p></div>";
            ?>
            </div>
            <div class="col-lg-12">
            <?php
            $query="SELECT* FROM EYE_PLAN WHERE PATIENT_ID=$pid";
            $query1="SELECT* FROM EAR_PLAN WHERE PATIENT_ID=$pid";
            $result=mysqli_query($connect,$query);
            $result1=mysqli_query($connect,$query1);
            $array=mysqli_fetch_array($result);
            $array1=mysqli_fetch_array($result1);
            if(!empty($array['visually_impared'])){
            echo "<h3>Visually Impaired</h3><h4>".$array['visually_impared']."</h4><h3>Cause of Disability</h3><h4>".$array['cause_disability']."</h4><h3>Plan of Action <a href=\"editeyepoa.php?pid=$pid\">Edit</a></h3><div class=\"table-responsive\"><table id=\"notStudent\" class=\"table table-hover table-striped\"><tr>
            <td>Intervention</td><td>Target Date</td><td>Remarks</td></tr><tr>
            <td>Medical Consultation/Assessment</td><td>".$array['medicaldate']."</td><td>".$array['medical']."</td></tr><tr>
            <td>CP Clearance</td><td>".$array['cpclearancedate']."</td><td>".$array['cpclearance']."</td></tr><tr>
            <td>Surgery</td><td>".$array['surgerydate']."</td><td>".$array['surgery']."</td></tr><tr>
            <td>Others</td><td>".$array['othersdate']."</td><td>".$array['others']."</td></tr><tr></table>
            <h3>Assessment</h3><p>".$array['assement']."</p><br>
            <h3>Confirmed</h3><p>".$array['confirmed']."</p><h3>Interviewed by</h3><p>".$array['interviewed']."</p>
            <br><br><br><br><br><br><br><br>	";
            }else{
               echo "<h3>Plan of Action <a href=\"editearpoa.php?pid=$pid\">Edit</a></h3><div class=\"table-responsive\"><table id=\"notStudent\" class=\"table table-hover table-striped\"><tr>
                <td>Intervention</td><td>Target Date</td><td>Remarks</td></tr><tr>
                <td>Medical Consultation/Assessment</td><td>".$array1['medicaldate']."</td><td>".$array1['medical_consult']."</td></tr><tr>
                <td>CP Clearance</td><td>".$array1['cpdate']."</td><td>".$array1['cpclearance']."</td></tr><tr>
                <td>Admission</td><td>".$array1['admissiondate']."</td><td>".$array1['admission']."</td></tr><tr>
                <td>Surgery</td><td>".$array1['surgerydate']."</td><td>".$array1['surgery']."</td></tr><tr>
                <td>Discharge</td><td>".$array1['dischargedate']."</td><td>".$array1['discharge']."</td></tr><tr>
                <td>Followup</td><td>".$array1['followupdate']."</td><td>".$array1['followup']."</td></tr><tr>
                <td>Others</td><td>".$array1['othersdate']."</td><td>".$array1['others']."</td></tr><tr></table>
                <h3>Assessment</h3><p>".$array1['assessment']."</p><br>
                <h3>Confirmed</h3><p>".$array1['confirmed']."</p><h3>Interviewed by</h3><p>".$array1['interviewed']."</p> <br><br><br><br><br><br><br><br>	";
            }
            ?>
            </div>
            </div>
           
       </div>
       		
    </div>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<script>
</script>