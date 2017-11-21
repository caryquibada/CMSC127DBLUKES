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
            </div>
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa"></i> Eye Plan of Action
                    </div>
                    <div class="panel-body">
                    <?php $pid=$_GET['pid'];?>
                        <form role="form" action="<?php echo "addeyeplan.php?pid=$pid" ?>" method="post">
                        <fieldset>
                        <div class="col-lg-12">
                        <label> Visually Impaired </label>
                        <input type="radio" name="visual" value="Blind">Blind</input>
                        <input type="radio" name="visual" value="Partially Blind">Partially Blind</input>
                        <input type="radio" name="visual" value="Low Vision">Low Vision</input><br>
                        </div>
                        <div class="col-lg-12">
                        <br>
                        <label>Cause of Disability</label>
                        <input type="radio" name="cause" onchange="other.disabled=true" value="Inborn">Inborn</input>
                        <input type="radio" name="cause" onchange="other.disabled=true" value="Accident">Accident</input>
                        <input type="radio" name="cause" onchange="other.disabled=true" value="Heriditary">Hereditary</input>
                        <input type="radio" name="cause" onchange="other.disabled=false">Others</input>
                        <input class="form-control" type="text" name="cause" id="other" disabled></input><br><br>
                        </div>
                        <div class="col-lg-12">
                        
                            <div class="col-lg-6">
                            <label>Medical Consultation</label>
                            <label>Date</label>
                            <input class="form-control" type="date" name="medicaldate"></input>
                            </div>
                            
                            <div class="col-lg-6">
                            <label>Medical Consultation</label>
                            <label>Remark</label>
                            <input class="form-control" type="text" name="medical"></input>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        
                            <div class="col-lg-6">
                            <label>CP Clearance</label>
                            <label>Date</label>
                            <input class="form-control" type="date" name="cpdate"></input>
                            </div>
                            
                            <div class="col-lg-6">
                            <label>CP Clearance</label>
                            <label>Remark</label>
                            <input class="form-control" type="text" name="cp"></input>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        
                            <div class="col-lg-6">
                            <label>Surgery</label>
                            <label>Date</label>
                            <input class="form-control" type="date" name="surgerydate"></input>
                            </div>
                            
                            <div class="col-lg-6">
                            <label>Surgery</label>
                            <label>Remark</label>
                            <input class="form-control" type="text" name="surgery"></input>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                       
                            <div class="col-lg-6">
                            <label>Others</label>
                            <label>Date</label>
                            <input class="form-control" type="date" name="othersdate[]"></input>
                            </div>
                            
                            <div class="col-lg-6">
                            <label>Others</label>
                            <label>Remark</label>
                            <input class="form-control" type="text" name="othersremarks[]"></input>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                        
                            <div class="col-lg-6">
                            <label>Others</label>
                            <label>Date</label>
                            <input class="form-control" type="date" name="othersdate[]"></input>
                            </div>
                            
                            <div class="col-lg-6">
                            <label>Others</label>
                            <label>Remark</label>
                            <input class="form-control" type="text" name="othersremarks[]"></input>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                        
                            <div class="col-lg-6">
                            <label>Others</label>
                            <label>Date</label>
                            <input class="form-control" type="date" name="othersdate[]"></input>
                            </div>
                            
                            <div class="col-lg-6">
                            <label>Others</label>
                            <label>Remark</label>
                            <input class="form-control" type="text" name="othersremarks[]"></input>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <br>
                        <label>Worker's Assessment and Recommendation</label>
                        <textarea class="form-control" rows="4" name="assessment"></textarea>
                        </div>
                        <div class="col-lg-12">
                        <br>
                            <div class="col-lg-6">
                            <label>Confirmed</label>
                            <input type="text" class="form-control col-lg-6" name="confirmed"></input>
                            </div>
                            <div class="col-lg-6">
                            <label>Interviewed by</label>
                            <input type="text" class="form-control col-lg-6" name="interviewed"></input>
                            </div>
                        </div>
                        </fieldset>
						<div class="pull-right">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-outline btn-primary btn-xs">
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
    <script>
    function showForms(){
        var name=document.getElementById("hidden");
        var clName=name.className;
        if(clName=="show"){
            name.className="hidden";
        }else{
            name.className="show";
        }
    }
    </script>
    <script>
    function hideSchool(){
        var name=document.getElementById("show");
        var clName=name.className;
        if(clName=="hidden"){
            name.className="show";
        }else{
            name.className="hidden";
        }
    }
    </script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
