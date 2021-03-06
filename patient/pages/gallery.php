
<?php $aid=$_REQUEST['id']; ?>
<!DOCTYPE html>

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
	
	<link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />
	
	<meta charset="utf-8">
	

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />
	<!-- The Menu -->
	<link href="stylesheets/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<!-- Optional - Adds useful class to manipulate icon font display -->
	<link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">

	
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
                <h1 class="page-header">Photos</h1>
			 <?php  
include 'connect.php';
$sql = "SELECT * FROM tbl_album where albumid='$aid'";
$rs_result = mysql_query ($sql,$con);



		
####### Fetch Results From Table ########

while ($row = mysql_fetch_assoc($rs_result)) 
{
$aimage=$row['image'];
$aname=$row['name'];
$adesc=$row['adesc'];
$astatus=$row['status'];

?>
				<h2>
				<?php echo "$aname"; ?> 
				</h2>
            
             
           			 
		 </div>		 
	 </div>
	 <div class="gallery-text">
		 
	 </div>

		<div class="container">
			<div class="one-whole text-center">
            
            <p><?php echo "$adesc"; ?></p>
				<?php } ?>
                <hr style="border:solid 1px;margin-top:0px;">
<p style="margin-left:75px">
				<?php  
		include "connect.php";

$sql = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
$num_rows = mysql_num_rows(mysql_query($sql));		
####### Fetch Results From Table ########

$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
$gimage=$row['gimages'];

?>	
	
<?php	echo "<a href='gupload/$gimage' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='gcatch/$gimage' class='inline-block' /></a> ";?>			
<?php } ?>				
</p>
				
</div>			
</div>
<div class="clearfix"></div>
</div>	
</div>	





	
	<!-- Bottom Footer Section
	================================================== -->
<div class="bottom_footer_section">
	<div class="container">
	<div class="sixteen columns bottom_line_dev">	
		
<br/><br/>		
<!-- <hr style="border:solid 1px;margin-top:0px"> -->
<br/>
<br/>
<br/>
		</div>	
        
	</div>	
</div>	
				
							
            </div>
           
             	<!-- Primary Page Layout
	================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="litebox-master/assets/js/smoothscroll.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/images-loaded.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/tipsy.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/backbone.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/litebox.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			$('.litebox').liteBox();
		</script>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

	
	
	
	
</body>

</html>
