<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<met<html lang="en">

<head>
<a name="author" content="">
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
                   
            <h1 class="page-header">Ear Check-up</h1>
            <?php
                        if(!empty($_GET['status'])){
                            $status=$_GET['status'];
                            if($status=='0'){
                                echo "<div class=\"alert alert-warning col-lg-8 alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">OK</span></button>
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>";
                            }
                            if($status=='1'){
                                echo "<div class=\"alert alert-success col-lg-8 alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">OK</span></button>
                                    <strong>Success!</strong> Ear updated.
                                    </div>";
                            }
                        }
                    ?>
            <div class="form-group col-lg-12">
            <label>Patient:</label>
				 <?php
                     $connect = mysqli_connect('localhost','root','');
                     $id=$_GET['pid'];
                     $school=$_GET['school'];
                         if(!$connect){
                            echo 'No connection to server';
                         }
                         if(!mysqli_select_db($connect,'lukedb')){
                             echo 'Database "lukedb" is not selected';
                          }
                         $query="SELECT * FROM  patient where patient_id = $id";
                         $menu= " ";
                         $result=mysqli_query($connect,$query);
                        while($row=mysqli_fetch_array($result)){
                        unset($f1);
                            $f3=$row['patient_lname'];
						    $f1=$row['patient_fname'];
                            $f2=$row['patient_minitial'];
                            $menu ="<label>$f3, $f1 $f2.</label>";
						}
						echo $menu;
			

                        $connect = mysqli_connect('localhost','root','');
                        echo "<form role=\"form\" action=\"updateear.php?pid=$id&school=$school\" method=\"post\">";
                    if(!$connect){
		                echo 'No connection to server';
	                }
                	if(!mysqli_select_db($connect,'lukedb')){
	                	echo 'Database "lukedb" is not selected';
                    }  
                    $sql = "SELECT * FROM ear WHERE patient_id = $id"; 
                    $result=mysqli_query($connect,$sql);
                      while ($row=mysqli_fetch_array($result)) {
                       $lear =$row['left_ear'];
                       $rear =$row['right_ear'];
                       $rem =$row['ear_remark'];
                     }
                echo
                   "</div>
                    <div class=\"form-group col-lg-12\">
                        <label>Ear Remark:</label>
                        <textarea class=\"form-control\" rows=\"3\" name=\"earremark\">$rem</textarea>
                    </div>
        </div>
        <div class=\"col-lg-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <i class=\"fa\"></i> Left Ear
            </div>
            <div class=\"panel-body\">
                <fieldset>
                    <div class=\"form-group col-lg-12\">
                        <label>Ear:</label>";
                        if(strcmp($lear,'NED')==0){
                            echo"<select name=\"leftear\" class=\"form-control\">
                            <option value=\"NED\" selected>NED</option>
                            <option value=\"IC\" >IC</option>
                            <option value=\"OM\">OM</option>
                        </select>";
                        }
                        else if(strcmp($lear,'IC')==0){
                            echo"<select name=\"leftear\" class=\"form-control\">
                            <option value=\"NED\">NED</option>
                            <option value=\"IC\"  selected >IC</option>
                            <option value=\"OM\">OM</option>
                        </select>";
                        }
                        else{
                            echo"<select name=\"leftear\" class=\"form-control\">
                            <option value=\"NED\">NED</option>
                            <option value=\"IC\" >IC</option>
                            <option value=\"OM\" selected>OM</option>
                        </select>";
                        }
                        echo"
                        <br/>
                    </div>
                </fieldset>
            </div>
        </div>
        </div>
        <div class=\"col-lg-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <i class=\"fa\"></i> Right Ear
            </div>
            <div class=\"panel-body\">
                <fieldset>
                    <div class=\"form-group col-lg-12\">
                        <label>Ear:</label>";
                        if(strcmp($rear,'NED')==0){
                            echo"<select name=\"rightear\" class=\"form-control\">
                            <option value=\"NED\" selected>NED</option>
                            <option value=\"IC\" >IC</option>
                            <option value=\"OM\">OM</option>
                        </select>";
                        }
                        else if(strcmp($rear,'IC')==0){
                            echo"<select name=\"rightear\" class=\"form-control\">
                            <option value=\"NED\">NED</option>
                            <option value=\"IC\"  selected >IC</option>
                            <option value=\"OM\">OM</option>
                        </select>";
                        }
                        else{
                            echo"<select name=\"rightear\" class=\"form-control\">
                            <option value=\"NED\">NED</option>
                            <option value=\"IC\" >IC</option>
                            <option value=\"OM\" selected>OM</option>
                        </select>";
                        }
                        echo"
                        <br/>
                    </div>";
                    ?>
                </fieldset>
            </div>
        </div>
        </div>
    </div>
    <div class="">
   
            <div class="btn-group">
                <button type="submit" class="btn btn-md btn-default">UPDATE</button>
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
