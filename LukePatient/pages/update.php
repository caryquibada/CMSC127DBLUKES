

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
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Patient Information</h1>
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
                                    <strong>Success!</strong> Patient updated.
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
                   <!--  <p>insert details here</p>                - - - - - - - - - - - - - - - - P A T I E N T  D E T A I L S  - - - - - - - - - - - - - - - -->
                   
                    <?php
                        $id = $_GET['id'];
                        $connect = mysqli_connect('localhost','root','');
                        echo "<form role=\"form\" action=\"updatesql.php?id=$id\" method=\"post\">";
                    if(!$connect){
		                echo 'No connection to server';
	                }
                	if(!mysqli_select_db($connect,'lukedb')){
	                	echo 'Database "lukedb" is not selected';
                	}
                    // sql to delete a record
                      $sql = "SELECT * FROM patient WHERE patient_id = $id"; 
                    $result=mysqli_query($connect,$sql);
                      while ($row=mysqli_fetch_array($result)) {
                        $f7=$row['patient_fname'];
                        $f6=$row['patient_minitial'];
                        $f3=$row['patient_lname'];
                        $f4=$row['age'];
                        $f5=$row['sex'];
                        $f17=$row['school_number'];
                        $f16=$row['patient_id'];
                     }
                      echo"
                      
                        <fieldset>
                            <div class=\"form-group\">
                                <div class=\"form-group col-lg-12\">
                                    <label>Community Name:</label>
                                    <select class=\"form-control\" name=\"school_id\" id=\"school\">";
                                    $query="SELECT * FROM  school";
                                    $menu= " ";
                                    $result=mysqli_query($connect,$query);
										while($row=mysqli_fetch_array($result)){
										unset($f1);
										$f1=$row['school_name'];
                                        $f2=$row['school_id'];
                                            if($f17==$f2){
                                                 $menu =$menu."<option value=$f2 selected>".$f1."</option>";
                                            }else if($f2!=1){
                                                $menu =$menu."<option value=$f2>".$f1."</option>";
                                            }
										}
							echo $menu;
							echo"
										</select>
                                </div>
                            </div>
                            <div class=\"form-group col-lg-5\">
                                <label>Last Name</label>
                                <input class=\"form-control\" placeholder=\"Last Name\" name=\"lastname\" type=\"text\" value=$f3 required=\"required\">
                            </div>
                            <div class=\"form-group col-lg-5\">
                                <label>First Name</label>
                                <input class=\"form-control\" placeholder=\"First Name\" name=\"firstname\" type=\"text\" value=$f7 required=\"required\">
                            </div>
                            <div class=\"form-group col-lg-2\">
                                <label>MI</label>
                                <input class=\"form-control\" placeholder=\"Middle Initial\" name=\"middlename\" type=\"text\" required=\"required\" maxlength=\"1\" value=$f6 >
                            </div>";
                            if(strcmp($f5,'m')==0){
                            echo"
                            <div class=\"form-group col-lg-6\">
                                <label>Sex</label>
                                <div class=\"radio\">
                                    <label><input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"m\" checked required=\"required\"> Male  </label>
                                </br>
                                    <label><input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"f\"> Female</label>
                                </div>
                            </div>";
                            }else{
                                echo "<div class=\"form-group col-lg-6\">
                                <label>Sex</label>
                                <div class=\"radio\">
                                    <label><input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"m\" required> Male  </label>
                                </br>
                                    <label><input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" checked value=\"f\"> Female</label>
                                </div>
                            </div>";
                            }
                            echo
                            "<div class=\"form-group col-lg-6\">
                                <label>Age:</label>
                                <input class=\"form-control\" placeholder=\"Age\" name=\"age\" type=\"number\" value=$f4 required>
                            </div>";

                            ?>
                        </fieldset>
						<div class="pull-right">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-outline btn-primary btn-xs" >
                                UPDATE                         <!-- - - - - - - - - - - - - - - - - - - S A V E  B U T T O N - - - - - - - - - - - - - - - - - - -->
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