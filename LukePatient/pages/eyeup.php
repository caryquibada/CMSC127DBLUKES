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
        <a class="navbar-brand" href="index.php"><img align = "left" class="img-responsive img-centered img-xs" style = "width:23px;" src="lukelogo.png"> Luke Foundation, Inc. Database</a>
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
            </ul>
        </div>
    </div>
</nav>
</div>
<!-- END UI THEME EDIT BELOW-->

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                  
                <h1 class="page-header">Eye Check-up </h1>
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
                                    <strong>Success!</strong> Eye Updated.
                                    </div>";
                            }
                        }
                    ?>
				<div class="form-group col-lg-12">
                <div class="form-group col-lg-12">
                <label>Patient:</label>
                     <?php
                         $connect = mysqli_connect('localhost','root','');
                             if(!$connect){
                                echo 'No connection to server';
                             }
                             if(!mysqli_select_db($connect,'lukedb')){
                                 echo 'Database "lukedb" is not selected';
                              }
                             $query="SELECT * FROM  patient where patient_id = $_GET[id]";
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
                            $id = $_GET['id'];
                            $connect = mysqli_connect('localhost','root','');
                            echo "<form role=\"form\" action=\"updateeye.php?id= $id\" method=\"post\">";
                        if(!$connect){
                            echo 'No connection to server';
                        }
                        if(!mysqli_select_db($connect,'lukedb')){
                            echo 'Database "lukedb" is not selected';
                        }  
                        $sql = "SELECT * FROM eye WHERE patient_id = $id"; 
                        $result=mysqli_query($connect,$sql);
                            while ($row=mysqli_fetch_array($result)) {
                                $rem = $row['eye_remark'];
                                $lva = $row['lvisual_acuity'];  
                                $rva = $row['rvisual_acuity']; 
                                $lwp = $row['lwith_pinhole']; 
                                $rwp = $row['rwith_pinhole']; 
                                $lrx = $row['l_rx']; 
                                $rrx = $row['r_rx']; 
                                $lpd = $row['pd']; 
                                
                            }echo"
							</select>
							</div>
							<div class=\"form-group col-lg-12\">
                                <label>Eye Remark:</label>
                                <textarea class=\"form-control\" rows=\"3\" name=\"eyeremark\">$rem</textarea>
                            </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa\"></i> Left Eye
                </div>
                <div class=\"panel-body\">
                    <fieldset>
                            <div class=\"form-group col-lg-6\">
                                <label>Visual Acuity:</label>
								<div class=\"form-group input-group\">
								<span class=\"input-group-addon\">20/</span>
								<select class=\"form-control\" name=\"visualacuityl\">
									<option value=\"10\">10</option>
									<option value=\"12.5\">12.5</option>
									<option value=\"16\">16</option>
									<option value=\"20\" selected>20</option>
									<option value=\"25\">25</option>
									<option value=\"32\">32</option>
									<option value=\"40\">40</option>
									<option value=\"50\">50</option>
									<option value=\"63\">63</option>
									<option value=\"80\">80</option>
									<option value=\"100\">100</option>
									<option value=\"125\">125</option>
									<option value=\"160\">160</option>
									<option value=\"200\">200</option>
								</select>
								</div>
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>With Pinhole:</label>
								<div class=\"form-group input-group\">
                                <span class=\"input-group-addon\">20/</span>
								<select class=\"form-control\" name=\"withpinholel\">
                                    <option value=\"10\">10</option>
                                    <option value=\"12.5\">12.5</option>
                                    <option value=\"16\">16</option>
                                    <option value=\"20\" selected>20</option>
                                    <option value=\"25\">25</option>
                                    <option value=\"32\">32</option>
                                    <option value=\"40\">40</option>
                                    <option value=\"50\">50</option>
                                    <option value=\"63\">63</option>
                                    <option value=\"80\">80</option>
                                    <option value=\"100\">100</option>
                                    <option value=\"125\">125</option>
                                    <option value=\"160\">160</option>
                                    <option value=\"200\">200</option>
								</select>
								</div>
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>RX:</label>
                                <input class=\"form-control\"  name=\"rxl\" value=$lrx>
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>PD:</label>
                                <input class=\"form-control\" name=\"pdl\" value=$lpd>
                            </div>
                    </fieldset>
                </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa\"></i> Right Eye
                </div>
                <div class=\"panel-body\">
                    <fieldset>
                        <div class=\"form-group col-lg-6\">
                                <label>Visual Acuity:</label>
								<div class=\"form-group input-group\">
								<span class=\"input-group-addon\">20/</span>
								<select class=\"form-control\" name=\"visualacuityr\">
                                <option value=\"10\">10</option>
                                <option value=\"12.5\">12.5</option>
                                <option value=\"16\">16</option>
                                <option value=\"20\" selected>20</option>
                                <option value=\"25\">25</option>
                                <option value=\"32\">32</option>
                                <option value=\"40\">40</option>
                                <option value=\"50\">50</option>
                                <option value=\"63\">63</option>
                                <option value=\"80\">80</option>
                                <option value=\"100\">100</option>
                                <option value=\"125\">125</option>
                                <option value=\"160\">160</option>
                                <option value=\"200\">200</option>
								</select>
								</div>
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>With Pinhole:</label>
								<div class=\"form-group input-group\">
                                <span class=\"input-group-addon\">20/</span>
								<select class=\"form-control\" name=\"withpinholer\">
                                <option value=\"10\">10</option>
                                <option value=\"12.5\">12.5</option>
                                <option value=\"16\">16</option>
                                <option value=\"20\" selected>20</option>
                                <option value=\"25\">25</option>
                                <option value=\"32\">32</option>
                                <option value=\"40\">40</option>
                                <option value=\"50\">50</option>
                                <option value=\"63\">63</option>
                                <option value=\"80\">80</option>
                                <option value=\"100\">100</option>
                                <option value=\"125\">125</option>
                                <option value=\"160\">160</option>
                                <option value=\"200\">200</option>
								</select>
								</div>
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>RX:</label>
                                <input class=\"form-control\" name=\"rrx\" value=$rrx >
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>PD:</label>
                                <input class=\"form-control\"  name=\"pdr\"  value= $lpd>
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
                    </div>
             </form>
             <br/><br/><br/>
             <br/><br/><br/>
             <br/><br/><br/>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>