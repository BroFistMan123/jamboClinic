<?php
require_once('class/connectdb.php');
    require_once('class/functions.php');
    session_start();
			$conn = new mysqli('localhost', 'root', '','jclinic');
			
		$data='';
			$condb=new connectdb('root','','jclinic'); 
			$data1=$_POST['answer'];
				$data2=$_POST['answer2'];
			if($data1=="active"){
				$data="inactive";
			}else{
				$data="active";
			}
			//Not finished. Id needs to be found
$sql= "UPDATE `users` SET  `user_status`='$data' WHERE admin_username=$data2";
if ($conn->query($sql) === TRUE) {
  
				$_SESSION['addUser']="addUser";
	echo '<script type="text/javascript">'; 
echo 'window.location = "userman.php";';
echo '</script>';
			
            exit();
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	
}	
?>