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
            $query="SELECT* FROM SCHOOL WHERE SCHOOL_ID!=1";
            $result=mysqli_query($connect,$query);
            if(!empty($_GET['searchcategory'])){
                $searchcategory=$_GET['searchcategory'];
            }else{
                $searchcategory="";
            }
            if(!empty($_GET['query'])){
            $query=$_GET['query'];
            }else{
                $query="";
            }
            if(empty($_GET['school'])){   
                echo "<li role=\"presentation\" class=\"active\"><a href=\"records.php?searchcategory=$searchcategory&query=$query\">Community Patient</a></li>";
            }else if(!empty($_GET['school'])){
                echo "<li role=\"presentation\" ><a href=\"records.php?searchcategory=$searchcategory&query=$query\">Community Patient</a></li>";
            }
            while($row=mysqli_fetch_array($result)){
                $sid=$row['school_id'];
                $sname=$row['school_name'];
                if(!empty($_GET['school'])&&$_GET['school']!=$sid){
                    echo "<li role=\"presentation\" ><a href=\"records.php?school=$sid&searchcategory=$searchcategory&query=$query\">$sname</a></li>";
                }else if(!empty($_GET['school'])&&$_GET['school']==$sid){
                    echo "<li role=\"presentation\" class=\"active\" ><a href=\"records.php?school=$sid&searchcategory=$searchcategory&query=$query\">$sname</a></li>";
                } if(empty($_GET['school'])){
                    echo "<li role=\"presentation\"><a href=\"records.php?school=$sid&searchcategory=$searchcategory&query=$query\">$sname</a></li>";
                }
            }
            ?>
        </ul> <a href="summary.php" class="col-md-offset-11 btn btn-primary">
                Summary
            </a>
            <div class="form-group col-lg-offset-5">
            </br>
                <form action="records.php" method="get">
                <div class="form-group input-group custom-search-form pull-right">
                <input type="text" class="form-control col-lg-3" placeholder="Search..." name="query" id="searchcategory">
                        <span class="input-group-btn">         
                        </span>
                <select class="form-control col-lg-3" name="searchcategory">
                    <option value="">-</option>
                    <option value="patient_fname"> First Name</option>
                    <option value="patient_lname"> Last Name</option>
                    <option value="patient_minitial">Middle Initial</option>
                    <option value="age">Age</option>
                    <option value="sex">Sex</option>
                </select>
                <?php
                if(!empty($_GET['school'])){
                    $school=$_GET['school'];
                    echo "<input type=\"hidden\" name=\"school\" value=\"$school\"></input>";
                }else{
                    $school="";
                    echo "<input type=\"hidden\" name=\"school\" value=\"$school\"></input>";
                }
                ?>
                    <span class="input-group-btn">         
                        </span>
                    <button type="submit" name="search_query" value="Search" id="searchcategory" class="btn btn-default col-lg-offset-9 pull-right"><i class="fa fa-search"></i> Search</button>
                </div>
            </div>
                <?php             
                 $query="";
               echo" <div class=\"panel-body\">
                <div class=\"form-group col-lg-6\">";
                $connect = mysqli_connect('localhost','root','');
                if(!$connect){
                    echo 'No connection to server';
                }
                if(!mysqli_select_db($connect,'lukedb')){
                    echo 'Database "lukedb" is not selected';
                }
                $query1="SELECT* FROM PATIENT";
               //search bar 
            if(empty($_GET['school'])){
                if(!empty($_GET['query'])){
                    $category=$_GET['searchcategory'];
                    if(empty($_GET['query'])){
                        $query1="SELECT* FROM PATIENT";
                    }else if(empty($category)){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%'";
                    }else if($category=='patient_fname'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE patient_fname LIKE '%$value%'";
                    }else if($category=='patient_lname'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE patient_lname LIKE '%$value%'";
                    }else if($category=='patient_minitial'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE patient_minitial LIKE '%$value%'";
                    }else if($category=='age'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE age LIKE '%$value%'";
                    }else if($category=='sex'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE sex LIKE '%$value%'";
                    }
                }
            }else{
                if(!empty($_GET['query'])){//
                    $category=$_GET['searchcategory'];
                    if(empty($_GET['query'])){
                        
                    }else if(empty($category)){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND school_number=$school";
                    }else if($category=='patient_fname'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE patient_fname LIKE '%$value%' AND school_number=$school";
                    }else if($category=='patient_lname'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE patient_lname LIKE '%$value%' AND school_number=$school";
                    }else if($category=='patient_minitial'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE patient_minitial LIKE '%$value%' AND school_number=$school";
                    }else if($category=='age'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE age LIKE '%$value%' AND school_number=$school";
                    }else if($category=='sex'){
                        $value=$_GET['query'];
                        $query1="SELECT* FROM PATIENT WHERE sex LIKE '%$value%' AND school_number=$school";
                    }
                }else{
                    $query1="SELECT* FROM PATIENT WHERE school_number=$school";
                }
            }
                if(!empty($_GET['searchcategory'])){
                    $category=$_GET['searchcategory'];
                }else{
                    $category="";
                }
                if(!empty($_GET['query'])){
                    $value=$_GET['query'];
                }else{
                    $value="";
                }
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
                if((!empty($act)&&($act=="Ear and Eye Screening"))||(empty($act))){
                    echo "<div class=\"col-lg-12\"><button type=\"button\" class=\"btn btn-primary\" onClick=\"ear()\">Hide/show Ear Condition</button>";
                    echo "<button type=\"button\" class=\"btn btn-primary\" onClick=\"eye()\">Hide/show Eye Condition</button></div>";
                } 
                echo "</div><table width=\"100%\" class=\"table table-hover table-striped\" id=\"id_of_table\"><thead><tr>";
                $new_sort_type="asc";
                    if(isset($_REQUEST['order'])){
                        $order = $_REQUEST['order'];
                        if($order=='asc'){
                            $new_sort_type = 'desc';
                        }
                    }
                     if(!empty($act)&&($act=="Ear Screening")){
                        echo "<th>#</th>
                        <th><a href=\"records.php?sort=lname&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>Last Name</th>
                        <th><a href=\"records.php?sort=fname&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>First Name</th>
                        <th><a href=\"records.php?sort=minitial&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>MI</th>
                        <th><a href=\"records.php?sort=age&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>Age</th>
                        <th>Sex</th>
                        <th id=\"column-a\">Ear Condition</th>
                        <th id=\"column-a\">Left Ear</th>
                        <th id=\"column-a\">Right Ear</th>
                        <th id=\"column-a\">Ear Remark</th>
                        <th>Remark</th>";
                        
                     }else if(!empty($act)&&($act=="Eye Screening")){
                    echo "<th>#</th>
                          <th><a href=\"records.php?sort=lname&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>Last Name</th>
            	          <th><a href=\"records.php?sort=fname&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>First Name</th>
                	      <th><a href=\"records.php?sort=minitial&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>MI</th>
                    	  <th><a href=\"records.php?sort=age&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>Age</th>
                	      <th>Sex</th>
                          <th id=\"column-b\">Eye Condition</th>
                          <th>Left Visual Acuity</th>
                          <th>Right Visual Acuity</th>
                          <th>Left With Pinhole</th>
                          <th>Right With Pinhole</th>
                          <th>Left RX</th>
                          <th>Right RX</th>
                          <th>PD</th>
                          <th>Eye Remark</th>
                          <th>Remark</th>
						  <th><i class=\"fa fa-pencil fa-fw\"></i></th>
                          <th><i class=\"fa fa-times fa-fw\"></i></th>
                    	  </thead> 
                          <tbody>";
                     }else{
                        echo "<th>#</th>
                        <th><a href=\"records.php?sort=lname&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>Last Name</th>
                        <th><a href=\"records.php?sort=fname&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>First Name</th>
                        <th><a href=\"records.php?sort=minitial&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>MI</th>
                        <th><a href=\"records.php?sort=age&order=".$new_sort_type."&query=$value&searchcategory=$category&school=$school\"/>Age</th>
                        <th>Sex</th>
                        <th id=\"column-a\">Ear Condition</th>
                        <th id=\"column-a\">Left Ear</th>
                        <th id=\"column-a\">Right Ear</th>
                        <th id=\"column-a\">Ear Remark</th>
                        <th id=\"column-b\">Eye Condition</th>
                        <th>Left Visual Acuity</th>
                        <th>Right Visual Acuity</th>
                        <th>Left With Pinhole</th>
                        <th>Right With Pinhole</th>
                        <th>Left RX</th>
                        <th>Right RX</th>
                        <th>PD</th>
                        <th>Eye Remark</th>
                        <th>Remark</th>
                        <th><i class=\"fa fa-pencil fa-fw\"></i></th>
                        <th><i class=\"fa fa-times fa-fw\"></i></th>
                        </thead> 
                        <tbody>";
                     }
                    if(empty($_GET['sort'])&&empty($_GET['order'])){
                        $search="";
                        $order="";
                    }else{
                        $search=$_GET['sort'];
                        $order=$_GET['order'];
                        $query=$_GET['query'];
                    }
                    if(!empty($category)){// has a category
                        if(empty($school)){//has no school has a category
                        if($order=='asc'){
                        if($search=='age'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY age ASC";
                                }else{
                                    $query1="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY age ASC";
                                }
                        }else if($search=='fname'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_fname ASC";
                                }else{
                                    $query1="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_fname ASC";
                                }
                        }else if($search=='lname'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_lname ASC";
                                    }else{
                                    $query1="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_lname ASC";
                                    }
                        }else if($search=='minitial'){
                                 if(empty($query)){
                                $query1="SELECT* FROM PATIENT ORDER BY patient_minitial ASC";
                                }else{
                                $query1="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_minitial ASC";
                            }
                        }
                        }else{
                            if($search=='age'){
                                if(empty($query)){
                                $query1="SELECT* FROM PATIENT ORDER BY age DESC";
                                }else{
                                $query1="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY age DESC";
                                }
                            }else if($search=='fname'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_fname DESC";
                                    }else{
                                    $query1="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_fname DESC";
                                    }
                            }else if($search=='lname'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_lname DESC";
                                    }else{
                                    $query1="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_lname DESC";
                                    }
                            }else if($search=='minitial'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_minitial DESC";
                                    }else{
                                    $query1="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_minitial DESC";
                                    }
                            }
                        }
                    }else{//has school has a category
                        if($order=='asc'){
                            if($search=='age'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT ORDER BY age ASC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE ($category LIKE '%$query%') AND (SCHOOL_Number=$school) ORDER BY age ASC";
                                    }
                            }else if($search=='fname'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT ORDER BY patient_fname ASC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE ($category LIKE '%$query%') AND (SCHOOL_Number=$school) ORDER BY patient_fname ASC";
                                    }
                            }else if($search=='lname'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT ORDER BY patient_lname ASC";
                                        }else{
                                            $query1="SELECT* FROM PATIENT WHERE ($category LIKE '%$query%') AND (SCHOOL_Number=$school) ORDER BY patient_lname ASC";
                                        }
                            }else if($search=='minitial'){
                                     if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_minitial ASC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE ($category LIKE '%$query%') AND (SCHOOL_Number=$school) ORDER BY patient_minitial ASC";
                            }
                        }
                            }else{
                                if($search=='age'){
                                    if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY age DESC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE ($category LIKE '%$query%') AND (SCHOOL_Number=$school) ORDER BY age DESC";
                                    }
                                }else if($search=='fname'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT ORDER BY patient_fname DESC";
                                        }else{
                                            $query1="SELECT* FROM PATIENT WHERE ($category LIKE '%$query%') AND (SCHOOL_Number=$school) ORDER BY patient_fname DESC";
                                        }
                                }else if($search=='lname'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT ORDER BY patient_lname DESC";
                                        }else{
                                            $query1="SELECT* FROM PATIENT WHERE ($category LIKE '%$query%') AND (SCHOOL_Number=$school) ORDER BY patient_lname DESC";
                                        }
                                }else if($search=='minitial'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT ORDER BY patient_minitial DESC";
                                        }else{
                                        $query1="SELECT* FROM PATIENT WHERE ($category LIKE '%$query%') AND (SCHOOL_Number=$school) ORDER BY patient_minitial DESC";
                                        }
                                }
                            }
                    }
                }else{//has no category
                    if(empty($school)){ // has no school and category
                        if($order=='asc'){
                        if($search=='age'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY age ASC";
                                }else{
                                    $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') ORDER BY age ASC";
                                }
                        }else if($search=='fname'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_fname ASC";
                                }else{
                                    $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') ORDER BY patient_fname ASC";
                                }
                        }else if($search=='lname'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_lname ASC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') ORDER BY patient_lname ASC";
                                    }
                        }else if($search=='minitial'){
                                 if(empty($query)){
                                $query1="SELECT* FROM PATIENT ORDER BY patient_minitial ASC";
                                }else{
                                    $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') ORDER BY patient_minitial ASC";
                                }
                        }
                        }else{ 
                            if($search=='age'){
                                if(empty($query)){
                                $query1="SELECT* FROM PATIENT ORDER BY age DESC";
                                }else{
                                    $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') ORDER BY age DESC";
                                }
                            }else if($search=='fname'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_fname DESC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') ORDER BY patient_fname DESC";
                                    }
                            }else if($search=='lname'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_lname DESC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') ORDER BY patient_lname DESC";
                                    }
                            }else if($search=='minitial'){
                                if(empty($query)){
                                    $query1="SELECT* FROM PATIENT ORDER BY patient_minitial DESC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') ORDER BY patient_minitial DESC";
                                    }
                            }
                        }
                    }else{ //has no category has school
                        if($order=='asc'){
                            if($search=='age'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT WHERE school_number=$school ORDER BY age ASC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND (school_number=$school) ORDER BY age ASC";
                                    }
                            }else if($search=='fname'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT WHERE school_number=$school ORDER BY patient_fname ASC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND (school_number=$school) ORDER BY patient_fname ASC";
                                    }
                            }else if($search=='lname'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT WHERE school_number=$school ORDER BY patient_lname ASC";
                                        }else{
                                            $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND (school_number=$school) ORDER BY patient_lname ASC";
                                        }
                            }else if($search=='minitial'){
                                     if(empty($query)){
                                    $query1="SELECT* FROM PATIENT WHERE school_number=$school ORDER BY patient_minitial ASC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND (school_number=$school) ORDER BY patient_minitial ASC";
                            }
                        }
                            }else{
                                if($search=='age'){
                                    if(empty($query)){
                                    $query1="SELECT* FROM PATIENT WHERE school_number=$school ORDER BY age DESC";
                                    }else{
                                        $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND (school_number=$school) ORDER BY age DESC";
                                    }
                                }else if($search=='fname'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT WHERE school_number=$school ORDER BY patient_fname DESC";
                                        }else{
                                            $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND (school_number=$school) ORDER BY patient_fname DESC";
                                        }
                                }else if($search=='lname'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT WHERE school_number=$school ORDER BY patient_lname DESC";
                                        }else{
                                            $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND (school_number=$school) ORDER BY patient_lname DESC";
                                        }
                                }else if($search=='minitial'){
                                    if(empty($query)){
                                        $query1="SELECT* FROM PATIENT WHERE school_number=$school ORDER BY patient_minitial DESC";
                                        }else{
                                            $query1="SELECT* FROM PATIENT WHERE (patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%') AND (school_number=$school) ORDER BY patient_minitial DESC";
                                        }
                                }
                            }
                    }

                }              
                        $result=mysqli_query($connect,$query1);
                        $ctr=0;
                        while ($row=mysqli_fetch_array($result)) {
	                        $f1=$row['patient_fname'];
	                        $f2=$row['patient_minitial'];
	                        $f3=$row['patient_lname'];
	                        $f4=$row['age'];
	                        $f5=$row['sex'];
	                        $f17=$row['school_number'];
                            $f16=$row['patient_id'];
                            $remark=$row['patient_remark'];
                            
                            $query2="SELECT * FROM ear WHERE patient_id=$f16";
                            $result2=mysqli_query($connect,$query2);
                            $query3="SELECT* FROM eye WHERE patient_id=$f16";
                            $result3=mysqli_query($connect,$query3);
                            $ear=mysqli_fetch_array($result2);
                            $eye=mysqli_Fetch_array($result3);
                            $lva=$eye['lvisual_acuity'];
                            $rva=$eye['rvisual_acuity'];
                            $lwp=$eye['lwith_pinhole'];
                            $rwp=$eye['rwith_pinhole'];
                            $lrx=$eye['l_rx'];
                            $rrx=$eye['r_rx'];
                            $pd=$eye['pd'];
                            $eremark=$eye['eye_remark'];
                            $lear=$ear['left_ear'];
                            $rear=$ear['right_ear'];
                            $earremark=$ear['ear_remark'];
                            if(!empty($act)&&($act=="Ear Screening")){
                                if(!empty($lva)){
                                    if((strcmp($lear,'IC')==0||strcmp($rear,'IC')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"danger\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></button></td></tr>";
                                    }else if((strcmp($lear,'OM')==0||strcmp($rear,'OM')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"success\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if((strcmp($lear,'OM')==0)&&(strcmp($rear,'IC')==0)||(strcmp($lear,'IC')==0)&&(strcmp($rear,'OM')==0)){
                                        $ctr++;
                                        echo "<tr class=\"info\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(!empty($lear)){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(empty($lear)&&$f17!=1){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'ear.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }
                                }else{
                                    if((strcmp($lear,'IC')==0||strcmp($rear,'IC')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"danger\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></button></td></tr>";
                                    }else if((strcmp($lear,'OM')==0||strcmp($rear,'OM')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"success\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if((strcmp($lear,'OM')==0)&&(strcmp($rear,'IC')==0)||(strcmp($lear,'IC')==0)&&(strcmp($rear,'OM')==0)){
                                        $ctr++;
                                    }else if(!empty($lear)){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(empty($lear)&&$f17!=1){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'ear.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }
                                }
                            }else if(!empty($act)&&($act=="Eye Screening")){
                                if(!empty($lva)){
                                    if((strcmp($lear,'IC')==0||strcmp($rear,'IC')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"danger\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td><td>$remark</td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></button></td></tr>";
                                    }else if((strcmp($lear,'OM')==0||strcmp($rear,'OM')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"success\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if((strcmp($lear,'OM')==0)&&(strcmp($rear,'IC')==0)||(strcmp($lear,'IC')==0)&&(strcmp($rear,'OM')==0)){
                                        $ctr++;
                                        echo "<tr class=\"info\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }
                                    else if(!empty($lear)){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(empty($lear)&&$f17!=1){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }
                                }else{
                                    if((strcmp($lear,'IC')==0||strcmp($rear,'IC')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"danger\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><td><a href="."'eye.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></button></td></tr>";
                                    }else if((strcmp($lear,'OM')==0||strcmp($rear,'OM')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"success\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><td><a href="."'eye.php?id=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if((strcmp($lear,'OM')==0)&&(strcmp($rear,'IC')==0)||(strcmp($lear,'IC')==0)&&(strcmp($rear,'OM')==0)){
                                        $ctr++;
                                        echo "<tr class=\"info\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><td><a href="."'eye.php?id=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(!empty($lear)){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'eye.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(empty($lear)&&$f17!=1){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'eye.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }
                                }
                            }else{
                                if(!empty($lva)){
                                    if((strcmp($lear,'IC')==0||strcmp($rear,'IC')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"danger\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></button></td></tr>";
                                    }else if((strcmp($lear,'OM')==0||strcmp($rear,'OM')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"success\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(((strcmp($lear,'OM')==0)&&(strcmp($rear,'IC')==0))||((strcmp($lear,'IC')==0)&&(strcmp($rear,'OM')==0))){
                                        $ctr++;
                                        echo "<tr class=\"info\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(!empty($lear)){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(empty($lear)&&$f17!=1){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'ear.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eyeup.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }
                                }else{
                                    if((strcmp($lear,'IC')==0||strcmp($rear,'IC')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"danger\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eye.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></button></td></tr>";
                                    }else if((strcmp($lear,'OM')==0||strcmp($rear,'OM')==0)&&($f17!=1||$f17!=0)){
                                        $ctr++;
                                        echo "<tr class=\"success\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eye.php?id=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if((strcmp($lear,'OM')==0)&&(strcmp($rear,'IC')==0)||(strcmp($lear,'IC')==0)&&(strcmp($rear,'OM')==0)){
                                        $ctr++;
                                        echo "<tr class=\"info\"><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eye.php?id=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(!empty($lear)){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'earup.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eye.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }else if(empty($lear)&&$f17!=1){
                                        $ctr++;
                                        echo "<tr><td>$ctr</td><td>".$f3."</td><td>".$f1."</td><td>" .$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td><a href="."'ear.php?id=".$f16."';"."><i class='fa fa-volume-up fa-fw'></i></a></td><td>$lear</td><td>$rear</td><td>$earremark</td><td><a href="."'eye.php?pid=".$f16."';"."><i class='fa fa-eye fa-fw'></i></a></td><td>$lva</td><td>$rva</td><td>$lwp</td><td>$rwp</td><td>$lrx</td><td>$rrx</td><td>$pd</td><td>$eremark</td><td>$remark</td><td><a href="."'update.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a></td><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a></td></tr>";
                                    }
                                }
                            }
                        }
                    
                        ?>
                    	</tbody>
                	</table>
                    <!-- Button trigger modal -->

           

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Summary</h4>
      </div>
      <div class="modal-body">
        <?php
        $connect = mysqli_connect('localhost','root','');
        if(!$connect){
            echo 'No connection to server';
        }
        if(!mysqli_select_db($connect,'lukedb')){
            echo 'Database "lukedb" is not selected';
        }
        //Age count
        $query="SELECT DISTINCT age AS \"unique\" FROM patient WHERE school_number!=1";
        $result=mysqli_query($connect,$query);
        echo "<table width=\"100%\" class=\"table table-hover table-striped\"><tr><td>AGE</td><td>Count</td></tr>";
        while($items=mysqli_fetch_array($result)){
            $item=$items['unique'];
            $query2="SELECT count(*) AS \"total\" FROM PATIENT WHERE age=$item"; 
            $result2=mysqli_query($connect,$query2);
            $count=mysqli_fetch_array($result2);
            $f1=$count['total'];
            $f2=$items['unique'];
            echo "<tr><td>$f2</td><td>$f1</td></tr>";
        }
        //Sex count
        $query="SELECT DISTINCT sex AS \"unique\" FROM patient WHERE school_number!=1";
        $result=mysqli_query($connect,$query);
        echo "<table width=\"100%\" class=\"table table-hover table-striped\"><tr><td>SEX</td><td>Count</td></tr>";
        while($items=mysqli_fetch_array($result)){
            $item=$items['unique'];
            $query2="SELECT count(*) AS \"total\" FROM PATIENT WHERE sex='$item' && school_number!=1"; 
            $result2=mysqli_query($connect,$query2);
            $count=mysqli_fetch_array($result2);
            $f1=$count['total'];
            $f2=$items['unique'];
            echo "<tr><td>$f2</td><td>$f1</td></tr>";
        }
        echo "</table>";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
                         </div>
                    </div>
                </div>
        		</div>					
   						 </div>
 					 </div>
				</div>

        		</div>
		    </div>
        </div>
    </div>
    
    <script>
    
    
    function ear(){
        var earbtn=document.getElementById('column-a');
        if(earbtn.style.display=='block'){
            
            show_hide_column(6,false);
            show_hide_column(7,false);
            show_hide_column(8,false);
            show_hide_column(9,false);
        }else{
           
            show_hide_column(6,true);
            show_hide_column(7,true);
            show_hide_column(8,true);
            show_hide_column(9,true);
        }
    }
    $(document).ready(function(){
    $('#id_of_table').DataTable();
    });
    function eye(){
        var earbtn=document.getElementById('column-a');
        if(earbtn.style.display=='block'){
            show_hide_column(10,false);
            show_hide_column(11,false);
            show_hide_column(12,false);
            show_hide_column(13,false);
            show_hide_column(14,false);
            show_hide_column(15,false);
            show_hide_column(16,false);
            show_hide_column(17,false);
            show_hide_column(18,false);
        }else{
            show_hide_column(10,true);
            show_hide_column(11,true);
            show_hide_column(12,true);
            show_hide_column(13,true);
            show_hide_column(14,true);
            show_hide_column(15,true);
            show_hide_column(16,true);
            show_hide_column(17,true);
            show_hide_column(18,true);
        }
    }
    function show_hide_column(col_no, do_show) {
    var tbl = document.getElementById('id_of_table');
    var rows = tbl.getElementsByTagName('tr');

    for (var row = 0; row < rows.length; row++) {
        var cols = rows[row].children;
        if (col_no >= 0 && col_no < cols.length) {
            var cell = cols[col_no];
            if (cell.tagName == 'TH'){
                if( cell.style.display=='table-cell'){
                    cell.style.display='none';
                }else{
                    cell.style.display='table-cell';
                }
            }
            if (cell.tagName == 'TD'){
                if( cell.style.display=='table-cell'){
                    cell.style.display='none';
                }else{
                    cell.style.display='table-cell';
                }
            }
        }
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
    <script src="../js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
   $(function() {
    $("#id_of_table").dataTable({
        "iDisplayLength": 10,
        "aLengthMenu": [[10, 25, 50, 100,  -1], [10, 25, 50, 100, "All"]]
       });
   });
  </script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/test.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    

    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
