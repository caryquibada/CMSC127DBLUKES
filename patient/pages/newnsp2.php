<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Luke Foundation, Inc.</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
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
<!-- END UI THEME EDIT BELOW-->

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Patient Information</h1>
                    <?php
                        if(!empty($_GET)){
                            $id=$_GET['id'];
                            if($id=='0'){
                                echo "<div class=\"alert alert-warning col-lg-8 alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">OK</span></button>
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>";
                            }
                            if($id=='1'){
                                echo "<div class=\"alert alert-success col-lg-8 alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">OK</span></button>
                                    <strong>Success!</strong> Patient inserted.
                                    </div>";
                            }
                        }
                    ?>
            </div>
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa"></i> New Patient
                    </div>
                    <div class="panel-body">
                        <form role="form" action="add.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <div class="form-group col-lg-12">
									<label>Community Patient?</label>
                                    </br>
									<input type="radio" name="student" value="student" onclick="document.getElementById('none').selected=true;document.getElementById('notstudent').disabled=true;document.getElementById('notstudent1').disabled=true;document.getElementById('notstudent2').disabled=true;document.getElementById('notstudent3').disabled=true;document.getElementById('notstudent4').disabled=true;document.getElementById('notstudent5').disabled=true;document.getElementById('notstudent6').disabled=true;document.getElementById('notstudent7').disabled=true;document.getElementById('notstudent8').disabled=true;document.getElementById('notstudent9').disabled=true;document.getElementById('school').disabled=false;" checked>
									Yes
                                    </br>
									<input type="radio" name="student" value="student" onclick="document.getElementById('none').selected=false;document.getElementById('notstudent').disabled=false;document.getElementById('notstudent1').disabled=false;document.getElementById('notstudent2').disabled=false;document.getElementById('notstudent3').disabled=false;document.getElementById('notstudent4').disabled=false;document.getElementById('notstudent5').disabled=false;document.getElementById('notstudent6').disabled=false;document.getElementById('notstudent7').disabled=false;document.getElementById('notstudent8').disabled=false;document.getElementById('notstudent9').disabled=false;document.getElementById('school').disabled=true;">
									No
									</input>
									</br>
                                    </br>
                                    <label>Community Name:</label>
									<select class="form-control" name="school_id" id="school">
								        <?php
                                            $connect = mysqli_connect('localhost','root','');
                                            if(!$connect){
                                                echo 'No connection to server';
                                            }
                                            if(!mysqli_select_db($connect,'lukedb')){
                                                echo 'Database "lukedb" is not selected';
                                            }
                                            $query="SELECT * FROM  school";
                                            $menu= " ";
                                            $result=mysqli_query($connect,$query);
                                            while($row=mysqli_fetch_array($result)){
                                                unset($f1);
                                                $f1=$row['school_name'];
                                                $f2=$row['school_id'];
                                                if(strcmp($f1,'-')){
                                                    $menu =$menu."<option value=$f2 id=\"none\" selected=\"false\">".$f1."</option>";
                                                }else{
                                                    $menu =$menu."<option value=$f2 selected>".$f1."</option>";
                                                }
                                               
                                            }
                                            echo $menu;
										?>
									</select>
                                </div>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Name:</label>
                                <input class="form-control" placeholder="Last Name" name="lastname" type="text" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>.</label>
                                <input class="form-control" placeholder="First Name" name="firstname" type="text" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>.</label>
                                <input class="form-control" placeholder="Middle Initial" name="middlename" type="text" maxlength="1">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Sex</label>
                                <div class="radio">
                                    <label><input type="radio" name="optionsRadios" id="optionsRadios1" value="m" required> Male  </label>
                                </br>
                                    <label><input type="radio" name="optionsRadios" id="optionsRadios2" value="f"> Female</label>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Age:</label>
                                <input class="form-control" placeholder="Age" name="age" type="number" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Present Address:</label>
                                <input class="form-control" placeholder="Present Address" name="praddress" type="text" id="notstudent" disabled>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Provincial Address:</label>
                                <input class="form-control" placeholder="Provincial Address" name="address" type="text" id="notstudent1" disabled>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-lg-12">
                                    <label>Civil Status:</label>
                                   <select class="form-control" name="civilstatus" id="notstudent9" disabled>
										<option value="">-</option>
                                        <option value="Single"> Single</option>
                                        <option value="Married"> Married</option>
										<option value="Divorced">Divorced</option>
                                        <option value="Widowed"> Widowed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Birth date:</label>
                                <input class="form-control" placeholder="Birth date" type="date" name="birthdate" id="notstudent2" disabled>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Birth place:</label>
                                <input class="form-control" placeholder="Birth place"type="text" name="birthplace" id="notstudent3" value="" disabled>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Religion:</label>
                                <input class="form-control" placeholder="Religion" type="text" name="preligion" id="notstudent4" disabled>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Occupation:</label>
                                <input class="form-control" placeholder="Occupation" type="text" name="occupation" id="notstudent5" disabled>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-lg-12">
                                    <label>Income (Monthly):</label>
                                    <select class="form-control" name="monthlyincome" id="notstudent6" disabled>
                                        <option value="0-10,000"> 0 - 10,000</option>
                                        <option value="10,001-30,000"> 10,001 - 30,000</option>
                                        <option value="30,001-50,000"> 30,001 - 50,000</option>
                                        <option value="50,001-100,000"> 50,001 - 100,000</option>
                                        <option value="100,001-300,000"> 100,001 - 300,000</option>
                                        <option value="300,001-500,000"> 300,001 - 500,000</option>
                                        <option value="500,000+"> 500,000+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Contact No.:</label>
                                <input class="form-control" placeholder="Name" type="text" name="contactnumber" id="notstudent7" disabled>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-lg-12">
                                    <label>Educational Attainment:</label>
                                    <select class="form-control" name="formEduc" id="notstudent8" disabled>
                                        <option> Elementary</option>
                                        <option> Highschool </option>
                                        <option> Highschool Graduate</option>
                                        <option> College</option>
										<option> College Graduate</option>
										<option> No read, No write</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
						<div class="pull-right">
                            <div class="btn-group">
                                <button type="next" class="btn btn-outline btn-primary btn-xs" onclick ="document.getElementById('notstudent').disabled=false;document.getElementById('notstudent1').disabled=false;document.getElementById('notstudent2').disabled=false;document.getElementById('notstudent3').disabled=false;document.getElementById('notstudent4').disabled=false;document.getElementById('notstudent5').disabled=false;document.getElementById('notstudent6').disabled=false;document.getElementById('notstudent7').disabled=false;document.getElementById('notstudent8').disabled=false;document.getElementById('notstudent9').disabled=false;document.getElementById('school').disabled=false;">
                                    SAVE
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
