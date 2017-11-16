
<html lang="en">
<style>
@media print {
  .hidden-print {
    display: none !important;
  }
}
</style>
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

<div id="wrapper" class="hidden-print">
<!-- Navigation -->
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
                <li><a href="newschool.php"><i class="fa fa-graduation-cap fa-fw"></i> New Community</a>
                </li>
                <li><a href="new.php"><i class="fa fa-user fa-fw"></i> New Patient</a>
                </li>
                <li class="divider"></li>
                <li><a href="records.php"><i class="glyphicon glyphicon-folder-open fa-fw"></i> Community Patient Records</a>
                </li>
                <li><a href="recordns.php"><i class="fa fa-briefcase fa-fw"></i> Non-Community Patient Records</a>
                </li>
                <li><a href="schools.php"><i class="fa fa-university fa-fw"></i> Community Records</a>
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

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header hidden-print">Report</h1>
            </div>
            <div class="panel panel-default">
        		<div class="panel-body">
                    <div class="form-group col-lg-12">
                    <div class="hidden-print">
                    <button onclick="printfunction()" class="btn btn-primary"><img class="fa-print">Print</img></button></br>
                    <input type="radio" name="p" value="period" onchange="hideBoth();document.getElementById('quarter').disabled=true;document.getElementById('monthly').disabled=true;" checked>Yearly</input></br>
                    <input type="radio" name="p" value="period" onchange="hideMonth();document.getElementById('quarter').disabled=false;document.getElementById('quarter1').disabled=false;document.getElementById('quarter2').disabled=false;document.getElementById('quarter3').disabled=false;document.getElementById('quarter4').disabled=false;">Quarterly</input></br>
                    <input type="radio" name="p" value="period" onchange="hideQuart();document.getElementById('monthly').disabled=false;document.getElementById('monthly1').disabled=false;document.getElementById('monthly2').disabled=false;document.getElementById('monthly3').disabled=false;document.getElementById('monthly4').disabled=false;document.getElementById('monthly5').disabled=false;document.getElementById('monthly6').disabled=false;document.getElementById('monthly7').disabled=false;document.getElementById('monthly8').disabled=false;document.getElementById('monthly9').disabled=false;document.getElementById('monthly10').disabled=false;document.getElementById('monthly11').disabled=false;document.getElementById('monthly12').disabled=false;">Monthly</input><br/>
                    <form action="summary.php" method="get">
                    <?php
                    $connect = mysqli_connect('localhost','root','');
                    if(!$connect){
                        echo 'No connection to server';
                    }           
                    if(!mysqli_select_db($connect,'lukedb')){
                        echo 'Database "upcmscdb" is not selected';
                    }
                    $query="SELECT DISTINCT YEAR(DATE_VISITED) FROM SCHOOL";
                    $result=mysqli_query($connect,$query);
                    echo "<select name=\"year\">";
                    while($row=mysqli_fetch_array($result)){
                        if($row[0]!=0)
                        echo "<option value=$row[0]>$row[0]</option>";
                    }
                    echo "</select>";
                ?>
               
                <select name="quart" class="hidden" id="quart">
                    <option value="0" id="quarter" disabled>-</option>
                    <option value="1" id="quarter1" disabled>1st Quarter</option>
                    <option value="2" id="quarter2" disabled>2nd Quarter</option>
                    <option value="3" id="quarter3" disabled>3rd Quarter</option>
                    <option value="4" id="quarter4" disabled>4th Quarter</option>
                </select>
                
                <select name="month" class="hidden" id="month">
                    <option value="0" id="monthly" disabled>-</option>
                    <option value="1" id="monthly1" disabled>January</option>
                    <option value="2" id="monthly2" disabled>Febuary</option>
                    <option value="3" id="monthly3" disabled>March</option>
                    <option value="4" id="monthly4" disabled>April</option>
                    <option value="5" id="monthly5" disabled>May</option>
                    <option value="6" id="monthly6" disabled>June</option>
                    <option value="7" id="monthly7" disabled>July</option>
                    <option value="8" id="monthly8" disabled>August</option>
                    <option value="9" id="monthly9" disabled>September</option>
                    <option value="10" id="monthly10" disabled>October</option>
                    <option value="11" id="monthly11" disabled>November</option>
                    <option value="12" id="monthly12" disabled>December</option>
                </select>
                <br/>
                <label>Activity:</label>
                <input type="radio" name="act" value="ear" checked>Ear</input>
                <input type="radio" name="act" value="eye">Eye</input>
                <br/>
                <label>By:</label>
                <input type="radio" name="type" value="sex" checked>Sex</input>
                <input type="radio" name="type" value="age">Age</input>
                <br/>
                <button type="submit" class="btn btn-primary">Generate</button>
                </div>
                </form>
                <?php 
                if(!empty($_GET['act'])&&$_GET['act']=="ear"){
                    if(!empty($_GET['type'])&&$_GET['type']=="sex"){
                    $grandtotalned=0;
                    $grandtotalic=0;
                    $grandtotalom=0;
                    $tablesexear="";
                        if(empty($_GET['month'])&&(empty($_GET['quart']))){
                           if(!empty($_GET['year'])){
                            $year=$_GET['year'];
                            $schoolquery="SELECT school_id,school_name,date_visited FROM school where YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            $schoolresult=mysqli_query($connect,$schoolquery);
                            
                           }
                        }else if((!empty($_GET['month']) )&& (!empty($_GET['year']))){
                            $month=$_GET['month'];
                            $year=$_GET['year'];
                            $schoolquery="SELECT school_id,school_name,date_visited FROM school where MONTH(date_visited)=$month AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            $schoolresult=mysqli_query($connect,$schoolquery);
                        }else{
                            $year=$_GET['year'];
                            $quart=$_GET['quart'];
                            if($quart==1){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=1 OR MONTH(date_visited)=2 OR MONTH(date_visited)=3) AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==2){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=4 OR MONTH(date_visited)=4 OR MONTH(date_visited)=6) AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==3){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=7 OR MONTH(date_visited)=8 OR MONTH(date_visited)=9) AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==4){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=10 OR MONTH(date_visited)=11 OR MONTH(date_visited)=12) AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }
                        }
                            $schoolresult=mysqli_query($connect,$schoolquery);
                            while($item=mysqli_fetch_array($schoolresult)){
                                $schoolname=$item['school_name'];
                                $dv=$item['date_visited'];
                                $sid=$item['school_id'];
                                
                                $tablesexear=$tablesexear. "<div class=\"col-xs-4\"><label>$schoolname ($dv)</label>";
                                $mqueryned="SELECT count(p.patient_id) as \"mtotalned\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.sex=\"m\" AND (e.left_ear=\"NED\" OR e.right_ear=\"NED\")";
                                $mqueryic="SELECT count(p.patient_id) as \"mtotalic\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.sex=\"m\" AND (e.left_ear=\"IC\" OR e.right_ear=\"IC\")";
                                $mqueryom="SELECT count(p.patient_id) as \"mtotalom\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.sex=\"m\" AND (e.left_ear=\"OM\" OR e.right_ear=\"OM\")";
                                $fqueryned="SELECT count(p.patient_id) as \"ftotalned\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.sex=\"f\" AND (e.left_ear=\"NED\" OR e.right_ear=\"NED\")";
                                $fqueryic="SELECT count(p.patient_id) as \"ftotalic\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.sex=\"f\" AND (e.left_ear=\"IC\" OR e.right_ear=\"IC\")";
                                $fqueryom="SELECT count(p.patient_id) as \"ftotalom\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.sex=\"f\" AND (e.left_ear=\"OM\" OR e.right_ear=\"OM\")";
                                $mresultned=mysqli_query($connect,$mqueryned);
                                $mresultic=mysqli_query($connect,$mqueryic);
                                $mresultom=mysqli_query($connect,$mqueryom);
                                $fresultned=mysqli_query($connect,$fqueryned);
                                $fresultic=mysqli_query($connect,$fqueryic);
                                $fresultom=mysqli_query($connect,$fqueryom);
                                $marrayned=mysqli_fetch_array($mresultned);
                                $marrayic=mysqli_fetch_array($mresultic);
                                $marrayom=mysqli_fetch_array($mresultom);
                                $farrayned=mysqli_fetch_array($fresultned);
                                $farrayic=mysqli_fetch_array($fresultic);
                                $farrayom=mysqli_fetch_array($fresultom);
                                $tablesexear=$tablesexear."<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Sex</th><th>NED</th><th>IC</th><th>OM</th><th>Total</th></thead><tbody>";
                                for($i=1;$i<3;$i++){
                                    if($i==1){
                                        $mned=$marrayned['mtotalned'];
                                        $mic=$marrayic['mtotalic'];
                                        $mom=$marrayom['mtotalom'];
                                        $mtot=$mned+$mic+$mom;
                                        $tablesexear=$tablesexear."<tr><td>Male:</td><td>$mned</td><td>$mic</td><td>$mom</td><td>$mtot</td><tr/>";
                                        $totalned=$mned;
                                        $totalic=$mic;
                                        $totalom=$mom;
                                    }else{
                                        $fned=$farrayned['ftotalned'];
                                        $fic=$farrayic['ftotalic'];
                                        $fom=$farrayom['ftotalom'];
                                        $ftot=$fned+$fic+$fom;
                                        $tablesexear=$tablesexear."<tr><td>Female:</td><td>$fned</td><td>$fic</td><td>$fom</td><td>$ftot</td><tr/>";
                                        $totalned=$fned+$totalned;
                                        $totalic=$fic+$totalic;
                                        $totalom=$fom+$totalom;
                                        $total=$totalned+$totalic+$totalom;
                                        $tablesexear=$tablesexear."<tr><td>Total:</td><td>$totalned</td><td>$totalic</td><td>$totalom</td><td>$total</td><tr/>";
                                        $grandtotalned=$grandtotalned+$totalned;
                                        $grandtotalic=$grandtotalic+$totalic;
                                        $grandtotalom=$grandtotalom+$totalom;
                                    }
                                }
                                $tablesexear=$tablesexear."</tbody></table></div>";
                               
                            }
                            $grandtot=$grandtotalned+$grandtotalic+$grandtotalom;
                            $tablesexear=$tablesexear."<div class=\"col-xs-4\"><label>Grand Total</label><table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead>";
                            $tablesexear=$tablesexear."<th>NED</th><th>IC</th><th>OM</th><th>Total Cases</th><thead><tbody>";
                            $tablesexear=$tablesexear."<td>$grandtotalned</td><td>$grandtotalic</td><td>$grandtotalom</td><td>$grandtot</td></tbody></table></div>";
                            echo $tablesexear;
                    }else if(!empty($_GET['type'])&&$_GET['type']=="age"){
                        if(empty($_GET['month'])&&empty($_GET['quart'])){
                            $year=$_GET['year'];
                            $schoolquery="SELECT school_id,school_name,date_visited FROM school where YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            $schoolresult=mysqli_query($connect,$schoolquery);
                        }else if(empty($_GET['month'])&&empty($_GET['quart'])){
                            $month=$_GET['month'];
                            $year=$_GET['year'];
                            $schoolquery="SELECT school_id,school_name,date_visited FROM school where MONTH(date_visited)=$month AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            $schoolresult=mysqli_query($connect,$schoolquery);
                        }else if(empty($_GET['month'])&&empty($_GET['quart'])){
                            $year=$_GET['year'];
                            $quart=$_GET['quart'];
                            if($quart==1){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=1 OR MONTH(date_visited)=2 OR MONTH(date_visited)=3) AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==2){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=4 OR MONTH(date_visited)=4 OR MONTH(date_visited)=6) AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==3){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=7 OR MONTH(date_visited)=8 OR MONTH(date_visited)=9) AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==4){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=10 OR MONTH(date_visited)=11 OR MONTH(date_visited)=12) AND YEAR(date_visited)=$year AND (activity=\"Ear Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }
                            $schoolresult=mysqli_query($connect,$schoolquery);
                        }
                        $gtotned=0;
                        $gtotic=0;
                        $gtotom=0;
                        while($item=mysqli_fetch_array($schoolresult)){
                            $sname=$item['school_name'];
                            $date=$item['date_visited'];
                            echo "<div class=\"col-xs-6\"><label>$sname ($date)</label>";
                            echo "<table width=\"100%\" class=\"table table-hover table-striped table-condensed\"><thead>";
                            $sid=$item['school_id'];
                            $agequery="SELECT DISTINCT age as \"unique\" FROM patient WHERE school_number=$sid ORDER BY age";
                            $ages=mysqli_query($connect,$agequery);
                            $totned=0;
                            $totic=0;
                            $totom=0;
                            
                            echo "<th>AGE</th><th>NED</th><th>IC</th><th>OM</th><th>Total</th></thead><tbody>";
                            while($row=mysqli_fetch_array($ages)){
                                $age=$row['unique'];
                                $queryned="SELECT count(p.patient_id) as \"totalned\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.age=$age AND (e.left_ear=\"NED\" OR e.right_ear=\"NED\")";
                                $queryic="SELECT count(p.patient_id) as \"totalic\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.age=$age AND (e.left_ear=\"IC\" OR e.right_ear=\"IC\")";
                                $queryom="SELECT count(p.patient_id) as \"totalom\" FROM PATIENT p,EAR e WHERE p.patient_id=e.patient_id AND p.school_number=$sid AND p.age=$age AND (e.left_ear=\"OM\" OR e.right_ear=\"OM\")";
                                $resultned=mysqli_query($connect,$queryned);
                                $resultic=mysqli_query($connect,$queryic);
                                $resultom=mysqli_query($connect,$queryom);
                                $arrayned=mysqli_fetch_array($resultned);
                                $arrayic=mysqli_fetch_array($resultic);
                                $arrayom=mysqli_fetch_array($resultom);
                                $ned=$arrayned['totalned'];
                                $ic=$arrayic['totalic'];
                                $om=$arrayom['totalom'];
                                $tot=$ned+$ic+$om;
                                $totned=$totned+$ned;
                                $totic=$totic+$ic;
                                $totom=$totom+$om;
                                echo "<tr><td>$age</td><td>$ned</td><td>$ic</td><td>$om</td><td>$tot</td></tr>";
                            }
                            $gtotned=$gtotned+$totned;
                            $gtotic=$gtotic+$totic;
                            $gtotom=$gtotom+$totom;
                            $tot=$totned+$totic+$totom;
                            echo "<tr><td>Total</td><td>$totned</td><td>$totic</td><td>$totom</td><td>$tot</td></tr>";
                            echo"</tbody></table></div>";
                        }
                        $gtot=$gtotned+$gtotic+$gtotom;

                        echo "<div class=\"col-xs-4\"><label>Grand Total</label><table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead>";
                        echo "<th>NED</th><th>IC</th><th>OM</th><th>Total Cases</th><thead><tbody>";
                        echo "<td>$gtotned</td><td>$gtotic</td><td>$gtotom</td><td>$gtot</td></tbody></table></div>";
                    }
                }else if(!empty($_GET['act'])&&$_GET['act']=="eye"){
                    if(!empty($_GET['type'])&&$_GET['type']=="sex"){
                        if(empty($_GET['month'])&&empty($_GET['quart'])){
                            $year=$_GET['year'];
                            $schoolquery="SELECT school_id,school_name,date_visited FROM school where YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                        }else if(!empty($_GET['month'])&&empty($_GET['quart'])){
                            $month=$_GET['month'];
                            $year=$_GET['year'];
                            $schoolquery="SELECT school_id,school_name,date_visited FROM school where MONTH(date_visited)=$month AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                        }else if(empty($_GET['month'])&&!empty($_GET['quart'])){
                            $year=$_GET['year'];
                            $quart=$_GET['quart'];
                            if($quart==1){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=1 OR MONTH(date_visited)=2 OR MONTH(date_visited)=3) AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==2){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=4 OR MONTH(date_visited)=4 OR MONTH(date_visited)=6) AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==3){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=7 OR MONTH(date_visited)=8 OR MONTH(date_visited)=9) AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }else if($quart==4){
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=10 OR MONTH(date_visited)=11 OR MONTH(date_visited)=12) AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                            }
                        }
                            $schoolresult=mysqli_query($connect,$schoolquery);
                            while($item=mysqli_fetch_array($schoolresult)){
                                $sname=$item['school_name'];
                                $date=$item['date_visited'];
                                echo "<label>$sname ($date)</label>";
                               
                                $sid=$item['school_id'];
                                $lvaquery="SELECT DISTINCT lvisual_acuity as \"uniquelva\" FROM eye ORDER BY lvisual_acuity";
                                $lvaresult=mysqli_query($connect,$lvaquery);
                                $mlvaresult=mysqli_query($connect,$lvaquery);
                                $flvaresult=mysqli_query($connect,$lvaquery);
                                $rowtot=0;
                                $tot=0;
                                echo "<br/><label>Left Visual Acuity Count</label>";
                                echo "<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Sex</th>";
                                while($lvaarray=mysqli_fetch_array($lvaresult)){
                                    $lva=$lvaarray['uniquelva'];
                                    echo "<th>$lva</th>";
                                }
                                echo "<th>Total</th></thead><tbody><tr><td>Male</td>";
                                while($lvaarray=mysqli_fetch_array($mlvaresult)){
                                    $lva=$lvaarray['uniquelva'];
                                    $lvacount="SELECT count(p.patient_id) as \"totallva\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.lvisual_acuity=\"$lva\" AND (p.sex=\"m\")";
                                    $lvacountresult=mysqli_query($connect,$lvacount);
                                    $lvacountarray=mysqli_fetch_array($lvacountresult);
                                    $lvanum=$lvacountarray['totallva'];
                                    echo "<td>$lvanum</td>";
                                    $tot=$tot+$lvanum;
                                }
                                echo "<td>$tot</td></tr><tr><td>Female</td>";
                                $tot=0;
                                while($lvaarray=mysqli_fetch_array($flvaresult)){
                                    $lva=$lvaarray['uniquelva'];
                                    $lvacount="SELECT count(p.patient_id) as \"totallva\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.lvisual_acuity=\"$lva\" AND (p.sex=\"f\")";
                                    $lvacountresult=mysqli_query($connect,$lvacount);
                                    $mlvacountarray=mysqli_fetch_array($lvacountresult);
                                    $lvanum=$mlvacountarray['totallva'];
                                    echo "<td>$lvanum</td>";
                                    $tot=$tot+$lvanum;
                                }
                                echo "<td>$tot</td></table>";
                                $rvaquery="SELECT DISTINCT rvisual_acuity as \"uniquerva\" FROM eye ORDER BY rvisual_acuity";
                                $rvaresult=mysqli_query($connect,$rvaquery);
                                $mrvaresult=mysqli_query($connect,$rvaquery);
                                $frvaresult=mysqli_query($connect,$rvaquery);
                                echo "<br/><label>Right Visual Acuity Count</label>";
                                echo "<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Sex</th>";
                                while($rvaarray=mysqli_fetch_array($rvaresult)){
                                    $rva=$rvaarray['uniquerva'];
                                    echo "<th>$rva</th>";
                                }
                                echo "<th>Total</td></thead><tbody><tr><td>Male</td>";
                                $tot=0;
                                while($rvaarray=mysqli_fetch_array($mrvaresult)){
                                    $rva=$rvaarray['uniquerva'];
                                    $rvacount="SELECT count(p.patient_id) as \"totalrva\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.rvisual_acuity=\"$rva\" AND (p.sex=\"m\")";
                                    $rvacountresult=mysqli_query($connect,$rvacount);
                                    $rvacountarray=mysqli_fetch_array($rvacountresult);
                                    $rvanum=$rvacountarray['totalrva'];
                                    echo "<td>$rvanum</td>";
                                    $tot=$tot+$rvanum;
                                }
                                echo "<td>$tot</td></tr><tr><td>Female</td>";
                                $tot=0;
                                while($rvaarray=mysqli_fetch_array($frvaresult)){
                                    $rva=$rvaarray['uniquerva'];
                                    $rvacount="SELECT count(p.patient_id) as \"totalrva\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.rvisual_acuity=\"$rva\" AND (p.sex=\"f\")";
                                    $rvacountresult=mysqli_query($connect,$rvacount);
                                    $mrvacountarray=mysqli_fetch_array($rvacountresult);
                                    $rvanum=$mrvacountarray['totalrva'];
                                    echo "<td>$rvanum</td>";
                                    $tot=$rvanum+$tot;
                                }
                                echo "<td>$tot</td></table>";
                                $lwpquery="SELECT DISTINCT lwith_pinhole as \"uniquelwp\" FROM eye ORDER BY lwith_pinhole";
                                $lwpresult=mysqli_query($connect,$lwpquery);
                                $mlwpresult=mysqli_query($connect,$lwpquery);
                                $flwpresult=mysqli_query($connect,$lwpquery);
                                echo "<br/><label>Left With Pinhole Count</label>";
                                $tot=0;
                                echo "<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Sex</th>";
                                while($lwparray=mysqli_fetch_array($lwpresult)){
                                    $lwp=$lwparray['uniquelwp'];
                                    echo "<th>$lwp</th>";
                                }
                                echo "<th>Total</th></thead><tbody><tr><td>Male</td>";
                                while($lwparray=mysqli_fetch_array($mlwpresult)){
                                    $lwp=$lwparray['uniquelwp'];
                                    $lwpcount="SELECT count(p.patient_id) as \"totallwp\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.lwith_pinhole=\"$lwp\" AND (p.sex=\"m\")";
                                    $lwpcountresult=mysqli_query($connect,$lwpcount);
                                    $lwpcountarray=mysqli_fetch_array($lwpcountresult);
                                    $lwpnum=$lwpcountarray['totallwp'];
                                    echo "<td>$lwpnum</td>";
                                    $tot=$lwpnum+$tot;
                                }
                                echo "<td>$tot</td></tr><tr><td>Female</td>";
                                $tot=0;
                                while($lwparray=mysqli_fetch_array($flwpresult)){
                                    $lwp=$lwparray['uniquelwp'];
                                    $lwpcount="SELECT count(p.patient_id) as \"totallwp\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.lwith_pinhole=\"$lwp\" AND (p.sex=\"f\")";
                                    $lwpcountresult=mysqli_query($connect,$lwpcount);
                                    $mlwpcountarray=mysqli_fetch_array($lwpcountresult);
                                    $lwpnum=$mlwpcountarray['totallwp'];
                                    echo "<td>$lwpnum</td>";
                                    $tot=$tot+$lwpnum;
                                }
                                echo "<td>$tot</td></tr></tbody></table>";
                                $rwpquery="SELECT DISTINCT rwith_pinhole as \"uniquerwp\" FROM eye ORDER BY rwith_pinhole";
                                $rwpresult=mysqli_query($connect,$rwpquery);
                                $mrwpresult=mysqli_query($connect,$rwpquery);
                                $frwpresult=mysqli_query($connect,$rwpquery);
                                echo "<br/><label>Right With Pinhole Count</label>";
                                echo "<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Sex</th>";
                                while($rwparray=mysqli_fetch_array($rwpresult)){
                                    $rwp=$rwparray['uniquerwp'];
                                    echo "<th>$rwp</th>";
                                }
                                $tot=0;
                                echo "<th>Total</th></thead><tbody><tr><td>Male</td>";
                                while($rwparray=mysqli_fetch_array($mrwpresult)){
                                    $rwp=$rwparray['uniquerwp'];
                                    $rwpcount="SELECT count(p.patient_id) as \"totalrwp\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.rwith_pinhole=\"$rwp\" AND (p.sex=\"m\")";
                                    $rwpcountresult=mysqli_query($connect,$rwpcount);
                                    $rwpcountarray=mysqli_fetch_array($rwpcountresult);
                                    $rwpnum=$rwpcountarray['totalrwp'];
                                    echo "<td>$rwpnum</td>";
                                    $tot=$tot+$rwpnum;
                                }
                                echo "<td>$tot</td></tr><tr><td>Female</td>";
                                $tot=0;
                                while($rwparray=mysqli_fetch_array($frwpresult)){
                                    $rwp=$rwparray['uniquerwp'];
                                    $rwpcount="SELECT count(p.patient_id) as \"totalrwp\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.rwith_pinhole=\"$rwp\" AND (p.sex=\"f\")";
                                    $rwpcountresult=mysqli_query($connect,$rwpcount);
                                    $mrwpcountarray=mysqli_fetch_array($rwpcountresult);
                                    $rwpnum=$mrwpcountarray['totalrwp'];
                                    echo "<td>$rwpnum</td>";
                                    $tot=$tot+$rwpnum;
                                }
                                echo "<td>$tot</td></tr></tbody></table>";
                            
                        }
                    }else if(!empty($_GET['act'])&&$_GET['act']=="eye"){
                        if(!empty($_GET['type'])&&$_GET['type']=="age"){
                            if(empty($_GET['month'])&&empty($_GET['quart'])){
                                $year=$_GET['year'];
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                                $schoolresult=mysqli_query($connect,$schoolquery);
                            }else if(!empty($_GET['month'])&&empty($_GET['quart'])){
                                $month=$_GET['month'];
                                $year=$_GET['year'];
                                $schoolquery="SELECT school_id,school_name,date_visited FROM school where MONTH(date_visited)=$month AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                                $schoolresult=mysqli_query($connect,$schoolquery);
                            }else if(empty($_GET['month'])&&!empty($_GET['quart'])){
                                $year=$_GET['year'];
                                $quart=$_GET['quart'];
                                if($quart==1){
                                    $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=1 OR MONTH(date_visited)=2 OR MONTH(date_visited)=3) AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                                }else if($quart==2){
                                    $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=4 OR MONTH(date_visited)=4 OR MONTH(date_visited)=6) AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                                }else if($quart==3){
                                    $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=7 OR MONTH(date_visited)=8 OR MONTH(date_visited)=9) AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                                }else if($quart==4){
                                    $schoolquery="SELECT school_id,school_name,date_visited FROM school where (MONTH(date_visited)=10 OR MONTH(date_visited)=11 OR MONTH(date_visited)=12) AND YEAR(date_visited)=$year AND (activity=\"Eye Screening\" OR activity=\"Ear and Eye Screening\") ORDER BY date_visited";
                                }
                            }
                                $schoolresult=mysqli_query($connect,$schoolquery);
                                while($item=mysqli_fetch_array($schoolresult)){
                                    $sname=$item['school_name'];
                                    $date=$item['date_visited'];
                                    echo "<label>$sname ($date)</label>";
                                    $sid=$item['school_id'];
                                    $agequery="SELECT DISTINCT age as \"uniqueage\" FROM patient WHERE school_number=$sid ORDER BY age";
                                    $lvaageresult=mysqli_query($connect,$agequery);
                                    $ctr=0;
                                    echo "<br/><label>Left Visual Acuity Count</label>";
                                    echo "<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Age</th>";
                                    while($age=mysqli_fetch_array($lvaageresult)){
                                        $indage=$age['uniqueage'];
                                        $lvaquery="SELECT DISTINCT lvisual_acuity as \"uniquelva\" FROM eye ORDER BY lvisual_acuity";
                                        $lvaresult=mysqli_query($connect,$lvaquery);
                                        $hlvaresult=mysqli_query($connect,$lvaquery);
                                        while($lva=mysqli_fetch_array($hlvaresult)){
                                            if($ctr==0){
                                            $indlva=$lva['uniquelva'];
                                            echo "<th>$indlva</th>";
                                            }
                                        }
                                        echo "<th>Total</th>";
                                        $ctr=1;
                                        $tot=0;
                                        echo "<tbody><tr><td>$indage</td>";
                                        while($lva=mysqli_fetch_array($lvaresult)){
                                            $indlva=$lva['uniquelva'];
                                            $countlva="SELECT count(p.patient_id) as \"totallva\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.lvisual_acuity=\"$indlva\" AND (p.age=\"$indage\")";
                                            $resultcountlva=mysqli_query($connect,$countlva);
                                            while($lvaitem=mysqli_fetch_array($resultcountlva)){
                                                $lvaitem=$lvaitem['totallva'];
                                                echo "<td>$lvaitem</td>";
                                                $tot=$lvaitem+$tot;
                                            }
                                            
                                        }
                                        echo "<td>$tot</td></tr>";
                                        
                                    }
                                    echo "</table>";
                                    $agequery="SELECT DISTINCT age as \"uniqueage\" FROM patient WHERE school_number=$sid ORDER BY age";
                                    $rvaageresult=mysqli_query($connect,$agequery);
                                    $ctr=0;
                                    $tot0;
                                    echo "<br/><label>Right Visual Acuity Count</label>";
                                    echo "<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Age</th>";
                                    while($age=mysqli_fetch_array($rvaageresult)){
                                        $indage=$age['uniqueage'];
                                        $rvaquery="SELECT DISTINCT rvisual_acuity as \"uniquerva\" FROM eye ORDER BY rvisual_acuity";
                                        $rvaresult=mysqli_query($connect,$rvaquery);
                                        $hrvaresult=mysqli_query($connect,$rvaquery);
                                        while($rva=mysqli_fetch_array($hrvaresult)){
                                            if($ctr==0){
                                            $indrva=$rva['uniquerva'];
                                            echo "<th>$indrva</th>";
                                            }
                                        }
                                        $ctr=1;
                                        echo "<th>Total</th><tbody><tr><td>$indage</td>";
                                        while($rva=mysqli_fetch_array($rvaresult)){
                                            $indrva=$rva['uniquerva'];
                                            $countrva="SELECT count(p.patient_id) as \"totalrva\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.rvisual_acuity=\"$indrva\" AND (p.age=\"$indage\")";
                                            $resultcountrva=mysqli_query($connect,$countrva);
                                            while($rvaitem=mysqli_fetch_array($resultcountrva)){
                                                $rvaitem=$rvaitem['totalrva'];
                                                echo "<td>$rvaitem</td>";
                                            }
                                            
                                        }
                                        echo "<td>$tot</td></tr>";
                                        
                                    }
                                    echo "</table>";
                                    $agequery="SELECT DISTINCT age as \"uniqueage\" FROM patient WHERE school_number=$sid ORDER BY age";
                                    $lwpageresult=mysqli_query($connect,$agequery);
                                    $ctr=0;
                                    echo "<br/><label>Left With Pinhole Count</label>";
                                    echo "<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Age</th>";
                                    while($age=mysqli_fetch_array($lwpageresult)){
                                        $indage=$age['uniqueage'];
                                        $lwpquery="SELECT DISTINCT lwith_pinhole as \"uniquelwp\" FROM eye ORDER BY lwith_pinhole";
                                        $lwpresult=mysqli_query($connect,$lwpquery);
                                        $hlwpresult=mysqli_query($connect,$lwpquery);
                                        while($lwp=mysqli_fetch_array($hlwpresult)){
                                            if($ctr==0){
                                            $indlwp=$lwp['uniquelwp'];
                                            echo "<th>$indlwp</th>";
                                            }
                                        }
                                        $ctr=1;
                                        $tot=0;
                                        echo "<th>Total</th><tbody><tr><td>$indage</td>";
                                        while($lwp=mysqli_fetch_array($lwpresult)){
                                            $indlwp=$lwp['uniquelwp'];
                                            $countlwp="SELECT count(p.patient_id) as \"totallwp\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.lwith_pinhole=\"$indlwp\" AND (p.age=\"$indage\")";
                                            $resultcountlwp=mysqli_query($connect,$countlwp);
                                            while($lwpitem=mysqli_fetch_array($resultcountlwp)){
                                                $lwpitem=$lwpitem['totallwp'];
                                                echo "<td>$lwpitem</td>";
                                                $tot=$tot+$lwpitem;
                                            }
                                            
                                        }
                                        echo "<td>$tot</td></tr>";
                                        
                                    }
                                    echo "</table>";
                                    $agequery="SELECT DISTINCT age as \"uniqueage\" FROM patient WHERE school_number=$sid ORDER BY age";
                                    $rwpageresult=mysqli_query($connect,$agequery);
                                    $ctr=0;
                                    echo "<br/><label>Right With Pinhole Count</label>";
                                    echo "<table width=\"50%\" class=\"table table-hover table-striped table-condensed\"><thead><th>Age</th>";
                                    while($age=mysqli_fetch_array($rwpageresult)){
                                        $indage=$age['uniqueage'];
                                        $rwpquery="SELECT DISTINCT rwith_pinhole as \"uniquerwp\" FROM eye ORDER BY rwith_pinhole";
                                        $rwpresult=mysqli_query($connect,$rwpquery);
                                        $hrwpresult=mysqli_query($connect,$rwpquery);
                                        while($rwp=mysqli_fetch_array($hrwpresult)){
                                            if($ctr==0){
                                            $indrwp=$rwp['uniquerwp'];
                                            echo "<th>$indrwp</th>";
                                            }
                                        }
                                        $ctr=1;
                                        $tot=0;
                                        echo "<th>Total</th><tbody><tr><td>$indage</td>";
                                        while($rwp=mysqli_fetch_array($rwpresult)){
                                            $indrwp=$rwp['uniquerwp'];
                                            $countrwp="SELECT count(p.patient_id) as \"totalrwp\" FROM PATIENT p,EYE e WHERE p.patient_id=e.patient_id AND p.school_number=\"$sid\" AND e.rwith_pinhole=\"$indrwp\" AND (p.age=\"$indage\")";
                                            $resultcountrwp=mysqli_query($connect,$countrwp);
                                            while($rwpitem=mysqli_fetch_array($resultcountrwp)){
                                                $rwpitem=$rwpitem['totalrwp'];
                                                echo "<td>$rwpitem</td>";
                                            }
                                            
                                        }
                                        echo "<td>$tot</td></tr>";
                                        
                                    }
                                    echo "</table>";
                                }
                            }
                    }
                }
                    ?>
                   </div> 
        		</div>
		    </div>
        </div>
    </div>
    <script>
    function hideMonth(){
        var name=document.getElementById("quart");
        var mname=document.getElementById("month");
        var clName=name.className;
        if(clName=="hidden"){
            name.className="show";
            mname.className="hidden";
        }else{
            name.className="hidden";
            
        }
    }
    function hideBoth(){
        var name=document.getElementById("quart");
        var mname=document.getElementById("month");
        name.className="hidden";
        mname.className="hidden";
    }
    function hideQuart(){
        var name=document.getElementById("month");
        var mname=document.getElementById("quart");
        var clName=name.className;
        if(clName=="hidden"){
            name.className="show";
            mname.className="hidden";
        }else{
            name.className="hidden";
           
        }
    }
    </script>
    <script>
    function printfunction() {
        window.print();
        var hid=document.getElementById("hide");
        hid.style.display=none;
    }
    </script>
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
