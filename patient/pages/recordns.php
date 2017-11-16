
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
    <div id="page-wrapper">
        <div class="row">
        <button type="button" class="btn btn-primary btn-md col-md-offset-11" data-toggle="modal" data-target="#myModal">
						Summary
					</button>
			<div class="form-group col-lg-offset-5">
           
            </br>
                <form action="recordns.php" method="get">
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
                    <option value="present_address">Present Address</option>
                    <option value="provincial_address">Provincial Address</option>
                    <option value="civil_status">Civil Status</option>
                    <option value="birthdate">Birthdate</option>
                    <option value="birthplace">Birthplace</option>
                    <option value="religion">Religion</option>
                    <option value="occupation">Occupation</option>
                    <option value="monthly_income">Monthly Income</option>
                    <option value="contact_number">Contact Number</option>
                    <option value="highest_educ_attainment">Highest Educational Attainment</option>
                </select>
                    <span class="input-group-btn">         
                        </span>
                    <button type="submit" name="search_query" value="Search" id="searchcategory" class="btn btn-default col-lg-offset-9 pull-right"><i class="fa fa-search"></i> Search</button>
                </div>
            </div>
						<?php
						$connect = mysqli_connect('localhost','root','');
						if(!$connect){
							echo 'No connection to server';
						}
						if(!mysqli_select_db($connect,'lukedb')){
							echo 'Database "lukedb" is not selected';
						}
						$query="SELECT* FROM patient";
						
						if(!empty($_GET['query'])){
							$category=$_GET['searchcategory'];
							if(empty($_GET['query'])){
								$query="SELECT* FROM PATIENT";
							}else if(empty($category)){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE patient_lname LIKE '%$value%' OR patient_fname LIKE '%$value%' OR patient_minitial LIKE '%$value%' OR age LIKE '%$value%' OR sex LIKE '%$value%'";
							}else if($category=='patient_fname'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE patient_fname LIKE '%$value%'";
							}else if($category=='patient_lname'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE patient_lname LIKE '%$value%'";
							}else if($category=='patient_minitial'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE patient_minitial LIKE '%$value%'";
							}else if($category=='age'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE age LIKE '%$value%'";
							}else if($category=='sex'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE sex LIKE '%$value%'";
							}else if($category=='present_address'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE present_address LIKE '%$value%'";
							}else if($category=='provincial_address'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE provincial_address LIKE '%$value%'";
							}else if($category=='civil_status'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE civil_status LIKE '%$value%'";
							}else if($category=='birthdate'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE birthdate LIKE '%$value%'";
							}else if($category=='birthplace'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE birthplace LIKE '%$value%'";
							}else if($category=='religion'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE religion LIKE '%$value%'";
							}else if($category=='occupation'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE occupation LIKE '%$value%'";
							}else if($category=='monthly_income'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE monthly_income LIKE '%$value%'";
							}else if($category=='contact_number'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE contact_number LIKE '%$value%'";
							}else if($category=='highest_educ_attainment'){
								$value=$_GET['query'];
								$query="SELECT* FROM PATIENT WHERE highest_educ_attainment LIKE '%$value%'";
							}
						}
						if(!empty($_GET['searchcategory'])&&!empty($_GET['query'])){
							$category=$_GET['searchcategory'];
							$value=$_GET['query'];
						}else{
							$category="";
							$value="";
						}
						echo "</div><table width=\"100%\" class=\"table table-hover table-striped\"><thead><tr>";
                $new_sort_type="asc";
                    if(isset($_REQUEST['order'])){
                        $order = $_REQUEST['order'];
                        if($order=='asc'){
                            $new_sort_type = 'desc';
                        }
                    }
                    echo "<th><a href=\"recordns.php?sort=lname&order=".$new_sort_type."&query=$value&searchcategory=$category\"/>Last Name</th>
            	          <th><a href=\"recordns.php?sort=fname&order=".$new_sort_type."&query=$value&searchcategory=$category\"/>First Name</th>
                	      <th><a href=\"recordns.php?sort=minitial&order=".$new_sort_type."&query=$value&searchcategory=$category\"/>MI</th>
                    	  <th><a href=\"recordns.php?sort=age&order=".$new_sort_type."&query=$value&searchcategory=$category\"/>Age</th>
                	      <th>Sex</th>
						  <th>Present Address</th>
						  <th>Provincial Address</th>
						  <th>Civil Status</th>
						  <th>Birthdate</th>
						  <th>Birthplace</th>
						  <th>Religion</th>
						  <th>Occupation</th>
						  <th>Monthly Income</th>
						  <th>Contact Number</th>
                          <th>Highest Educational Attainment</th>
                          <th>Remark</th>
                          <th><i class=\"fa fa-pencil fa-fw\"></i></th>
                          <th><i class=\"fa fa-times fa-fw\"></i></th>
                    	  </tr>
                    	  </thead> 
                          <tbody>";
                    if(empty($_GET['sort'])&&empty($_GET['order'])){
                        $search="";
                        $order="";
                    }else{
                        $search=$_GET['sort'];
                        $order=$_GET['order'];
                        $query=$_GET['query'];
                    }
                    if($order=='asc'){
                        if($search=='age'){
                                if(empty($query)){
                                    $query="SELECT* FROM PATIENT ORDER BY age ASC";
                                    }else{
                                    $query="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY age ASC";
                                    }
                            }else if($search=='fname'){
                                if(empty($query)){
                                    $query="SELECT* FROM PATIENT ORDER BY patient_fname ASC";
                                    }else{
                                    $query="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_fname ASC";
                                    }
                            }else if($search=='lname'){
                                if(empty($query)){
                                    $query="SELECT* FROM PATIENT ORDER BY patient_lname ASC";
                                    }else{
                                    $query="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_lname ASC";
                                    }
                            }else if($search=='minitial'){
                                 if(empty($query)){
                                $query="SELECT* FROM PATIENT ORDER BY patient_minitial ASC";
                                }else{
                                $query="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_minitial ASC";
                                }
                            }
                        }else{
                            if($search=='age'){
                                if(empty($query)){
                                $query="SELECT* FROM PATIENT ORDER BY age DESC";
                                }else{
                                $query="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY age DESC";
                                }
                            }else if($search=='fname'){
                                if(empty($query)){
                                    $query="SELECT* FROM PATIENT ORDER BY patient_fname DESC";
                                    }else{
                                    $query="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_fname DESC";
                                    }
                            }else if($search=='lname'){
                                if(empty($query)){
                                    $query="SELECT* FROM PATIENT ORDER BY patient_lname DESC";
                                    }else{
                                    $query="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_lname DESC";
                                    }
                            }else if($search=='minitial'){
                                if(empty($query)){
                                    $query="SELECT* FROM PATIENT ORDER BY patient_minitial DESC";
                                    }else{
                                    $query="SELECT* FROM PATIENT WHERE $category LIKE '%$query%' ORDER BY patient_minitial DESC";
                                    }
                            }
                        }
						
						$result=mysqli_query($connect,$query);
						while ($row=mysqli_fetch_array($result)) {
							$f1=$row['patient_fname'];
							$f2=$row['patient_minitial'];
							$f3=$row['patient_lname'];
							$f4=$row['age'];
							$f5=$row['sex'];
							$f6=$row['present_address'];
							$f7=$row['provincial_address'];
							$f8=$row['civil_status'];
							$f9=$row['birthdate'];
							$f10=$row['birthplace'];
							$f11=$row['religion'];
							$f12=$row['occupation'];
							$f13=$row['monthly_income'];
							$f14=$row['contact_number'];
							$f15=$row['highest_educ_attainment'];
							$f16=$row['patient_id'];
                            $f17=$row['school_number'];
                            $remark=$row['patient_remark'];
							if($f17==1){
								echo "<tr><td>".$f3."</td><td>" .$f1."</td><td>".$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td>" .$f6."</td><td>" .$f7."</td><td>" .$f8."</td><td>" .$f9."</td><td>" .$f10."</td><td>" .$f11."</td><td>" .$f12."</td><td>" .$f13."</td><td>" .$f14."</td><td>" .$f15."</td><td>$remark</td><td><a href="."'updateNC.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a><td><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></button></td></tr>";
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
      $query="SELECT DISTINCT age AS \"unique\" FROM patient WHERE school_number=1";
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
      $query="SELECT DISTINCT sex AS \"unique\" FROM patient WHERE school_number=1";
      $result=mysqli_query($connect,$query);
      echo "<table width=\"100%\" class=\"table table-hover table-striped\"><tr><td>SEX</td><td>Count</td></tr>";
      while($items=mysqli_fetch_array($result)){
          $item=$items['unique'];
          $query2="SELECT count(*) AS \"total\" FROM PATIENT WHERE sex='$item' && school_number=1"; 
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

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
