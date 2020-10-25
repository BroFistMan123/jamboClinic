<?php 

	require_once('class/connectdb.php');
	require_once('class/functions.php');
;
if (isset($_POST['upd_delrec'])) {
	$newborn_id=$_POST['newborn'];
	session_start();
		$newborn_sterile=''; $newborn_degree='none';
			$newborn_tod='';
			$group3='';
		if(isset($_POST['newborn_sterile'])){
			$newborn_sterile="yes";
		}else{
			$newborn_sterile="no";
		}
		if(isset($_POST['newborn_tod'])){
			$newborn_tod="yes";
		}else{
			$newborn_tod="no";
		}
		
		if(isset($_POST['group3'])){
			$group3=$_POST['group3'];
				$newborn_degree=$_POST['newborn_degree'];
		}else{
			$group3="no";

		}
			$newborn_name=$_POST['newborn_name'];
			$newborn_midwife=$_POST['newborn_midwife'];
		
				$newborn_caseno=$_POST['newborn_caseno'];
					$newborn_bedno=$_POST['newborn_bedno'];
					$newborn_dd=$_POST['newborn_dd'];
						$newborn_time=$_POST['newborn_time'];
						
								$newborn_delby=$_POST['newborn_delby'];
									$newborn_ass=$_POST['newborn_ass'];
									
											$oxy_time=$_POST['oxy_time'];
												$oxy_drug=$_POST['oxy_drug'];
													$group1=$_POST['group1'];
													$group2=$_POST['group2'];
													
													$group4=$_POST['group4'];
													$newborn_timeout=$_POST['newborn_timeout'];
													$group5=$_POST['group5'];
													$newborn_agent=$_POST['newborn_agent'];
													$newborn_dosage=$_POST['newborn_dosage'];
													$newborn_method=$_POST['newborn_method'];
													$group6=$_POST['group6'];
													$group7=$_POST['group7'];
													$newborn_age=$_POST['newborn_age'];
													$newborn_dat=$_POST['newborn_dat'];
													$newborn_comment=$_POST['newborn_comment'];
												
	
		$tabled=array("newborn_name","newborn_midwife","newborn_caseno","newborn_bedno",
"newborn_dd","newborn_time","newborn_degree","newborn_sterile","newborn_delby","newborn_ass",
"newborn_tod","oxy_time", "oxy_drug","group1","group2",
"group3",
"group4","newborn_timeout","group5","newborn_agent","newborn_dosage",
"newborn_method","group6","group7","newborn_age","newborn_dat",
"newborn_comment");
$column=implode(", ",$tabled);
echo count($tabled);
	$conn = new mysqli('localhost', 'root', '','jclinic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `patient_newborn` SET `newborn_name`='$newborn_name',`newborn_midwife`='$newborn_midwife',`newborn_bedno`='$newborn_bedno',`newborn_caseno`='$newborn_caseno',`newborn_dd`='$newborn_dd',`newborn_time`='$newborn_time',`newborn_degree`='$newborn_degree',`newborn_sterile`='$newborn_sterile',`newborn_delby`='$newborn_delby',`newborn_ass`='$newborn_ass',`newborn_tod`='$newborn_tod',`oxy_time`='$oxy_time',`oxy_drug`='$oxy_drug',`group1`='$group1',`group2`='$group2',`group3`='$group3',`group4`='$group4',`newborn_timeout`='$newborn_timeout',`group5`='$group5',`newborn_agent`='$newborn_agent',`newborn_dosage`='$newborn_dosage',`newborn_method`='$newborn_method',`group6`='$group6',`group7`='$group7',`newborn_age`='$newborn_age',`newborn_dat`='$newborn_dat',`newborn_comment`='$newborn_comment' WHERE `newborn_id`='$newborn_id'";
// $_SESSION['addNewborn']="updatedUser";
// 	echo '<script type="text/javascript">'; 
// echo 'window.location = "newrec.php";';
// echo '</script>';
if ($conn->query($sql) === TRUE) {
  
				$_SESSION['added']="ok";
	echo '<script type="text/javascript">'; 
echo 'window.location = "newrec.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	


	}
if (isset($_POST['reg_logoutadmin'])) {
	unset($_SESSION['ongoingsession']);
session_destroy();

header("Location: login.php");
	}
if (isset($_POST['upd_user'])) {
	session_start();
$userid=$_POST['userid'];
$inputname=$_POST['user_name'];
	$user_name=$_POST['username2'];
	$password=$_POST['password'];
		$privilege=$_POST['privilege'];
			$status=$_POST['status'];
	$conn = new mysqli('localhost', 'root', '','jclinic');
		
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$condb=new connectdb('root','','jclinic');
		$check=$condb->checkAccountIfExistUser('users',$inputname);
		if($check==1 && $inputname!=$user_name){
	$_SESSION['accountEx']="accountEx";
	echo '<script type="text/javascript">'; 
echo 'window.location = "userman.php";';
echo '</script>';
			
            exit();
		}else{
$sql = "UPDATE `users` SET `admin_username`='$inputname',`admin_password`='$password',`user_priv`='$privilege',`user_status`='$status' WHERE `admin_id`='$userid'";



if ($conn->query($sql) === TRUE) {
  
				$_SESSION['updUserRef']="updatedUser";
	echo '<script type="text/javascript">'; 
echo 'window.location = "login.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	

	}
}
		if (isset($_POST['del_user'])) {
			session_start();
$userid=$_POST['userid'];
$condb=new connectdb('root','','jclinic');
	$condb->deleteUserData('users',$userid);
			$_SESSION['del_user']="delser";
				echo '<script type="text/javascript">'; 
echo 'window.location = "login.php";';
echo '</script>';
exit();
		}

	if (isset($_POST['upd_checkup'])) {
session_start();

	$caseno=$_POST['patient_caseno'];
		$patient_ldd=$_POST['patient_ldd'];
			$patient_lmp=$_POST['patient_lmp'];
				$patient_edc=$_POST['patient_edc'];
					$patient_doa=$_POST['patient_doa'];
						$patient_toa=$_POST['patient_toa'];
							$patient_bp=$_POST['patient_bp'];
								$patient_weight=$_POST['patient_weight'];
									$patient_temp=$_POST['patient_temp'];
										$patient_pr=$_POST['patient_pr'];
											$patient_rr=$_POST['patient_rr'];
												$patient_fh=$_POST['patient_fh'];
													$patient_fhb=$_POST['patient_fhb'];
													$patient_aog=$_POST['patient_aog'];
													$patient_location=$_POST['patient_loc'];
													$patient_present=$_POST['patient_pres'];
													$patient_pallar=$_POST['patient_pallor'];
													$patient_edema=$_POST['patient_edema'];
														$patient_remarks=$_POST['patient_remarks'];
															$patient_tcb=$_POST['patient_tcb'];
																		$conn = new mysqli('localhost', 'root', '','jclinic');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE `patient_checkup` SET `checkup_ldd`='$patient_ldd',`checkup_lmp`='$patient_lmp',`checkup_edc`='$patient_edc',`checkup_doa`='$patient_doa',`checkup_toa`='$patient_toa',`checkup_bp`='$patient_bp',`checkup_weight`='$patient_weight',`checkup_temp`='$patient_temp',`checkup_pr`='$patient_pr',`checkup_rr`='$patient_rr',`checkup_fh`='$patient_fh',`checkup_fhb`='$patient_fhb',`checkup_aog`='$patient_aog',`checkup_location`='$patient_location',`checkup_present`='$patient_present',`checkup_pallar`='$patient_pallar',`checkup_edema`='$patient_edema',`checkup_remarks`='$patient_remarks',`checkup_tcb`='$patient_tcb' WHERE checkup_id=$caseno";



if ($conn->query($sql) === TRUE) {
  
				$_SESSION['addCheckup']="addCheckup";
	echo '<script type="text/javascript">'; 
echo 'window.location = "pregrec.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	

	}
if (isset($_POST['upd_patient'])) {
session_start();
		$conn = new mysqli('localhost', 'root', '','jclinic');
// Check connection
	$caseno=$_POST['lol'];
		$first_name=$_POST['first_name'];
			$middle_name=$_POST['middle_name'];
				$last_name=$_POST['last_name'];
					$nickname=$_POST['nickname'];
						$age=$_POST['age'];
							$religion=$_POST['religion'];
								$blood_type=$_POST['blood_type'];
									$menarche=$_POST['menarche'];
										$birthday=$_POST['birthday'];
											$civil_status=$_POST['civil_status'];
												$occupation=$_POST['occupation'];
													$phone=$_POST['phone'];
													$address=$_POST['address'];
													$husband_name=$_POST['husband_name'];
													$husband_phone=$_POST['husband_phone'];
													$contact_name=$_POST['contact_name'];
													$contact_phone=$_POST['contact_phone'];
													$patient_i1=$_POST['group1'];
$patient_i2=$_POST['group2'];
$patient_i3=$_POST['group3'];
$patient_i4=$_POST['group4'];
$patient_i5=$_POST['group5'];
$patient_i6=$_POST['group6'];
$patient_i7=$_POST['group7'];
$patient_i8=$_POST['group8'];
$patient_i9=$_POST['group9'];
$patient_i10=$_POST['group10'];
$patient_i11=$_POST['group11'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql= "UPDATE `patient` SET 
                  `patient_bloodtype`='$blood_type',`patient_religion`='$religion',
                  `patient_menarche`='	$menarche',`patient_age`='$age',
                  `patient_lname`='$last_name',`patient_fname`='$first_name',
                  `patient_mname`='$middle_name',`patient_nname`='$nickname',
                  `patient_bday`='$birthday',`patient_cstat`='$civil_status',
                  `patient_occup`='$occupation',`patient_phone`='	$phone',
                  `patient_address`='$address',`patient_husname`='$husband_name',
                  `patient_contnum`='$contact_phone',`patient_phonehus`='$husband_phone',
                  `patient_phoneper`=	'$contact_name',`patient_i1`='$patient_i1',
                  `patient_i2`='$patient_i2',`patient_i3`='$patient_i3',
                  `patient_i4`='$patient_i4',`patient_i5`='$patient_i5',
                  `patient_i6`='$patient_i6',`patient_i7`='$patient_i7',
                  `patient_i8`='$patient_i8',`patient_i9`='$patient_i9',
                  `patient_i10`='$patient_i10',`patient_i11`='$patient_i1' WHERE patient_caseno=$caseno";


if ($conn->query($sql) === TRUE) {
  
				$_SESSION['addPatient']="addCheckup";
	echo '<script type="text/javascript">'; 
echo 'window.location = "pregrec.php";';
echo '</script>';
			
            exit();
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	
}	


	}
	if (isset($_POST['add_newborn'])) {
		session_start();
		$newborn_sterile=''; $newborn_degree='none';
			$newborn_tod='';
			$group3='';
		if(isset($_POST['newborn_sterile'])){
			$newborn_sterile="yes";
		}else{
			$newborn_sterile="no";
		}
		if(isset($_POST['newborn_tod'])){
			$newborn_tod="yes";
		}else{
			$newborn_tod="no";
		}
		
		if(isset($_POST['group3'])){
			$group3=$_POST['group3'];
				$newborn_degree=$_POST['newborn_degree'];
		}else{
			$group3="no";

		}
			$newborn_name=$_POST['newborn_name'];
			$newborn_midwife=$_POST['newborn_midwife'];
		
				$newborn_caseno=$_POST['newborn_caseno'];
					$newborn_bedno=$_POST['newborn_bedno'];
					$newborn_dd=$_POST['newborn_dd'];
						$newborn_time=$_POST['newborn_time'];
						
								$newborn_delby=$_POST['newborn_delby'];
									$newborn_ass=$_POST['newborn_ass'];
									
											$oxy_time=$_POST['oxy_time'];
												$oxy_drug=$_POST['oxy_drug'];
													$group1=$_POST['group1'];
													$group2=$_POST['group2'];
													
													$group4=$_POST['group4'];
													$newborn_timeout=$_POST['newborn_timeout'];
													$group5=$_POST['group5'];
													$newborn_agent=$_POST['newborn_agent'];
													$newborn_dosage=$_POST['newborn_dosage'];
													$newborn_method=$_POST['newborn_method'];
													$group6=$_POST['group6'];
													$group7=$_POST['group7'];
													$newborn_age=$_POST['newborn_age'];
													$newborn_dat=$_POST['newborn_dat'];
													$newborn_comment=$_POST['newborn_comment'];
												
	
		$tabled=array("newborn_name","newborn_midwife","newborn_caseno","newborn_bedno",
"newborn_dd","newborn_time","newborn_degree","newborn_sterile","newborn_delby","newborn_ass",
"newborn_tod","oxy_time", "oxy_drug","group1","group2",
"group3",
"group4","newborn_timeout","group5","newborn_agent","newborn_dosage",
"newborn_method","group6","group7","newborn_age","newborn_dat",
"newborn_comment");
$column=implode(", ",$tabled);
echo count($tabled);
	$conn = new mysqli('localhost', 'root', '','jclinic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `patient_newborn` ($column) 
					VALUES ('$newborn_name','$newborn_midwife','$newborn_caseno','$newborn_bedno','$newborn_dd','$newborn_time','$newborn_degree','$newborn_sterile','$newborn_delby','$newborn_ass','$newborn_tod','$oxy_time','$oxy_drug','$group1','$group2','$group3','$group4','$newborn_timeout','$group5','$newborn_agent','$newborn_dosage','$newborn_method','$group6','$group7','$newborn_age','$newborn_dat','$newborn_comment')";
// $_SESSION['addNewborn']="updatedUser";
// 	echo '<script type="text/javascript">'; 
// echo 'window.location = "newrec.php";';
// echo '</script>';
if ($conn->query($sql) === TRUE) {
  
				$_SESSION['added']="ok";
	echo '<script type="text/javascript">'; 
echo 'window.location = "addpatient.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	

}
	
	
	if (isset($_POST['reg_user'])) {
		session_start();
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];
		$privilege=$_POST['privilege'];
		$status=$_POST['status'];
		$condb=new connectdb('root','','jclinic');
		$check=$condb->checkAccountIfExistUser('users',$user_name);
		if($check>0){
				$_SESSION["wrong"]="naa na sulod HAHAHAH";
echo '<script type="text/javascript">'; 
echo 'window.location = "userman.php";';
echo '</script>';
		}else{
			//Add a user
			$addUser=$condb->insertData('users',array("admin_username"=>$user_name,
	"admin_password"=>$password,"user_priv"=>$privilege,"user_status"=>$status	));
	
				$_SESSION['add_User']="updatedUser";
	echo '<script type="text/javascript">'; 
echo 'window.location = "userman.php";';
echo '</script>';
			
            exit();
		}
	}
	if (isset($_POST['reg_patient'])) {
		session_start();

		$first_name=$_POST['first_name'];
			$middle_name=$_POST['middle_name'];
				$last_name=$_POST['last_name'];
					$nickname=$_POST['nickname'];
						$age=$_POST['age'];
							$religion=$_POST['religion'];
								$blood_type=$_POST['blood_type'];
									$menarche=$_POST['menarche'];
										$birthday=$_POST['birthday'];
											$civil_status=$_POST['civil_status'];
												$occupation=$_POST['occupation'];
													$phone=$_POST['phone'];
													$address=$_POST['address'];
													$husband_name=$_POST['husband_name'];
													$husband_phone=$_POST['husband_phone'];
													$contact_name=$_POST['contact_name'];
													$contact_phone=$_POST['contact_phone'];
													
				$condb=new connectdb('root','','jclinic');
				$checkAccount=$condb->checkAccountIfExistAdd('patient',$first_name,$middle_name,$last_name);
				  
				if($checkAccount!=0){
                    //alert Account already exist
				
					$_SESSION["wrong"]="naa na sulod HAHAHAH";
echo '<script type="text/javascript">'; 
echo 'window.location = "addpatient.php";';
echo '</script>';
exit();
				}else{
$tabled2=array($first_name,$middle_name,$last_name,$nickname,$age,$religion,$blood_type,$menarche,$birthday,$civil_status,$occupation,$phone,$address,$husband_name,$husband_phone,$contact_phone,$contact_name);
				
					$tabled = array("Tuberculosis(14 days or more of cough)", "Heart Disease(Shortness of Breath)", "Diabetes(High Blood Sugar)","Hypertension(High Blood Pressure)"
					, "Bronchial Asthma","Urinary Tract Infection","Smoking","Alcohol Intake","Malaria","Parasitism","Goiter");
					
						$value=[count($tabled)];
				$addIllness=$condb->insertData('patient',
				array(
"patient_fname"=>$tabled2[0],
"patient_mname"=>$tabled2[1],
"patient_lname"=>$tabled2[2],
"patient_nname"=>$tabled2[3],
"patient_age"=>$tabled2[4],
"patient_religion"=>$tabled2[5],
"patient_bloodtype"=>$tabled2[6],
"patient_menarche"=>$tabled2[7],
"patient_bday"=>$tabled2[8],
"patient_cstat"=>$tabled2[9],
"patient_occup"=>$tabled2[10],
"patient_phone"=>$tabled2[11],
"patient_address"=>$tabled2[12],
"patient_husname"=>$tabled2[13],
"patient_phonehus"=>$tabled2[14],
"patient_phoneper"=>$tabled2[16],
"patient_contnum"=>$tabled2[15],
//BREAK LINE 

"patient_i1"=>$_POST['group1'],
"patient_i2"=>$_POST['group2'],
"patient_i3"=>$_POST['group3'],
"patient_i4"=>$_POST['group4'],
"patient_i5"=>$_POST['group5'],
"patient_i6"=>$_POST['group6'],
"patient_i7"=>$_POST['group7'],
"patient_i8"=>$_POST['group8'],
"patient_i9"=>$_POST['group9'],
"patient_i10"=>$_POST['group10'],
"patient_i11"=>$_POST['group11']
));

				$_SESSION['added']="ok";
	echo '<script type="text/javascript">'; 
echo 'window.location = "addpatient.php";';
echo '</script>';
			
            exit();
		

	}
} if (isset($_POST['upd_subcheckup'])) {
session_start();
$subcheckup_id=$_POST['subcheckup_id'];
	$caseno=$_POST['patient_caseno'];
		$patient_ldd=$_POST['patient_ldd'];
			$patient_lmp=$_POST['patient_lmp'];
				$patient_edc=$_POST['patient_edc'];
					$patient_doa=$_POST['patient_doa'];
						$patient_toa=$_POST['patient_toa'];
							$patient_bp=$_POST['patient_bp'];
								$patient_weight=$_POST['patient_weight'];
									$patient_temp=$_POST['patient_temp'];
										$patient_pr=$_POST['patient_pr'];
											$patient_rr=$_POST['patient_rr'];
												$patient_fh=$_POST['patient_fh'];
													$patient_fhb=$_POST['patient_fhb'];
													$patient_aog=$_POST['patient_aog'];
													$patient_location=$_POST['patient_loc'];
													$patient_present=$_POST['patient_pres'];
													$patient_pallar=$_POST['patient_pallor'];
													$patient_edema=$_POST['patient_edema'];
														$patient_remarks=$_POST['patient_remarks'];
															$patient_tcb=$_POST['patient_tcb'];
																		$conn = new mysqli('localhost', 'root', '','jclinic');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE `patient_subcheckup` SET `checkup_ldd`='$patient_ldd',`checkup_lmp`='$patient_lmp',`checkup_edc`='$patient_edc',`checkup_doa`='$patient_doa',`checkup_toa`='$patient_toa',`checkup_bp`='$patient_bp',`checkup_weight`='$patient_weight',`checkup_temp`='$patient_temp',`checkup_pr`='$patient_pr',`checkup_rr`='$patient_rr',`checkup_fh`='$patient_fh',`checkup_fhb`='$patient_fhb',`checkup_aog`='$patient_aog',`checkup_location`='$patient_location',`checkup_present`='$patient_present',`checkup_pallar`='$patient_pallar',`checkup_edema`='$patient_edema',`checkup_remarks`='$patient_remarks',`checkup_tcb`='$patient_tcb' WHERE subcheckup_id=$subcheckup_id";



if ($conn->query($sql) === TRUE) {
  
				$_SESSION['updsubcheckup']="addCheckup";
	echo '<script type="text/javascript">'; 
echo 'window.location = "pregrec.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}	
	if (isset($_POST['add_subcheck'])) {
		session_start();
	$caseno=$_POST['patient_caseno'];
		$patient_ldd=$_POST['patient_ldd'];
			$patient_lmp=$_POST['patient_lmp'];
				$patient_edc=$_POST['patient_edc'];
					$patient_doa=$_POST['patient_doa'];
						$patient_toa=$_POST['patient_toa'];
							$patient_bp=$_POST['patient_bp'];
								$patient_weight=$_POST['patient_weight'];
									$patient_temp=$_POST['patient_temp'];
										$patient_pr=$_POST['patient_pr'];
											$patient_rr=$_POST['patient_rr'];
												$patient_fh=$_POST['patient_fh'];
													$patient_fhb=$_POST['patient_fhb'];
													$patient_aog=$_POST['patient_aog'];
													$patient_location=$_POST['patient_loc'];
													$patient_present=$_POST['patient_pres'];
													$patient_pallar=$_POST['patient_pallor'];
													$patient_edema=$_POST['patient_edema'];
														$patient_remarks=$_POST['patient_remarks'];
															$patient_tcb=$_POST['patient_tcb'];
																$checkup_id=$_POST['checkup_id'];
													
			
				
				  
				$conn = new mysqli('localhost', 'root', '','jclinic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `patient_subcheckup`(`checkup_id`,`patient_caseno`, `checkup_ldd`, `checkup_lmp`, `checkup_edc`, `checkup_doa`, `checkup_toa`, `checkup_bp`, `checkup_weight`, `checkup_temp`, `checkup_pr`, `checkup_rr`, `checkup_fh`, `checkup_fhb`, `checkup_aog`, `checkup_location`, `checkup_present`, `checkup_pallar`, `checkup_edema`, `checkup_remarks`, `checkup_tcb`) 
					VALUES ('$checkup_id','$caseno','$patient_ldd','$patient_lmp','$patient_edc','$patient_doa','$patient_toa','$patient_bp','$patient_weight','$patient_temp','$patient_pr','$patient_rr','$patient_fh','$patient_fhb','$patient_aog','$patient_location','$patient_present','$patient_pallar','$patient_edema','$patient_remarks','$patient_tcb')";

if ($conn->query($sql) === TRUE) {
  
				$_SESSION['addsubcheck']="ok";
	echo '<script type="text/javascript">'; 
echo 'window.location = "pregrec.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	
					
// 				$condb->insertData('patient_checkup',
// 				array(
// 					"patient_caseno"=>$caseno,
// "checkup_ldd"=>$patient_ldd,
// "checkup_lmp"=>$patient_lmp,
// "checkup_edc"=>$patient_edc,
// "checkup_doa"=>$patient_doa,
// "checkup_toa"=>$patient_toa,
// "checkup_bp"=>$patient_bp,
// "checkup_weight"=>$patient_weight,
// "checkup_temp"=>$patient_temp,
// "checkup_pr"=>$patient_pr,
// "checkup_rr"=>$patient_rr,
// "checkup_fh"=>$patient_fh,
// "checkup_fhb"=>$patient_fhb,
// "checkup_aog"=>$patient_aog,
// "checkup_location"=>$patient_location,
// "checkup_present"=>$patient_present,
// "checkup_pallar"=>$patient_pallar,
// "checkup_edema"=>$patient_edema,
// "checkup_remarks"=>$patient_remarks,
// "checkup_tcb"=>$patient_tcb

// ));

// 				$_SESSION['added']="ok";
// 	echo '<script type="text/javascript">'; 
// echo 'window.location = "addpatient.php";';
// echo '</script>';
			
            exit();
				
			

			

	
}
	
if (isset($_POST['reg_checkup'])) {
		session_start();
	$caseno=$_POST['patient_caseno'];
		$patient_ldd=$_POST['patient_ldd'];
			$patient_lmp=$_POST['patient_lmp'];
				$patient_edc=$_POST['patient_edc'];
					$patient_doa=$_POST['patient_doa'];
						$patient_toa=$_POST['patient_toa'];
							$patient_bp=$_POST['patient_bp'];
								$patient_weight=$_POST['patient_weight'];
									$patient_temp=$_POST['patient_temp'];
										$patient_pr=$_POST['patient_pr'];
											$patient_rr=$_POST['patient_rr'];
												$patient_fh=$_POST['patient_fh'];
													$patient_fhb=$_POST['patient_fhb'];
													$patient_aog=$_POST['patient_aog'];
													$patient_location=$_POST['patient_loc'];
													$patient_present=$_POST['patient_pres'];
													$patient_pallar=$_POST['patient_pallor'];
													$patient_edema=$_POST['patient_edema'];
														$patient_remarks=$_POST['patient_remarks'];
															$patient_tcb=$_POST['patient_tcb'];
													
			
				
				  
				$conn = new mysqli('localhost', 'root', '','jclinic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `patient_checkup`(`patient_caseno`, `checkup_ldd`, `checkup_lmp`, `checkup_edc`, `checkup_doa`, `checkup_toa`, `checkup_bp`, `checkup_weight`, `checkup_temp`, `checkup_pr`, `checkup_rr`, `checkup_fh`, `checkup_fhb`, `checkup_aog`, `checkup_location`, `checkup_present`, `checkup_pallar`, `checkup_edema`, `checkup_remarks`, `checkup_tcb`) 
					VALUES ('$caseno','$patient_ldd','$patient_lmp','$patient_edc','$patient_doa','$patient_toa','$patient_bp','$patient_weight','$patient_temp','$patient_pr','$patient_rr','$patient_fh','$patient_fhb','$patient_aog','$patient_location','$patient_present','$patient_pallar','$patient_edema','$patient_remarks','$patient_tcb')";

if ($conn->query($sql) === TRUE) {
  
				$_SESSION['added']="ok";
	echo '<script type="text/javascript">'; 
echo 'window.location = "addpatient.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	
					
// 				$condb->insertData('patient_checkup',
// 				array(
// 					"patient_caseno"=>$caseno,
// "checkup_ldd"=>$patient_ldd,
// "checkup_lmp"=>$patient_lmp,
// "checkup_edc"=>$patient_edc,
// "checkup_doa"=>$patient_doa,
// "checkup_toa"=>$patient_toa,
// "checkup_bp"=>$patient_bp,
// "checkup_weight"=>$patient_weight,
// "checkup_temp"=>$patient_temp,
// "checkup_pr"=>$patient_pr,
// "checkup_rr"=>$patient_rr,
// "checkup_fh"=>$patient_fh,
// "checkup_fhb"=>$patient_fhb,
// "checkup_aog"=>$patient_aog,
// "checkup_location"=>$patient_location,
// "checkup_present"=>$patient_present,
// "checkup_pallar"=>$patient_pallar,
// "checkup_edema"=>$patient_edema,
// "checkup_remarks"=>$patient_remarks,
// "checkup_tcb"=>$patient_tcb

// ));

// 				$_SESSION['added']="ok";
// 	echo '<script type="text/javascript">'; 
// echo 'window.location = "addpatient.php";';
// echo '</script>';
			
            exit();
				
			

			

	
}
if (isset($_POST['add_baby'])) {
		session_start();
		$caseno=$_POST['patient_caseno'];
		$newborn_id=$_POST['newborn_id'];
	$first_name=$_POST['first_name'];
		$middle_name=$_POST['middle_name'];
			$last_name=$_POST['last_name'];
				$baby_sex=$_POST['baby_sex'];
					$baby_birthday=$_POST['baby_birthday'];
						$baby_tob=$_POST['baby_tob'];
							$baby_mulbirth=$_POST['baby_mulbirth'];
								$baby_place=$_POST['baby_place'];
									$baby_wab=$_POST['baby_wab'];
										$baby_mother=$_POST['baby_mother'];
											$baby_mcitizenship=$_POST['baby_mcitizenship'];
												$baby_mreligion=$_POST['baby_mreligion'];
													$baby_bornalive=$_POST['baby_bornalive'];
													$baby_totalalive=$_POST['baby_totalalive'];
													$baby_deceased=$_POST['baby_deceased'];
													$baby_moccup=$_POST['baby_moccup'];
													$baby_mage=$_POST['baby_mage'];
													$baby_mres=$_POST['baby_mres'];
														$baby_father=$_POST['baby_father'];
															$baby_fcitizenship=$_POST['baby_fcitizenship'];
															$baby_freligion=$_POST['baby_freligion'];
															$baby_foccup=$_POST['baby_foccup'];
															$baby_fage=$_POST['baby_fage'];
															$baby_fres=$_POST['baby_fres'];
													
			
				
				  
				$conn = new mysqli('localhost', 'root', '','jclinic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `patient_baby`(`patient_caseno`, `newborn_id`, `first_name`, `middle_name`, `last_name`, `baby_sex`, `baby_birthday`, `baby_tob`, `baby_mulbirth`, `baby_place`, `baby_wab`, `baby_mother`, `baby_mcitizenship`, `baby_mreligion`, `baby_bornalive`, `baby_totalalive`, `baby_deceased`, `baby_moccup`, `baby_mage`, `baby_mres`, `baby_father`, `baby_fcitizenship`, `baby_freligion`, `baby_foccup`, `baby_fage`, `baby_fres`) 
					VALUES ('$caseno','$newborn_id','$first_name','$middle_name','$last_name','$baby_sex','$baby_birthday','$baby_tob','$baby_mulbirth','$baby_place','$baby_wab','$baby_mother','$baby_mcitizenship','$baby_mreligion','$baby_bornalive','$baby_totalalive','$baby_deceased','$baby_moccup','$baby_mage','$baby_mres','$baby_father','$baby_fcitizenship','$baby_freligion','$baby_foccup','$baby_fage','$baby_fres')";

if ($conn->query($sql) === TRUE) {
  
				$_SESSION['addnewborn']="ok";
	echo '<script type="text/javascript">'; 
echo 'window.location = "babyrec.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	
					
// 				$condb->insertData('patient_checkup',
// 				array(
// 					"patient_caseno"=>$caseno,
// "checkup_ldd"=>$patient_ldd,
// "checkup_lmp"=>$patient_lmp,
// "checkup_edc"=>$patient_edc,
// "checkup_doa"=>$patient_doa,
// "checkup_toa"=>$patient_toa,
// "checkup_bp"=>$patient_bp,
// "checkup_weight"=>$patient_weight,
// "checkup_temp"=>$patient_temp,
// "checkup_pr"=>$patient_pr,
// "checkup_rr"=>$patient_rr,
// "checkup_fh"=>$patient_fh,
// "checkup_fhb"=>$patient_fhb,
// "checkup_aog"=>$patient_aog,
// "checkup_location"=>$patient_location,
// "checkup_present"=>$patient_present,
// "checkup_pallar"=>$patient_pallar,
// "checkup_edema"=>$patient_edema,
// "checkup_remarks"=>$patient_remarks,
// "checkup_tcb"=>$patient_tcb

// ));

// 				$_SESSION['added']="ok";
// 	echo '<script type="text/javascript">'; 
// echo 'window.location = "addpatient.php";';
// echo '</script>';
			
            exit();
				
			

			

	
}
	
else if (isset($_POST['upd_baby'])) {
		session_start();
		$caseno=$_POST['patient_caseno'];
		$newborn_id=$_POST['newborn_id'];
	$first_name=$_POST['first_name'];
		$middle_name=$_POST['middle_name'];
			$last_name=$_POST['last_name'];
				$baby_sex=$_POST['baby_sex'];
					$baby_birthday=$_POST['baby_birthday'];
						$baby_tob=$_POST['baby_tob'];
							$baby_mulbirth=$_POST['baby_mulbirth'];
								$baby_place=$_POST['baby_place'];
									$baby_wab=$_POST['baby_wab'];
										$baby_mother=$_POST['baby_mother'];
											$baby_mcitizenship=$_POST['baby_mcitizenship'];
												$baby_mreligion=$_POST['baby_mreligion'];
													$baby_bornalive=$_POST['baby_bornalive'];
													$baby_totalalive=$_POST['baby_totalalive'];
													$baby_deceased=$_POST['baby_deceased'];
													$baby_moccup=$_POST['baby_moccup'];
													$baby_mage=$_POST['baby_mage'];
													$baby_mres=$_POST['baby_mres'];
														$baby_father=$_POST['baby_father'];
															$baby_fcitizenship=$_POST['baby_fcitizenship'];
															$baby_freligion=$_POST['baby_freligion'];
															$baby_foccup=$_POST['baby_foccup'];
															$baby_fage=$_POST['baby_fage'];
															$baby_fres=$_POST['baby_fres'];
													
			
				
				  
				$conn = new mysqli('localhost', 'root', '','jclinic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `patient_baby` SET `patient_caseno`='$caseno',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`baby_sex`='$baby_sex',`baby_birthday`='$baby_birthday',`baby_tob`='$baby_tob',`baby_mulbirth`='$baby_mulbirth',`baby_place`='$baby_place',`baby_wab`='$baby_wab',`baby_mother`='$baby_mother',`baby_mcitizenship`='$baby_mcitizenship',`baby_mreligion`='$baby_mreligion',`baby_bornalive`='$baby_bornalive',`baby_totalalive`='$baby_totalalive',`baby_deceased`='$baby_deceased',`baby_moccup`='$baby_moccup',`baby_mage`='$baby_mage',`baby_mres`='$baby_mres',`baby_father`='$baby_father',`baby_fcitizenship`='$baby_fcitizenship',`baby_freligion`='$baby_freligion',`baby_foccup`='$baby_foccup',`baby_fage`='$baby_fage',`baby_fres`='$baby_fres' WHERE `baby_id`=$newborn_id";

if ($conn->query($sql) === TRUE) {
  
				$_SESSION['updnewborn']="ok";
	echo '<script type="text/javascript">'; 
echo 'window.location = "babyrec.php";';
echo '</script>';
			
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	
					
// 				$condb->insertData('patient_checkup',
// 				array(
// 					"patient_caseno"=>$caseno,
// "checkup_ldd"=>$patient_ldd,
// "checkup_lmp"=>$patient_lmp,
// "checkup_edc"=>$patient_edc,
// "checkup_doa"=>$patient_doa,
// "checkup_toa"=>$patient_toa,
// "checkup_bp"=>$patient_bp,
// "checkup_weight"=>$patient_weight,
// "checkup_temp"=>$patient_temp,
// "checkup_pr"=>$patient_pr,
// "checkup_rr"=>$patient_rr,
// "checkup_fh"=>$patient_fh,
// "checkup_fhb"=>$patient_fhb,
// "checkup_aog"=>$patient_aog,
// "checkup_location"=>$patient_location,
// "checkup_present"=>$patient_present,
// "checkup_pallar"=>$patient_pallar,
// "checkup_edema"=>$patient_edema,
// "checkup_remarks"=>$patient_remarks,
// "checkup_tcb"=>$patient_tcb

// ));

// 				$_SESSION['added']="ok";
// 	echo '<script type="text/javascript">'; 
// echo 'window.location = "addpatient.php";';
// echo '</script>';
			
            exit();
				
			

			

	
}
	
