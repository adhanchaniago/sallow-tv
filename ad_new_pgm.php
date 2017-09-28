<?php
include_once 'connect.php'; 
session_start();
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}

if(isset($_POST['add']))
{
$d = date('d/m/y');
$ch=$_POST["chnl"];
$pi=$_POST["picon"];
$pv=$_POST["pvdo"];
$pd=$_POST["pgmdet"];


$st="0";

$qury="INSERT INTO `programe`(`pgm_caption`, `added_date`, `pgm_path`,
 `channel_id`, `status`, `icon_path`) VALUES
 ('$pd','$d','$pv','$ch','$st','$pi')";
 
 $a=mysqli_query($con,$qury);
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Left Sidebar - Phase Shift by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a href="index.html">SALLOW TV</a></h1>
							<span class="tag">Enjoy ur days with Sallow.</span>
						</div>
						<nav id="nav">
							<ul>
								<li ><a href="ad_home.php">Home</a></li>
								<li><a href="ad_new_pgm.php" >Add Program</a></li>
								<li><a href="ad_pgm_det_edit.php" >Program Details</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	<div>
<form name="adpgm" action="ad_new_pgm.php" method="post" id="form"
			style="border:2px solid #DC6180;
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							"><br>
							<header class="major">
										<center><h3>Add new programs/shows</h3></center>
										
									</header><br><br>
									<label>Select Channel : </label>
		<select name="chnl" style="width:150px;">
		<option>--Select--</option>
            <?php
                
                $sql2 = "SELECT `channel_id`, `c_category_id`,
				`channel_type_id`, `c_name`, `logo`, `discripition`, `status` FROM `channel` ;";
                $result2 = mysqli_query($con, $sql2);
                if (mysqli_num_rows($result2) > 0) 
                   {
                       while($row = mysqli_fetch_assoc($result2)) 
                          {
                            $id2=$row["channel_id"]; 
							$cname=$row["c_name"];
            ?>

            <option value="<?php echo $id2; ?>"><?php echo $cname; ?></option>
                          <?php
						  } }?>
        </select> <br><br>
		<input type="text" name="pgmdet" placeholder="Program Caption" required=" " style="width: 310px;"><br><br>
	<label>Choose program video: </label><input type="file" name="picon" id="fileToUpload" accept="video/*"><br><br>
	<label>Choose program logo : </label><input type="file" name="pvdo" id="fileToUpload" accept="image/*"><br><br>
		<input type='submit' name="add" value='Add Program'></form></div>

	
</div></center>

					
						
					
					
				</section>
	
<div id="footer" class="wrapper style2">
			<div class="container" style="height: 15px;">
				<section>
					<header class="major">
						<h4>SALLOW TV</h4>
						<span class="byline">Enjoy ur days with Sallow.</span>
						
					</header>
					
				</section>
			</div>
		</div>
	</body>
</html>