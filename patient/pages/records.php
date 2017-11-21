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
    <link rel="stylesheet" href="../js/dataTables.bootstrap.min.css" />  
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
    body { padding-top: 55px; }
    table {
    table-layout: auto;
    word-wrap: break-word;
}
 .sidebar {
    height:100%
}
    </style>
</head>

<body>
<div id="wrapper">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
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
                <li><a href="ear.php"><i class="fa fa-deaf fa-fw"></i> Ear Check-up</a>
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
                           <a href="ear.php"><i class="fa fa-deaf fa-fw"></i> Ear Check-up</a>
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
        <ul class="nav nav-tabs">
        </br>
            <?php
            $connect = mysqli_connect('localhost','root','');
            if(!$connect){
                echo 'No connection to server';
            }
            if(!mysqli_select_db($connect,'lukedb')){
                echo 'Database "lukedb" is not selected';
            }
            $queryschool="SELECT* FROM SCHOOL WHERE SCHOOL_ID>1";
            $resultschool=mysqli_query($connect,$queryschool);
            if(empty($_GET['school'])){   
                echo "<li role=\"presentation\" class=\"active\"><a href=\"records.php\">Community Patient</a></li>";
            }else if(!empty($_GET['school'])){
                echo "<li role=\"presentation\" ><a href=\"records.php\">Community Patient</a></li>";
            }
            while($row=mysqli_fetch_array($resultschool)){
                $sid=$row['school_id'];
                $sname=$row['school_name'];
                if(!empty($_GET['school'])&&$_GET['school']!=$sid){
                    echo "<li role=\"presentation\" ><a href=\"records.php?school=$sid\">$sname</a></li>";
                }else if(!empty($_GET['school'])&&$_GET['school']==$sid){
                    echo "<li role=\"presentation\" class=\"active\" ><a href=\"records.php?school=$sid\">$sname</a></li>";
                } if(empty($_GET['school'])){
                    echo "<li role=\"presentation\"><a href=\"records.php?school=$sid\">$sname</a></li>";
                }
            }
           
            if(!empty($_GET['school'])){
                $school=$_GET['school'];
                $query="SELECT* FROM PATIENT where school_number=$school";
            }else{
                $school="";
                $query="SELECT* FROM PATIENT where school_number>1";
            }
            $result=mysqli_query($connect,$query);
            ?>     
            </ul>  
            <a href="summary.php" class="col-md-offset-11 btn btn-primary">
                Summary
            </a>
            <?php 
                     if(!empty($school)){
                        $querys="SELECT * FROM SCHOOL WHERE school_id=$school";
                        $result1=mysqli_query($connect,$querys);
                        $results=mysqli_fetch_array($result1);
                        $location=$results['location'];
                        $contact=$results['contact_person'];
                        $act=$results['activity'];
                        $datev=$results['date_visited'];
                    
                        echo "Location:$location <br/> Contact Person: $contact <br/> Activity: $act <br/> Date Visited: $datev<br/>";
                    }  
            ?>
            
            
                        <?php 
                        if(!empty($act)&&$act=="Ear Screening"){
                            echo  "<div class=\"table-responsive\">
                            <table id=\"main_table\" class=\"table table-striped table-bordered\">
                                <thead><tr>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>Middle Initial</td>
                            <td>Age</td>
                            <td>Sex</td>
                            <td>Ear Condition</td>
                            <td>Left Ear</td>
                            <td>Right Ear</td>
                            <td>Ear Remark</td>
                            <td>Remark</td>
                            <td>Action</td>
                            </tr>";
                        }else if(!empty($act)&&$act=="Eye Screening"){
                            echo  "<div class=\"table-responsive\">
                            <table id=\"main_table\" class=\"table table-striped table-bordered\"><tr>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>Middle Initial</td>
                            <td>Age</td>
                            <td>Sex</td>
                            <td>Eye Condition</td>
                            <td>Left V.A.</td>
                            <td>Right V.A</td>
                            <td>Left W/ P.</td>
                            <td>Right W/ P.</td>
                            <td>Left RX</td>
                            <td>Right RX</td>
                            <td>PD</td>
                            <td>Eye Remark</td>
                            <td>Remark</td>
                            <td>Action</td>
                            </tr>";
                        }else if(empty($act)){
                            echo "<strong>NOTE: YOU CANNOT EDIT EAR AND EYE CONDITION AT THIS TABLE. GO TO THE INDIVIDUAL SCHOOL TABLE OR IN THE EAR OR EYE CHECK UP IN THE NAVIGATION BAR ABOVE.</strong>
                            <div class=\"table-responsive\">
                            <table id=\"main_table\" class=\"table table-striped table-bordered\">
                            <thead>
                            <tr>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>Middle Initial</td>
                            <td>Age</td>
                            <td>Sex</td>
                            <td>Left Ear</td>
                            <td>Right Ear</td>
                            <td>Ear Remark</td>
                            <td>Left V.A.</td>
                            <td>Right V.A</td>
                            <td>Left W/ P.</td>
                            <td>Right W/ P.</td>
                            <td>Left RX</td>
                            <td>Right RX</td>
                            <td>PD</td>
                            <td>Eye Remark</td>
                            <td>Remark</td>
                            <td>Action</td>
                            </tr>
                            </thead>";
                        }else{
                            echo "<div class=\"table-responsive\">
                            <table id=\"main_table\" class=\"table table-striped table-bordered\">
                            <thead>
                            <tr>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>Middle Initial</td>
                            <td>Age</td>
                            <td>Sex</td>
                            <td>Ear Condition</td>
                            <td>Left Ear</td>
                            <td>Right Ear</td>
                            <td>Ear Remark</td>
                            <td>Eye Condition</td>
                            <td>Left V.A.</td>
                            <td>Right V.A</td>
                            <td>Left W/ P.</td>
                            <td>Right W/ P.</td>
                            <td>Left RX</td>
                            <td>Right RX</td>
                            <td>PD</td>
                            <td>Eye Remark</td>
                            <td>Remark</td>
                            <td>Action</td>
                            </tr>
                            </thead>";
                        }
                        ?>
                    </thead>
                    <tbody>
                    <?php
                        if(!empty($act)&&$act=="Ear Screening"){
                            
                            while($row=mysqli_fetch_array($result)){
                                $pid=$row['patient_id'];
                                $earquery="SELECT * FROM EAR WHERE patient_id=$pid";
                                $earresult=mysqli_query($connect,$earquery);
                                $eararray=mysqli_fetch_array($earresult);
                                if(!empty($eararray['left_ear'])){
                                    if($eararray['left_ear']=="IC"||$eararray['right_ear']=="IC"){
                                        echo '<tr class="danger"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td>'.'<td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td>'.'<td>'.$eararray['left_ear'].'</td>'.'<td>'.$eararray['right_ear'].'</td>'.'<td>'.$eararray['ear_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td><td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></i></a></td></tr>';
                                    }else if($eararray['left_ear']=="OM"||$eararray['right_ear']=="OM"){
                                        echo '<tr class="success"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td>'.'<td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td>'.'<td>'.$eararray['left_ear'].'</td>'.'<td>'.$eararray['right_ear'].'</td>'.'<td>'.$eararray['ear_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td><td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }else{
                                        echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td>'.'<td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td>'.'<td>'.$eararray['left_ear'].'</td>'.'<td>'.$eararray['right_ear'].'</td>'.'<td>'.$eararray['ear_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td><td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }
                                }else{
                                    if($eararray['left_ear']=="IC"||$eararray['right_ear']=="IC"){
                                        echo '<tr class="danger"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td>'.'<td><a href='.'"ear.php?pid='.$pid.'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td>'.'<td>'.$eararray['left_ear'].'</td>'.'<td>'.$eararray['right_ear'].'</td>'.'<td>'.$eararray['ear_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td><td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }else if($eararray['left_ear']=="OM"||$eararray['right_ear']=="OM"){
                                        echo '<tr class="success"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td>'.'<td><a href='.'"ear.php?pid='.$pid.'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td>'.'<td>'.$eararray['left_ear'].'</td>'.'<td>'.$eararray['right_ear'].'</td>'.'<td>'.$eararray['ear_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td><td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }else{
                                        echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td>'.'<td><a href='.'"ear.php?pid='.$pid.'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td>'.'<td>'.$eararray['left_ear'].'</td>'.'<td>'.$eararray['right_ear'].'</td>'.'<td>'.$eararray['ear_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td><td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }

                                }
                            }
                        }else if(!empty($act)&&$act=="Eye Screening"){
                            while($row=mysqli_fetch_array($result)){
                                $pid=$row['patient_id'];
                                $eyequery="SELECT * FROM EYE WHERE patient_id=$pid";
                                $eyeresult=mysqli_query($connect,$eyequery);
                                $eyearray=mysqli_fetch_array($eyeresult);
                                if(!empty($eyearray['lvisual_acuity'])){
                                    echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td>'.'<td>'.'<a href="eyeup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-eye fa-fw'.'"></i></a></td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                }else{
                                    echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td>'.'<td>'.'<a href="eye.php?pid='.$pid.'"><i class="'.'fa fa-eye fa-fw'.'"></i></a></td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                }
                            }
                        }else if(!empty($act)&&$act=="Ear and Eye Screening"){
                            while($row=mysqli_fetch_array($result)){
                                $pid=$row['patient_id'];
                                $earquery="SELECT * FROM EAR WHERE patient_id=$pid";
                                $earresult=mysqli_query($connect,$earquery);
                                $eararray=mysqli_fetch_array($earresult);
                                $eyequery="SELECT * FROM EYE WHERE patient_id=$pid";
                                $eyeresult=mysqli_query($connect,$eyequery);
                                $eyearray=mysqli_fetch_array($eyeresult);
                                if(!empty($eararray['left_ear'])){
                                    if($eararray['left_ear']=="IC"||$eararray['right_ear']=="IC"){
                                        if(!empty($eyearray['lvisual_acuity'])){
                                            echo '<tr class="danger"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td>'.'<td>'.'<a href="eyeup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-eye fa-fw'.'"></i></a>'.'</td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }else{
                                            echo '<tr class="danger"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td>'.'<td>'.'<a href="eye.php?pid='.$pid.'"><i class="'.'fa fa-eye fa-fw'.'"></i></a>'.'</td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }
                                    }else if($eararray['left_ear']=="OM"||$eararray['right_ear']=="OM"){
                                        if(!empty($eyearray['lvisual_acuity'])){
                                            echo '<tr class="success"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td>'.'<td>'.'<a href="eyeup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-eye fa-fw'.'"></i></a>'.'</td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }else{
                                            echo '<tr class="success"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td>'.'<td>'.'<a href="eye.php?pid='.$pid.'"><i class="'.'fa fa-eye fa-fw'.'"></i></a>'.'</td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }
                                    }else{
                                        if(!empty($eyearray['lvisual_acuity'])){
                                            echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td>'.'<td>'.'<a href="eyeup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-eye fa-fw'.'"></i></a>'.'</td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }else{
                                            echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td><a href='.'"earup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td>'.'<td>'.'<a href="eye.php?pid='.$pid.'"><i class="'.'fa fa-eye fa-fw'.'"></i></a>'.'</td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }
                                    }
                                    
                                }else if(empty($eararray['left_ear'])){
                                    if(!empty($eyearray['lvisual_acuity'])){
                                        echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td><a href='.'"ear.php?pid='.$pid.'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td><td></td><td></td><td></td>'.'<td>'.'<a href="eyeup.php?pid='.$pid.'&school='.$_GET['school'].'"><i class="'.'fa fa-eye fa-fw'.'"></i></a>'.'</td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }else{
                                        echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td><a href='.'"ear.php?pid='.$pid.'"><i class="'.'fa fa-deaf fa-fw'.'"></i></a></td><td></td><td></td><td></td>'.'<td>'.'<a href="eye.php?pid='.$pid.'"><i class="'.'fa fa-eye fa-fw'.'"></i></a>'.'</td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }
                                }
                            }
                        }else{
                            while($row=mysqli_fetch_array($result)){
                                $pid=$row['patient_id'];
                                $earquery="SELECT * FROM EAR WHERE patient_id=$pid";
                                $earresult=mysqli_query($connect,$earquery);
                                $eararray=mysqli_fetch_array($earresult);
                                $eyequery="SELECT * FROM EYE WHERE patient_id=$pid";
                                $eyeresult=mysqli_query($connect,$eyequery);
                                $eyearray=mysqli_fetch_array($eyeresult);
                                if(!empty($eararray['left_ear'])){
                                    if($eararray['left_ear']=="IC"||$eararray['right_ear']=="IC"){
                                        if(!empty($eyearray['lvisual_acuity'])){
                                            echo '<tr class="danger"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td><td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }else{
                                            echo '<tr class="danger"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }
                                    }else if($eararray['left_ear']=="OM"||$eararray['right_ear']=="OM"){
                                        if(!empty($eyearray['lvisual_acuity'])){
                                            echo '<tr class="success"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td><td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }else{
                                            echo '<tr class="success"><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }
                                    }else{
                                        if(!empty($eyearray['lvisual_acuity'])){
                                            echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td><td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td>'.'<td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }else{
                                            echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td>'.$eararray['left_ear'].'</td><td>'.$eararray['right_ear'].'</td><td>'.$eararray['ear_remark'].'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                        }
                                    }
                                    
                                }else if(empty($eararray['left_ear'])){
                                    if(!empty($eyearray['lvisual_acuity'])){
                                        echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td></td><td></td><td></td>'.'<td>'.$eyearray['lvisual_acuity'].'</td>'.'<td>'.$eyearray['rvisual_acuity'].'</td><td>'.$eyearray['lwith_pinhole'].'</td>'.'<td>'.$eyearray['rwith_pinhole'].'</td>'.'<td>'.$eyearray['l_rx'].'</td>'.'<td>'.$eyearray['r_rx'].'</td>'.'<td>'.$eyearray['pd'].'</td>'.'<td>'.$eyearray['eye_remark'].'</td>'.'<td>'.$row['patient_remark'].'</td>'.'<td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }else{
                                        echo '<tr><td>'.$row['patient_lname'].'</td>'.'<td>'.$row['patient_fname'].'</td>'.'<td>'.$row['patient_minitial'].'</td>'.'<td>'.$row['age'].'</td>'.'<td>'.$row['sex'].'</td><td></td><td></td><td></td>'.'<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a href="'.'update.php?pid='.$pid.'"><i class='.'"fa fa-edit fa-fw"'.'></i></a><a href="'.'delete.php?pid='.$pid.'" onclick='.'"return confirm(\'Are you sure you want to delete?\')"><i class='.'"fa fa-trash fa-fw"'.'></a></td></tr>';
                                    }
                                }
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/test.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    

    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<script>
    $(document).ready(function(){
    $('#main_table').DataTable();
    });
</script>
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
