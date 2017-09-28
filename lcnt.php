<?php
include_once 'connect.php';
session_start();
if(isset($_POST['submit']))
{
	
$a=$_POST["uname"];
$b=$_POST["pswd"];
}
//`username`, `password`, `type_id`,`login_id`
$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['login_id'];
	
	?>
	
	<?php
	if($a==  $row['username']&&$b==$row['password']&&$row['type_id']=='3')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='3';
		 $_SESSION['id']=$i;
		 
		 $sql1="UPDATE `login` SET `log_stat`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:usrhme.php');
		 }
	elseif($a==  $row['username']&&$b==$row['password']&&$row['type_id']=='1')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='1';
		 $_SESSION['id']=$i;
		 
		 $sql1="UPDATE `login` SET `log_stat`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:ad_home.php');
		 }
		 
	elseif($a==  $row['username']&&$b==$row['password']&&$row['type_id']=='2')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='2';
		 $_SESSION['id']=$i;
		 
		 $sql1="UPDATE `login` SET `log_stat`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:prohme.php');
		 }    
		 
	else{
		echo "<script>if(confirm('Username and Password are incorect!!!!')){document.location.href='login.php'}else{document.location.href='index.php'};</script>";
	     }
		 
	?>	
	
	<?php

}
?> 
