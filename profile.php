<?php


require_once('class/connectdb.php');
  require_once('class/functions.php');
  include_once('loading.php');
  session_start();


      // echo 'the clients id is: '.$_GET['idNo']. 'and you are located in PreMATERNAL';


  

  
  

  if(isset($_SESSION['ongoingsession'])){

}else{
  header("Location: 404.php");
}
	


?>
<?php
require_once('class/functions.php');
include_once('class/connectdb.php');


if (isset($_SESSION['message'])) {
    $show_message = $_SESSION['message'];
    $_SESSION['message'] = null;
}
session_write_close ();

// ...

if (isset($show_message)) {
echo "<script>alert('{$show_message}');</script>";
}
?>
<?php
require_once('class/functions.php');
include_once('class/connectdb.php');
session_start();

if (isset($_SESSION['message'])) {
    $show_message = $_SESSION['message'];
    $_SESSION['message'] = null;
}
session_write_close ();

// ...

if (isset($show_message)) {
echo "<script>alert('{$show_message}');</script>";
}
?>
<html lang="en">
   
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="idle.js"></script>
   <script>
    function printDiv1() { 
            var divContents = document.getElementById("printMe").innerHTML; 
               var divContents1 = document.getElementById("printMe1").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body > <h1>Jambo Maternity Clinic </h1> <br>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); }
   function check($data) {
  document.getElementById($data).checked = true;
}

//    $(document).ready(function(){
//     $('.check').click(function() {
//         $('.check').not(this).prop('checked', false);
//     });
// });
//       function validateForm() {
  var x = document.forms["myForm"]["first_name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
} 

  function enableButton2() {
            document.getElementById("button2").disabled = false;
        }
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jambo Maternity Clinic Record Management System</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body  onload="loadingScreen()" >
<div id="loader"></div>
<div id="page-top"  style="display:none;" class="animate-bottom">
  <!-- Page Wrapper -->

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Jambo Maternity Clinic <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
<li <?php if($_SESSION['current_priv']=='clerk'){
          echo 'style="display:none;';
           } ?> class="nav-item ">
        <a class="nav-link" href="userman.php">
           <span>User Management</span></a>  </li>

      <!-- Nav Item - Reports -->
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
         >

          <span>Reports</span></a>

      </li>
       

      <!-- Nav Item - Pages Records Menu -->
      <li class="nav-item active ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
           <i class="fas fa-notes-medical"></i
          <span>Records</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Select Records:</h6>
            <a class="collapse-item" href="pregrec.php">Pregnant Records</a>
          <a class="collapse-item" href="newrec.php">Delivery Records</a>
                 <a class="collapse-item" href="babyrec.php">Newborn Records</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Add Patient -->
      <li class="nav-item">
        <a class="nav-link" href="addpatient.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Add Patient</span></a>
      </li>

      <!-- Nav Item - About -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>About</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" hidden> 
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" hidden placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" hidden type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php
                  echo "" . $_SESSION["currentuser"] . "";

               ?>
             </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
       
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
      

<div id="printMe">
<?php
if(isset($_GET['idNo'])){
  $clientId=$_GET['idNo'];
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient WHERE patient_caseno=$clientId";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$question=array($row["patient_i1"],
$row["patient_i2"],
$row["patient_i3"],
$row["patient_i4"],
$row["patient_i5"],
$row["patient_i6"],
$row["patient_i7"],
$row["patient_i8"],
$row["patient_i9"],
$row["patient_i10"],
$row["patient_i11"]);



     echo'    <form action="databaseAdd.php" name="myForm" onsubmit="return validateForm()"  method="post">
                  <form class="user">
                  <div class="container">
                  <div class="row">

                    <div class="col-md-4">
                    <div class="form-group">
                    First Name<input type="text" class="form-control form-control-user" name="first_name" disabled   placeholder="'.$row["patient_fname"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Middle Name <input type="text" class="form-control form-control-user" name="middle_name" disabled  placeholder="'.$row["patient_mname"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Last Name <input type="text" class="form-control form-control-user" name="last_name" disabled  placeholder="'.$row["patient_lname"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Nickname  <input type="text" class="form-control form-control-user" name="nickname" disabled  placeholder="'.$row["patient_nname"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Age <input type="text" class="form-control form-control-user" name="age" disabled  placeholder='.$row["patient_age"].'>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Religion  <input type="text" class="form-control form-control-user" name="religion" disabled placeholder="'.$row["patient_religion"].'">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    Blood Type  <input type="text" class="form-control form-control-user" name="blood_type" disabled placeholder="'.$row["patient_bloodtype"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Menarch  <input type="text" class="form-control form-control-user" name="menarche" disabled placeholder="'.$row["patient_menarche"].'">
                    </div>
                    </div>
                     
                    <div class="col-md-3">
                    <div class="form-group">
                    Birthday <input type="text" class="form-control form-control-user" name="birthday" disabled placeholder="'.$row["patient_bday"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Civil Status  <input type="text" class="form-control form-control-user" name="civil_status" disabled placeholder="'.$row["patient_cstat"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Occupation  <input type="text" class="form-control form-control-user" name="occupation" disabled placeholder="'.$row["patient_occup"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Phone Number  <input type="text" class="form-control form-control-user" name="phone" disabled placeholder="'.$row["patient_phone"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Address  <input type="text" class="form-control form-control-user" name="address" disabled placeholder="'.$row["patient_address"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Husband Name  <input type="text" class="form-control form-control-user" name="husband_name" disabled placeholder="'.$row["patient_husname"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Husband Phone Number  <input type="text" class="form-control form-control-user" name="husband_phone" disabled placeholder="'.$row["patient_phonehus"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Contact Person Name <input type="text" class="form-control form-control-user" name="contact_name" disabled placeholder="'.$row["patient_phoneper"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Contact Person Number<input type="text" class="form-control form-control-user" name="contact_phone" disabled placeholder="'.$row["patient_contnum"].'">
                    </div>
                    </div>
                    </div>
                    </div>
                   
        
                    <div class ="container">
                    <div class ="row">
                    <div class="col-md-7">
                    </div>';
                    "</table>";


                   
                  
                   
                    
echo'<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style= " margin-top: 50px !important">
                  
                
                  <thead>
                    <tr>
                      <th colspan="3"><font size="5">Past and Present Illness/ Health Problems <br><font size="3"> Please put select on the appropriate column</th>
                     
                      
                    </tr>
                    <tr>
                      
                     
                      
                    </tr>
                    <tr>
                      <th>Health Problems/ Illness/Unhealthy Lifestyle</th>
                     <th>Yes</th>
                     <th>No</th>
                      
                    </tr>
                  </thead>
             
                  <tbody>';
                    $tabled = array("Tuberculosis(14 days or more of cough)", "Heart Disease(Shortness of Breath)", "Diabetes(High Blood Sugar)","Hypertension(High Blood Pressure)"
          , "Bronchial Asthma","Urinary Tract Infection","Smoking","Alcohol Intake","Malaria","Parasitism","Goiter");
                $checking=0;
                $agree=array();
                 $disagree=array();
while($checking!=count($question)){
  if($question[$checking]=='yes'){
array_push($agree,'checked');
array_push($disagree,"");
  }else{
    array_push($disagree,'checked');
array_push($agree,"");
  }
  $checking++;
}
echo                  '<tr><td>'. $tabled[0]. '</td>
                  <td>'. '<input type="radio" name="group1" value="yes" '.$agree[0].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group1" value="no" '.$disagree[0].' disabled class="check">'.'</td>'.
                   '<tr><td>'. $tabled[1]. '</td>
                  <td>'. '<input type="radio" name="group2" value="yes" '.$agree[1].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group2" value="no" '.$disagree[1].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[2]. '</td>
                  <td>'. '<input type="radio" name="group3" value="yes" '.$agree[2].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group3" value="no" '.$disagree[2].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[3]. '</td>
                  <td>'. '<input type="radio" name="group4" value="yes" '.$agree[3].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group4" value="no" '.$disagree[3].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[4]. '</td>
                  <td>'. '<input type="radio" name="group5" value="yes" '.$agree[4].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group5" value="no" '.$disagree[4].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[5]. '</td>
                  <td>'. '<input type="radio" name="group6" value="yes" '.$agree[5].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group6" value="no" '.$disagree[5].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[6]. '</td>
                  <td>'. '<input type="radio" name="group7" value="yes" '.$agree[6].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group7" value="no" '.$disagree[6].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[7]. '</td>
                  <td>'. '<input type="radio" name="group8" value="yes" '.$agree[7].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group8" value="no" '.$disagree[7].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[8]. '</td>
                  <td>'. '<input type="radio" name="group9" value="yes" '.$agree[8].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group9" value="no" '.$disagree[8].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[9]. '</td>
                  <td>'. '<input type="radio" name="group10" value="yes" '.$agree[9].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group10" value="no" '.$disagree[9].' disabled class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[10]. '</td>
                  <td>'. '<input type="radio" name="group11" value="yes" '.$agree[10].' disabled class="check">' .
                  '</td><td>'.'<input type="radio" name="group11" value="no" '.$disagree[10].' disabled class="check">'.'</td>
                  
                  
</tr></div></div></div>';
            
 } 
} else { echo "0 results"; }
$conn->close();
               ?>
               </tbody>
             
</table>
</div>

</div>



 </div>
 <div class="row">
 <div class="col-md-3"></div> <div class="col-md-3"></div>
 <div class="col-md-2"><input type="button"  onclick="printDiv()" value="Print Record" class="btn btn-primary"></div>
<div class="col-md-2">   
<?php echo '
<a href=update.php?patientNo='.$clientId.'  class="btn btn-primary">Update Patient Record</a> </div>'; ?>
 <div class="table-responsive"></div>
               
                  
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th>Checkup</th>
                      <th>Time of Admission</th>
                      <th>Date of Admission</th>
                      <th>Remarks</th>
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
             
                  <tbody>
                  
                     <?php
                     
                  $conn=mysqli_connect("localhost","root","", "jclinic");
                  if($conn->connect_error){
                    die("connection failed: " .$conn->error);
                  }
               $sql="SELECT checkup_id, checkup_toa, checkup_doa, checkup_remarks from patient_checkup WHERE  patient_caseno=$clientId ";
               $result=$conn->query($sql);
               $id;
               $row;
$counter=0;
               if($result->num_rows>0){
               while($row=$result->fetch_assoc()){
$counter++;
             
                 echo '<tr><td> ' .$counter .'</td><td>' .$row['checkup_toa'] . '</td><td>'.$row['checkup_doa']. '</td><td>'.$row['checkup_remarks']. '</td><td>'.
                 
                 '  <a href=viewCheckup.php?idNo='.$row['checkup_id']. '  class="btn btn-primary">View</a>';
               

                 
                  '</td></tr> ';
               }
              }

             
                

echo '
  </tbody>
                </table>
  <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div>
<!-- <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="reg_patient">Register Patient</button>
                    </div>
                    </div>
                    </div> -->
                   </form>';

                   }else if(isset($_GET['newborn'])& isset($_GET['parent'])){
 $ded=$_GET['parent'];
  $ded1=$_GET['newborn'];
  	$condb=new connectdb('root','','jclinic');
    $check=strval($condb->getFullName($ded));
     
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient_newborn WHERE newborn_caseno=$ded AND newborn_id=$ded1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  $inputanswer=array();
$question=array($row["newborn_sterile"],
$row["newborn_tod"],
$row["group1"],
$row["group2"],
$row["group3"],
$row["group4"],
$row["group5"],
$row["group6"],
$row["group7"]);
  
   if($question[0]=="yes"){
array_push($inputanswer,"checked");
   }else{
     array_push($inputanswer,"");
   }
   if($question[1]=="yes"){
    array_push($inputanswer,"checked");
   }else{
      array_push($inputanswer,"");
   }
   if($question[2]=="im"){
    array_push($inputanswer,"checked","");

   }else{
      array_push($inputanswer,"","checked");
   }
    if($question[3]=="yes"){
    array_push($inputanswer,"checked","");

   }else{
     array_push($inputanswer,"","checked");
   }
   if($question[4]=="yes"){
    array_push($inputanswer,"checked","");

   }else{
     array_push($inputanswer,"","checked");
   }
if($question[5]=="spontaneous"){
    array_push($inputanswer,"checked","","","");

   }else if($question[5]=="manual"){
      array_push($inputanswer,"","checked","","");
   }else if($question[5]=="schultz"){
      array_push($inputanswer,"","","checked","");
   }else if($question[5]=="manualE"){
      array_push($inputanswer,"","","","checked");
   }
    if($question[6]=="complete"){
    array_push($inputanswer,"checked","");

   }else{
     array_push($inputanswer,"","checked");
   }
 if($question[7]=="yes"){
    array_push($inputanswer,"checked","");

   }else{
     array_push($inputanswer,"","checked");
   }
    if($question[8]=="slight"){
    array_push($inputanswer,"checked","","");
   }else if($question[8]=="moderate"){
         array_push($inputanswer,"","checked","");
   }else if($question[8]=="hemorrhage"){
         array_push($inputanswer,"","","checked");
   }




   echo' <form action="databaseAdd.php" method="post">
 
                  <form class="user">
                  <div class="container">
                  <div class="row">



                    <div class="col-md-4">
                    <div class="form-group">
                  Name
                    <input type="text" class="form-control form-control-user" name="newborn_name" disabled  value="'. $row['newborn_name'].'">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    Midwife
                    <input type="text" class="form-control form-control-user" name="newborn_midwife"  disabled  value="'. $row['newborn_midwife'].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Bed No
                    <input type="text" class="form-control form-control-user" name="newborn_bedno"  disabled  value="'. $row['newborn_bedno'].'">
                    </div>
                    </div>
    <input type="text" class="form-control form-control-user" name="newborn_caseno"  hidden  value='. $row['newborn_caseno'].'>
                    <div class="col-md-2">
                    <div class="form-group">
                    Case No
                    <input type="text" class="form-control form-control-user" name="newborn_casen"  disabled  value='.$_GET['parent'].'>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Delivery Date
                    <input type="text" class="form-control form-control-user" name="newborn_dd"  disabled  value="'. $row['newborn_dd'].'">
                    </div>
                    </div>

                    <div class="col-md-2">
                    <div class="form-group">
                   Time
                    <input type="time" class="form-control form-control-user" name="newborn_time"  disabled  value="'. $row['newborn_time'].'">
                    </div>
                    </div>
                      <div class="col-md-3">  
                    <div class="form-group">
                          Sterile
                    <input type="checkbox" name="newborn_sterile" disabled value="yes"  '.$inputanswer[0].'>
                    </div>
                    </div>
                      

                    <div class="col-md-4">  
                    <div class="form-group">
                   Delivered by
                    <input type="text" class="form-control form-control-user" name="newborn_delby" disabled   value="'. $row['newborn_delby'].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                  Assisted by
                    <input type="text" class="form-control form-control-user" name="newborn_ass"  disabled  value="'. $row['newborn_ass'].'">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                   Type of Delivery:       Spontaneous
                    <input type="checkbox" name="newborn_tod" disabled '.$inputanswer[1].'>
                    </div>
                    </div>
                      

                    <div class="col-md-12">
                    <div class="form-group">
                    <hr>
                  <h4>Oxytocic</h4>
                 
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Time
                    <input type="time" class="form-control form-control-user" name="oxy_time"  disabled  value="'. $row['oxy_time'].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                   Drug given
                    <input type="text" class="form-control form-control-user" name="oxy_drug"  disabled  value="'. $row['oxy_drug'].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    IM
                  <input type="radio"  name="group1" '.$inputanswer[2].' value="im" disabled class="check">
                  IV
                   <input type="radio"  name="group1" '.$inputanswer[3].' value="iv" disabled class="check">
                 
                    </div>
                    </div>

                    <div class="col-md-12">
                      <hr>
                  <h4>Laceration       Yes
                  <input type="radio" onclick="ifYes()" '.$inputanswer[4].'  name="group2" value="yes" disabled class="check">
                  No
                   <input type="radio"  onclick="ifNo()" '.$inputanswer[5].' name="group2" value="no" disabled class="check">
                    </div>
                                

                    <div class="col-md-4">
                    <div class="form-group">
                    Repair Degree
                    <input type="text" id="myBtn" disabled class="form-control form-control-user" name="newborn_degree"   value="'. $row['newborn_degree'].'">
                    </div>
                    </div>
                     <div class="col-md-4">
                    <div class="form-group">
                   Yes
                  <input type="radio" id="myBtn1" disabled name="group3" '.$inputanswer[6].' value="yes"  class="check">
                  No
                   <input type="radio"  id="myBtn2" name="group3" value="no" '.$inputanswer[7].' disabled class="check">
                    </div>
                    </div>
 <div class="col-md-12">
                      <hr>
                  <h4>Placenta      
                    </div>
                  

                    <div class="col-md-12">
                    <div class="form-group">
                    Spontaneous
                  <input type="radio"  name="group4" value="spontaneous" '.$inputanswer[8].' disabled class="check">
                  Manual Removal
                   <input type="radio"  name="group4" value="manual" '.$inputanswer[9].' disabled class="check">
                      Schultz
                   <input type="radio"  name="group4" value="schultz" '.$inputanswer[10].' disabled class="check">
                      Manual Exploration
                   <input type="radio"  name="group4" value="manualE" '.$inputanswer[11].' disabled class="check">
                    </div>
                    </div>

                  

                    <div class="col-md-6">
                    <div class="form-group">
                    Placenta Time out
                    <input type="text" class="form-control form-control-user" name="newborn_timeout"  disabled  value="'. $row['newborn_timeout'].'">
                     Complete
                  <input type="radio"  name="group5" value="complete" '.$inputanswer[12].' disabled class="check">
                 Not Complete
                   <input type="radio"  name="group5" value="incomplete" '.$inputanswer[13].' disabled class="check">
                    </div>
                    </div>

                 <div class="col-md-12">
                      <hr>
                  <h4>Anesthesia      
                    </div>
  <div class="col-md-4">
                    <div class="form-group">
                    Agent
 <input type="text" class="form-control form-control-user" name="newborn_agent"  disabled  value="'. $row['newborn_agent'].'">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
                    Dosage
 <input type="text" class="form-control form-control-user" name="newborn_dosage"  disabled  value="'. $row['newborn_dosage'].'">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
                    Method
 <input type="text" class="form-control form-control-user" name="newborn_method"  disabled  value="'. $row['newborn_method'].'">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                  Uterus Contracted :
    Yes
                   <input type="radio"  name="group6" value="yes" '.$inputanswer[14].' disabled class="check">
                      No
                   <input type="radio"  name="group6" value="no" '.$inputanswer[15].' disabled class="check">
                    </div>
                    </div>
                     <div class="col-md-12">
                    <div class="form-group">
                  Blood Loss :
    Slight
                   <input type="radio"  name="group7" value="slight" '.$inputanswer[16].' disabled class="check">
                      Moderate
                   <input type="radio"  name="group7" value="moderate" disabled '.$inputanswer[17].' class="check">
                   Hemorrhage
                   <input type="radio"  name="group7" value="hemorrhage" disabled '.$inputanswer[18].' class="check">
                    </div>
                    </div>
                     <div class="col-md-12">
                    <div class="form-group">
                    <hr>
                  <h4>Midwife`s Note</h4>
                 
                    </div>
                    </div>
                      <div class="col-md-8">
                    <div class="form-group">
                    Name of Patient
 <input type="text" class="form-control form-control-user" name="patient_name"   disabled value="'. $row['newborn_name'].'">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
              Age
 <input type="text" class="form-control form-control-user" name="newborn_age"  disabled  value="'. $row['newborn_age'].'">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
              Date and Time
 <input type="text" class="form-control form-control-user" name="newborn_dat"  disabled  value="'. $row['newborn_dat'].'">
                    </div>
                    </div>
                       <div class="col-md-12">
                    <div class="form-group">
         Management Notes
 <textarea class="col-md-12" cols="100" disabled name="newborn_comment">'. $row['newborn_comment'].'</textarea>
                    </div>
                    </div>
                      
                    <div class="container">
                    <div class="row">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3">
                   <a href=update.php?newborn='.$row['newborn_id'].'&parent='.$row['newborn_caseno'].' class="btn btn-primary">Edit Delivery Record</a>
                    </div>
                    </div>
                    </div> 
                   </form>';
                   }
                  }
                }
                     ?>
                
 
    <!-- End of Content Wrapper -->

  </div>

  
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
        <form action="submit.php" method="post">
           <button type="submit" class="btn btn-primary"  name="reg_logoutadmin">Log out</button>
          <button class="btn btn-secondary" type="button" >Cancel</button>
         </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>


