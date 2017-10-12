<?php
include_once 'connect.php'; 
session_start();
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}
function send($sms, $to) {
    
        $sms = urlencode($sms);
      
            $url = 'http://sms.safechaser.com/httpapi/httpapi?token=2aecba933a06356672ba5848b9be58ee&sender=salwtv&number='.$to.'&route=2&type=1&sms='.$sms;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $datares = curl_exec($ch);
        curl_close($ch);
        return $datares;
    }
if(isset($_POST['submit']))
{
	
$mob=$_POST["usrmob"];
$txt=$_POST["txt"];
$msg=" $txt";
 send($msg, $mob);


}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Provider details</title>
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
							<h1>SWALLOW TV</h1>
							<span class="tag">Enjoy Your Days With Swallow.</span>
						</div>
						<nav id="nav">
							<ul>
								<li ><a href="pro_home.php">Home</a></li>
								<li ><a href="pro_ch_pswd.php">Change Password</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	
<form name="sndmsg" action="pro_mob_msg_to_user.php" method="post" id="msg"
style=" background-size: cover;
							"><br><br><br>
			<header class="major">
			<center><h3 style="color: #ffa500;">Send Message To User </h3></center>
			</header>

    <select name="usrmob" required="" style="width: 310px;"><option>----Select User----</option>
			
            <?php
                
                $sql = "SELECT `reg_id`, `fname`, `mob_no` FROM `register` WHERE `type_id`='3';";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) 
                   {
                       while($row = mysqli_fetch_assoc($result)) 
                          {
                              $no=$row["mob_no"];
							  $name=$row["fname"];
            ?>

            <option value="<?php echo $no; ?>"><?php echo $name;?></option>
                          <?php
						echo $no;  }} ?>
        </select><br><br>
		<textarea name="txt"  placeholder="Enter Message " required="" style="width: 310px;"></textarea><br></br>
		<input type='submit' value='Send' name="submit"><br><br>			
</form>

	
</div></center>
	
				</section>
				
	
<div id="footer" class="wrapper style2">

			<section>
					<header >
						<h2>SWALLOW TV</h2><br>
						<h3>Enjoy Your Days With Swallow.</h3><br><br><br>
						<h5>Powered by Tearm swallow,  &nbspswallow777kerala@ac.in &nbsp ph: +91 8846521474</h5>
						
					</header>
					
				</section>
		</div>
	</body>
</html>