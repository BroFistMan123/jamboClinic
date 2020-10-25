<?php 
require_once('login.php');
	require_once('class/connectdb.php');
	require_once('class/functions.php');
;

if (isset($_POST['reg_logoutadmin'])) {
	
unset($_SESSION['ongoingsession']);
session_destroy();

header("Location: login.php");
	}
	
if (isset($_POST['reg_loginadmin'])) {
	

	$username= $_POST['username'];
	
	$pass= $_POST['password'];
	$condb= new connectdb('root','','jclinic');

	$number=$condb->loginAccountUser('users',$username,$pass);
	$number1=$condb->checkAllPregnancies('patient');
		$number2=$condb->checkCheckUps('patient_checkup');
		
		  $_SESSION["checkupCount"] = $number2;
	  $_SESSION["pregnantcount"] = $number1;
	if($number==1 ){

			$_SESSION["currentuser"] = $username;
			$_SESSION["ongoingsession"] = $username;
		header("Location: index.php");
	}else if($number==5000){

		$_SESSION['report']='bobo';
header("Location: login.php");


	}else if($number==2000){

	$_SESSION['incpass']='bobo';
header("Location: login.php");
	}else{
		$_SESSION['notexi']='bobo';
header("Location: login.php");
	}
	
}
function verifyUser($username,$pass,$dbname){
$sql= "SELECT * FROM users;";
$result= mysqli_query($conn, $sql);
$resultCheck=mysqli_num_rows();

if($resultCheck>0){
while($row=mysqli_fetch_assoc($result)){
echo $row['admin_username'] . "<br>";
	
}

}
}
function viewPatients($tablename){
	
	$number=$condb->loginAccount('users',$username,$pass);
}
?>
