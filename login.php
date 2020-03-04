<?php

session_start();


$con = mysqli_connect('localhost','root');
 

mysqli_select_db($con,'projectdatabase');


$email = $_POST ['email'];
$password = $_POST ['pass'];


$q = "select * from registration where email = '$email' && password = '$password'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($email =="jyotymam@eschedule" && $password == "123"){
	header('location: teachersroutine.php');
}

else if($email=="kbsir@eschedule" && $password == "1234"){
	header('location: kbmanandhar.php');
}

else if($email=="spsir@eschedule.com" && $password == "12345"){
	header('location: santoshparajuli.php');
}

else if($num == 1){
  header('location:afterlogin.php');
}
else{

header('location:frontpage.php');

}

?>



