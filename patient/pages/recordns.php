
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
<nav class="navbar navbar-default navbar-static-fixed" role="navigation" style="margin-bottom: 0">
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
    <div id="page-wrapper">
        <div class="row">
        <button type="button" class="btn btn-primary btn-md col-md-offset-11" data-toggle="modal" data-target="#myModal">
						Summary
					</button>
			
						<?php
						$connect = mysqli_connect('localhost','root','');
						if(!$connect){
							echo 'No connection to server';
						}
						if(!mysqli_select_db($connect,'lukedb')){
							echo 'Database "lukedb" is not selected';
						}
						$query="SELECT* FROM patient where school_number=1";
						echo "<div class=\"table-responsive\"><table id=\"notStudent\" class=\"table table-hover table-striped\"><thead><tr>";
                    if(isset($_REQUEST['order'])){
                        $order = $_REQUEST['order'];
                        if($order=='asc'){
                            $new_sort_type = 'desc';
                        }
                    }
                    echo "<td>Last Name</td>
            	          <td>First Name</td>
                	      <td>MI</td>
                    	  <td>Age</td>
                	      <td>Sex</td>
						  <td>Present Address</td>
						  <td>Provincial Address</td>
						  <td>Civil Status</td>
						  <td>Birthdate</td>
						  <td>Birthplace</td>
						  <td>Religion</td>
						  <td>Occupation</td>
						  <td>Monthly Income</td>
						  <td>Contact Number</td>
                          <td>Highest Educational Attainment</td>
                          <td>Remark</td>
                          <td>Action</td>
                    	  </tr>
                    	  </thead> 
                          <tbody>";
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
								echo "<tr><td>".$f3."</td><td>" .$f1."</td><td>".$f2."</td><td>" .$f4."</td><td>" .$f5."</td><td>" .$f6."</td><td>" .$f7."</td><td>" .$f8."</td><td>" .$f9."</td><td>" .$f10."</td><td>" .$f11."</td><td>" .$f12."</td><td>" .$f13."</td><td>" .$f14."</td><td>" .$f15."</td><td>$remark</td><td><a href="."'updateNC.php?id=".$f16."';"."><i class='fa fa-pencil fa-fw'></i></a><a href=\"delete.php?id=$f16\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times-circle fa-fw'></i></a><a href=\"viewmore.php?pid=$f16\"><i class='fa fa-external-link'></i></td></tr>";
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
      echo "</table></div>";
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

    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<script>
    $(document).ready(function(){
    $('#notStudent').DataTable();
    });
</script>