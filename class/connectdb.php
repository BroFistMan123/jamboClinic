<!-- VERSION 1.2 DB CONNECTION -->

<?php

	require_once('functions.php');

	class connectdb
	{	
		public $currentuser;
		public $db;
		function __construct($username,$password,$database)
		{
			$user=$username;
			$pass=$password;
			$this->db=$database;
$this->currentuser='';

			$this->db = new mysqli('localhost',$user,$pass,$this->db) or die("unable to connect");
			if ($this->db->connect_error) 
			{
				die("connection failed; ".$db-> connect_error);
			}
		}
		function setUsername($username){
			$this->currentuser=$username;
		}
		function typeUser($id){
				$sql3 = "SELECT 'user_status' FROM users WHERE admin_id='$id' limit 1";
				$result = mysqli_query($this->db, $sql);
if ($result !== false) {
    $value = mysqli_fetch_field($result);
    $_SESSION['admin'] = $value;
}

		}
		function getFullName($id){
       $conn=mysqli_connect("localhost","root","", "jclinic");
                  if($conn->connect_error){
                    die("connection failed: " .$conn->error);
                  }
             $sql=" SELECT patient_fname, patient_mname, patient_lname from `patient` WHERE `patient_caseno`=$id";
               $result=$conn->query($sql);
               $id;
               $row;
$nice="";
               if($result->num_rows>0){
               while($row=$result->fetch_assoc()){

$nice=" ".$row['patient_fname']." ".$row['patient_mname']." ".$row['patient_lname'];
			   }
			   
			}
			return $nice;

		}
		
		function loginAccountUser($dbname,$username,$password)
		{
$sql= "SELECT user_priv FROM $dbname WHERE admin_username='$username' AND `admin_password`='$password'  AND `user_status`='active' limit 1";
$s1= "SELECT admin_id, user_status FROM $dbname WHERE admin_username='$username' AND `admin_password`='$password' AND `user_status`='void'";

$result = mysqli_query($this->db,$sql);
$value = mysqli_fetch_object($result);
	$result1=mysqli_query($this->db,$s1);
		$num1=mysqli_num_rows($result1);
			$num3=mysqli_num_rows($result);
			$s2= "SELECT user_priv FROM $dbname WHERE `admin_username`='$username' AND admin_password!='$password' limit 1";
$result3 = mysqli_query($this->db,$s2);
$num4=mysqli_num_rows($result3);
if($num1>0){
	return 5000;
}else if($num3>0){
$_SESSION['current_priv'] = $value->user_priv;
return 1;
}else if($num4>0){
return 2000;
}
else{
	return 0;
}
		}
		function loginAccount($dbname,$username,$password)
		{
				$sql3 = "SELECT 'user_status' FROM users WHERE admin_username='$username' AND admin_password='$password'";
				$result = mysqli_query($this->db, $sql3);
if ($result !== false) {
	$value = mysqli_fetch_field($result);
	if($value="administrator"){
	$_SESSION['admin'] = $value;
	}else{

	}
}
			$s= "SELECT admin_id, user_status FROM $dbname WHERE admin_username='$username' AND admin_password='$password'";
			$s1= "SELECT admin_id, user_status FROM $dbname WHERE admin_username='$username' AND admin_password='$password' AND user_status='void'";
			$handle='';
			$result=mysqli_query($this->db,$s);
			$result1=mysqli_query($this->db,$s1);
			$num=mysqli_num_rows($result);
			$num1=mysqli_num_rows($result1);

			$this->setUsername($username);
			if($num1>0){
return 5000;
			}else{
				
				return $num;
			}
		//	$id=mysqli_fetch_assoc($result);
			
		}
		
		function checkAllPregnancies($dbname)
		{
			$s= "SELECT patient_caseno FROM $dbname";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			

			
		//	$id=mysqli_fetch_assoc($result);
			return $num;
		}
			function getTCBDue($dbname,$month,$year,$day)
		{
			
			$nice=$day."/".$month."/".$year;
	$s= "SELECT checkup_tcb FROM $dbname WHERE `checkup_tcb` LIKE '%$nice%' ";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			

			
		//	$id=mysqli_fetch_assoc($result);
			return $num;
		}
		function getDaily($dbname,$month,$year,$day)
		{
			if($dbname=="patient_checkup"){
$nice=$day."/".$month."/".$year;
	$s= "SELECT checkup_doa FROM $dbname WHERE `checkup_doa` LIKE '%$nice%' ";
			}else if($dbname=="patient_newborn")
			{
				$nice=$year."-".$month."-".$day;
	$s= "SELECT newborn_dd FROM $dbname WHERE `newborn_dd` LIKE '%$nice%' ";
			}else if( $dbname=="patient_subcheckup")
			{
				$nice=$day."/".$month."/".$year;
	$s= "SELECT checkup_doa FROM $dbname WHERE `checkup_doa` LIKE '%$nice%' ";
			}
		
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			

			
		//	$id=mysqli_fetch_assoc($result);
			return $num;
		}
			function getMonthly($dbname,$month,$year)
		{
			if($dbname=="patient_checkup" ){
$nice=$month."/".$year;
	$s= "SELECT checkup_doa FROM $dbname WHERE `checkup_doa` LIKE '%$nice%' ";
			}else if($dbname=="patient_newborn")
			{
				$nice=$year."-".$month;
	$s= "SELECT newborn_dd FROM $dbname WHERE `newborn_dd` LIKE '%$nice%' ";
			} else if( $dbname=="patient_subcheckup"){
$nice=$month."/".$year;
	$s= "SELECT checkup_doa FROM $dbname WHERE `checkup_doa` LIKE '%$nice%' ";
			}
		
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			

			
		//	$id=mysqli_fetch_assoc($result);
			return $num;
		}
		function getAge($dbname,$id)
		{
			$s= "SELECT patient_age
FROM `patient
` WHERE patient_caseno =$id";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			

			
		//	$id=mysqli_fetch_assoc($result);
			return $num;
		}
			function getDelivery($id)
		{
			$s= "SELECT * FROM `patient_newborn` WHERE newborn_caseno='$id' ORDER BY `newborn_dd` DESC limit 1";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			

			
		//	$id=mysqli_fetch_assoc($result);
			return $num;
		}
		function checkCheckup($dbname,$id)
		{
			$s= "SELECT * FROM $dbname WHERE 'patient_caseno'=$id";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			

			
		//	$id=mysqli_fetch_assoc($result);
			return $num;
		}
		function checkCheckups($dbname)
		{
			$s= "SELECT * FROM $dbname";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			

			
		//	$id=mysqli_fetch_assoc($result);
			return $num;
		}
		function checkAccountIfExist($dbname,$username)
		{
			$s= "SELECT id FROM $dbname WHERE username='$username'";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			return $num;
		}
		function checkAccountIfExistUser($dbname,$username)
		{
			$s= "SELECT admin_id FROM $dbname WHERE admin_username='$username'";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			return $num;
		}
		function checkAccountIfExistAdd($dbname,$first_name,$middle_name,$last_name)
		{
			$s= "SELECT patient_caseno FROM $dbname WHERE patient_fname='$first_name' AND patient_mname='$middle_name'AND patient_lname='$last_name'";
			$result=mysqli_query($this->db,$s);
			$num=mysqli_num_rows($result);
			return $num;
		}
		
		function insertAddPatient($dbname,$first_name,$middle_name,$last_name,$nickname,$age,$religion,$blood_type,$menarche,$birthday,$civil_status,$occupation,$phone,$address,$husband_name,$husband_phone,$contact_name,$contact_phone)
		{
			$s= "INSERT INTO $dbname (`patient_bloodtype`, `patient_religion`, `patient_menarche`, `patient_age`, `patient_lname`, `patient_fname`, `patient_mname`, `patient_nname`, `patient_bday`, `patient_cstat`, `patient_occup`, `patient_phone`, `patient_address`, `patient_husname`, `patient_contnum`, `patient_phonehus`, `patient_phoneper`) VALUES ('$blood_type','$religion','$menarche','$age','$last_name','$first_name','$middle_name','$nickname','$birthday','$civil_status','$occupation','$phone','$address','$husband_name','$contact_phone','$husband_phone','$contact_name')";
			
			
if (mysqli_query($this->db, $s)) {
    return "New record created successfully";
} else {
    return "Error: " . $s . "<br>" . mysqli_error($this->db);
}


		}


		function resultRowAsArray($dbname,$id){


			$value=[];

			$sql="SELECT * FROM $dbname WHERE account_id=$id";
			$result=mysqli_query($this->db,$sql);
			$counter=0;
			while ($row = mysqli_fetch_row($result))
			{	
				for ($i=0; $i <count($row); $i++) { 
					$value[$counter][$i]=$row[$i];
				}
				$counter++;
			}
			
			return $value;
			
		}
 
		function insertData($dbname,$arrayInfo)
		{
			$colRow=explode("/",queryArranger($arrayInfo));
			$this->db->query(
			"INSERT INTO `$dbname` ($colRow[1]) VALUES 
			($colRow[0])");

		}

		function updatedataID($dbname,$data,$id)
		{	
			$values=queryArrangerForUpdate($data);

			 mysqli_query($this->db,("UPDATE `$dbname` SET
			 $values 
			 WHERE admin_username=$data2"));

		}
		function updatedataUSERNAME($dbname,$data,$username)
		{	
			$values=queryArrangerForUpdate($data);
			echo $values;
			 mysqli_query($this->db,("UPDATE `$dbname` SET
			 $values 
			 WHERE username='$username'"));

		}
		function deleteUserData($dbname,$id)
		{	
			 mysqli_query($this->db,("DELETE FROM `$dbname` WHERE admin_id=$id"));
				
		}

    }


?>