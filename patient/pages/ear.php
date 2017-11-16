<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
                <h1 class="page-header">Ear Check-up</h1>
                <?php
                        if(!empty($_GET)){
                            $id=$_GET['id'];
                            if($id=='0'){
                                echo "<div class=\"alert alert-warning col-lg-8 alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">OK</span></button>
                                    <strong>Error!</strong> Check your inputs.
                                    </div>";
                            }
                            if($id=='1'){
                                echo "<div class=\"alert alert-success col-lg-8 alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">OK</span></button>
                                    <strong>Success!</strong> Eye information inserted.
                                    </div>";
                            }
                        }
                    ?>
				<div class="form-group col-lg-12">
				    <form role="form" action="addEar.php" method="post">
                        <label>Patient:</label>
                        <select class="form-control" name="patient_id" id="patient">
                        <?php
                            $connect = mysqli_connect('localhost','root','');
                            if(!$connect){
                                echo 'No connection to server';
                            }           
                            if(!mysqli_select_db($connect,'lukedb')){
                                echo 'Database "upcmscdb" is not selected';
                            }
                            $query="SELECT * FROM  patient p,school e WHERE p.school_number=e.school_id AND e.activity=\"Ear Screening\" ";
                            $menu= " ";
                            $result=mysqli_query($connect,$query);
                            while($row=mysqli_fetch_array($result)){
                                unset($f1);
                                $f1=$row['patient_fname'];
                                $f2=$row['patient_id'];
                                $f3=$row['patient_lname'];
                                $earquery="SELECT * FROM ear where patient_id=$f2";
                                $resultear=mysqli_query($connect,$earquery);
                                $ear=mysqli_fetch_array($resultear);
                                $leftear=$ear['left_ear'];
                                $pid=$_GET['pid'];
                                if(empty($leftear)&&($f2==$id)){
                                    $menu =$menu."<option value=$f2 selected>".$f1." ".$f3."</option>";
                                }else if(empty($leftear)&&$f3!=$id){
                                    $menu =$menu."<option value=$f2>".$f1." ".$f3."</option>";
                                }
                            }
                            echo $menu;
                        ?>
                        </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Ear Remark:</label>
                            <textarea class="form-control" rows="3" name="earremark"></textarea>
                        </div>
            </div>
            <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa"></i> Left Ear
                </div>
                <div class="panel-body">
					<fieldset>
                        <div class="form-group col-lg-12">
                            <label>Ear:</label>
                            <select name="leftear" class="form-control">
                                <option value="NED">NED</option>
                                <option value="IC">IC</option>
                                <option value="OM">OM</option>
                            </select>
							<br/>
                        </div>
                    </fieldset>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa"></i> Right Ear
                </div>
                <div class="panel-body">
					<fieldset>
						<div class="form-group col-lg-12">
                            <label>Ear:</label>
                            <select name="rightear" class="form-control">
                                <option value="NED">NED</option>
                                <option value="IC">IC</option>
                                <option value="OM">OM</option>
                            </select>
                            <br/>
                        </div>
                    </fieldset>
                </div>
            </div>
            </div>
        </div>
        <div class="">
                <div class="btn-group">
                    <button type="submit" class="btn btn-md btn-default">SAVE</button>
                </div>
                </form>
                <br/><br/><br/>
                <br/><br/><br/>
                <br/><br/><br/>
                <br/><br/><br/>
                <br/><br/><br/>
                <br/><br/><br/>
            </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
