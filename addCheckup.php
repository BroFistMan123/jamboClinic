<?php

require_once('class/connectdb.php');
  require_once('class/functions.php');
  	include_once('loading.php');
  session_start();
  if(isset($_SESSION['ongoingsession'])){

}else{
  header("Location: 404.php");
}
	
?>
<head>
<script src="moment.js"></script>
<script>
    moment().format();
    moment().add(Number,String);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

 
function ifYes() {
  document.getElementById("myBtn").disabled = false;
  document.getElementById("myBtn").required = true;
    document.getElementById("myBtn1").disabled = false;
       document.getElementById("myBtn2").disabled = false;
    document.getElementById("myBtn1").required = true;
}
function ifNo() {
    document.getElementById("myBtn").value = "";
       document.getElementById("myBtn2").disabled = true;
           document.getElementById("myBtn2").checked = false;
  document.getElementById("myBtn1").checked = false;
  document.getElementById("myBtn").required = false;
  document.getElementById("myBtn").disabled = true;
  document.getElementById("myBtn1").required = false;
    document.getElementById("myBtn1").disabled = true;
}
// Applied globally on all textareas with the "autoExpand" class
$(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        this.rows = minRows + rows;
    });
    
</script>
<style>

textarea{  
  display: block;
  box-sizing: padding-box;
  overflow: hidden;

  padding: 10px;
  width: 250px;
  font-size: 14px;
  margin: 50px auto;
  border-radius: 6px;
  box-shadow: 2px 2px 8px rgba(black, .3);
  border: 0;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


<script src="idle.js"></script>
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
      <li class="nav-item">
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
      <li class="nav-item active">
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
              <input type="text" hidden class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
<?php



if(isset($_GET['CASENo'])){
  $ded=$_GET['CASENo'];
  	$condb=new connectdb('root','','jclinic');
    $check=strval($condb->getFullName($ded));
     $deliveryCheck=$condb->getDelivery($ded);
   


   echo' <form action="databaseAdd.php" method="post">
  
     <input type="text" hidden class="form-control form-control-user" name="newborn_name" required  value="'.$check.'">
                  <form class="user">
                  <div class="container">
                  <div class="row">



                    <div class="col-md-4">
                    <div class="form-group">
                  Name
                    <input type="text" disabled class="form-control form-control-user" name="newborn_nam1" required  value="'.$check.'">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    Midwife
                    <input type="text" class="form-control form-control-user" name="newborn_midwife"  required  placeholder="Enter midwife">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Bed No
                    <input type="text" class="form-control form-control-user" name="newborn_bedno"  required  placeholder="Enter bed no">
                    </div>
                    </div>
    <input type="text" class="form-control form-control-user" name="newborn_caseno"  hidden  value='.$_GET['CASENo'].'>
                    <div class="col-md-3">
                    <div class="form-group">
                    Case No
                    <input type="text" class="form-control form-control-user" name="newborn_casen"  disabled  value='.$_GET['CASENo'].'>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Delivery Date
                    <input type="date" class="form-control form-control-user" name="newborn_dd"  required  placeholder="Enter delivery date">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                   Time
                    <input type="time" class="form-control form-control-user" name="newborn_time"  required  placeholder="Enter Time">
                    </div>
                    </div>
                      <div class="col-md-3">  
                    <div class="form-group">
                          Sterile
                    <input type="checkbox" name="newborn_sterile" value="yes"  placeholder="Type of Sterile">
                    </div>
                    </div>
                      

                    <div class="col-md-4">  
                    <div class="form-group">
                   Delivered by
                    <input type="text" class="form-control form-control-user" name="newborn_delby" required   placeholder="Delivered by">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                  Assisted by
                    <input type="text" class="form-control form-control-user" name="newborn_ass"  required  placeholder="Assisted by">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                   Type of Delivery:       Spontaneous
                    <input type="checkbox" name="newborn_tod"   value="yes  placeholder="Type of delivery">
                    </div>
                    </div>
                      

                    <div class="col-md-12">
                    <div class="form-group">
                    <hr>
                  <h4>Oxytoxic</h4>
                 
                    </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="form-group">
                    Time
                    <input type="time" class="form-control form-control-user" name="oxy_time"  required  placeholder="Enter time">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                   Drug given
                    <input type="text" class="form-control form-control-user"  name="oxy_drug"  required  placeholder="Enter drug given">
                    </div>
                    </div>

                    

                    <div class="col-md-4">
                    <div class="form-group">
                    IM
                  <input type="radio"  name="group1" value="im" required class="check">
                  IV
                   <input type="radio"  name="group1" value="iv" required class="check">
                 
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    <hr>
                  <h4>Laceration</h4>
                 
                    </div>
                    </div>

                    <div class="col-md-12">
                  
                         Yes
                  <input type="radio" onclick="ifYes()"  name="group2" value="yes" required class="check">
                  No
                   <input type="radio"  onclick="ifNo()" name="group2" value="no" required class="check">
                    </div>
                                

                    <div class="col-md-6">
                    <div class="form-group">
                    Repair Degree
                    <input type="text" id="myBtn" disabled class="form-control form-control-user" name="newborn_degree"   placeholder="Enter Repair Degree">
                    </div>
                    </div>

                     <div class="col-md-3">
                    <div class="form-group">
                   Yes
                  <input type="radio" id="myBtn1" disabled name="group3" value="yes"  class="check">
                  </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                  No
                   <input type="radio"  id="myBtn2" name="group3" value="no" disabled class="check">
                    </div>
                    </div>

                    <div class="col-md-12">
                      <hr>
                  <h4>Placenta      
                    </div>
                  

                    <div class="col-md-3">
                    <div class="form-group">
                    <input type="radio"  name="group4" value="spontaneous" required class="check">
                    Spontaneous
                    </div>
                    </div>

                  <div class="col-md-3">
                  <div class="form-group">
                  <input type="radio"  name="group4" value="manual" required class="check">
                  Manual Removal
                  </div>
                  </div>
                   
                  <div class="col-md-3">
                    <div class="form-group">
                  <input type="radio"  name="group4" value="schultz" required class="check">    
                  Schultz
                  </div>
                  </div>
                   
                  <div class="col-md-3">
                    <div class="form-group">
                  <input type="radio"  name="group4" value="manualE" required class="check">    
                  Manual Exploration
                    </div>
                    </div>

                  

                    <div class="col-md-6">
                    <div class="form-group">
                    Placenta Time out
                    <input type="text" class="form-control form-control-user" name="newborn_timeout"  required  placeholder="Enter Placenta Timeout">
                    </div>
                    </div> 
                    
                    <div class="col-md-3">
                    <div class="form-goup">
                    Complete
                  <input type="radio"  name="group5" value="complete" required class="check">
                  </div>
                  </div>
                
                  <div class="col-md-3">
                    <div class="form-group">
                 Not Complete
                   <input type="radio"  name="group5" value="incomplete" required class="check">
                    </div>
                    </div>

                 <div class="col-md-12">
                      <hr>
                  <h4>Anesthesia      
                    </div>
  <div class="col-md-4">
                    <div class="form-group">
                    Agent
 <input type="text" class="form-control form-control-user" name="newborn_agent"  required  placeholder="Enter agent">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
                    Dosage
 <input type="text" class="form-control form-control-user" name="newborn_dosage"  required  placeholder="Enter dosage">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
                    Method
 <input type="text" class="form-control form-control-user" name="newborn_method"  required  placeholder="Enter method">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                  Uterus Contracted :
    Yes
                   <input type="radio"  name="group6" value="yes" required class="check">
                      No
                   <input type="radio"  name="group6" value="no" required class="check">
                    </div>
                    </div>
                     <div class="col-md-12">
                    <div class="form-group">
                  Blood Loss :
    Slight
                   <input type="radio"  name="group7" value="slight" required class="check">
                      Moderate
                   <input type="radio"  name="group7" value="moderate" required class="check">
                   Hemorrhage
                   <input type="radio"  name="group7" value="hemorrhage" required class="check">
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
 <input type="text" class="form-control form-control-user" name="patient_name"   disabled value="'.$check.'">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
              Age
 <input type="text" class="form-control form-control-user" name="newborn_age"  required  placeholder="Enter age">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
              Date and Time
 <input type="datetime-local" class="form-control form-control-user" name="newborn_dat"  required  placeholder="Enter date and time">
                    </div>
                    </div>
                       <div class="">
                    <div class="form-group">
         Management Notes
 <textarea class="col-md-12" cols="100" required name="newborn_comment" placeholder="Notes for the patient/newborn"></textarea>
                    </div>
                    </div>
                      
                    <div class="container">
                    <div class="row">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3">
                     <button type="submit" class="btn btn-primary btn-user btn-block" name="add_newborn">Add delivery record</button>
                    </div>
                    </div>
                    </div> 
                   </form>';
  
}else if(isset($_GET['PreMatNo'])){
 
  // echo 'the clients id is: '.$_GET['PreMatNo'].'and you at the ADD PREMATERNAL PREGNACNY';
  
  
	 echo' <form action="databaseAdd.php" method="post">
                  <form class="user">
                  <div class="container">
                  <div class="row">



                    <div class="col-md-4">
                    <div class="form-group">
                    Last Date of Delivery
                    <input type="date" class="form-control form-control-user" name="patient_ldd" required  placeholder="Enter Last Date of Delivery">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    LMP
                    <input type="date" class="form-control form-control-user" name="patient_lmp" id="lmp" oninput="getdate()" required  placeholder="Enter LMP">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    EDC
                    <input type="text" class="form-control form-control-user" name="patient_edc" id="edcup" required readonly  placeholder="Enter EDC">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Date of Admission
                    <input type="text" class="form-control form-control-user" name="patient_doa" readonly   id="doa" placeholder="Enter Date of Admission">
                    </div>
                    </div>
 
                    <div class="col-md-6">
                    <div class="form-group">
                    Time of Admission
                    <input type="text" class="form-control form-control-user" name="patient_toa" readonly   id="toa"  placeholder="Enter Time of Admission">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Blood Pressure
                    <input type="text" class="form-control form-control-user" name="patient_bp"  required  placeholder="Enter Blood Pressure">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                    Weight
                    <input type="text" class="form-control form-control-user" name="patient_weight" required   placeholder="Enter Weight">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Body Temperature
                    <input type="text" class="form-control form-control-user" name="patient_temp"  required  placeholder="Enter Body Temperature">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    PR
                    <input type="text" class="form-control form-control-user" name="patient_pr"  required  placeholder="Enter PR">
                    </div>
                    </div>
                      

                    <div class="col-md-3">
                    <div class="form-group">
                    RR
                    <input type="text" class="form-control form-control-user" name="patient_rr"  required  placeholder="Enter RR">
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Fundic Height
                    <input type="text" class="form-control form-control-user" name="patient_fh"  required  placeholder="Enter Fundic Height">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    FHB
                    <input type="text" class="form-control form-control-user" name="patient_fhb"  required  placeholder="Enter FHB">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    AOG
                    <input type="text" class="form-control form-control-user" name="patient_aog"  required  placeholder="Enter AOG">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Location
                    <input type="text" class="form-control form-control-user" name="patient_loc"  required  placeholder="Enter Location">
                    </div>
                    </div>
 <input type="hidden" class="form-control form-control-user" name="patient_caseno"  required  value='.$_GET['PreMatNo'].' placeholder="Enter Location">
                    <div class="col-md-4">
                    <div class="form-group">
                    Presentation
                    <input type="text" class="form-control form-control-user" name="patient_pres"  required  placeholder="Enter Presentation">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Pallor
                    <input type="text" class="form-control form-control-user" name="patient_pallor"  required  placeholder="Enter Pallor">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Edema
                    <input type="text" class="form-control form-control-user" name="patient_edema"  required  placeholder="Enter Edema">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    Remarks
                    <input type="text" class="form-control form-control-user" name="patient_remarks"  required  placeholder="Enter Remarks">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    TCB Date
                    <input type="text" class="form-control form-control-user" name="patient_tcb" id="tcbup"  readonly  placeholder="Enter TCB Date">
                    </div>
                    </div>


                    </div>
                    </div>
                   
                    <div class="container">
                    <div class="row">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3">
                     <button type="submit" class="btn btn-primary btn-user btn-block" name="reg_checkup">Add Checkup</button>
                    </div>
                    </div>
                    </div> 
                   </form>';

}else if(isset($_GET['subcheck'])){
  $conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
$current=$_GET['subcheck'];
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient_checkup WHERE checkup_id=$current";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

	 echo' <form action="databaseAdd.php" method="post">
                  <form class="user">
                  <div class="container">
                  <div class="row">



                    <div class="col-md-4">
                    <div class="form-group">
                    Last Date of Delivery
                    <input type="date" class="form-control form-control-user" name="patient_ldd" required  value="'.$row["checkup_ldd"].'">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    LMP
                    <input type="date" class="form-control form-control-user" name="patient_lmp" readonly  value="'.$row["checkup_lmp"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    EDC
                    <input type="text" class="form-control form-control-user" name="patient_edc" id="edcup"  readonly   value="'.$row["checkup_edc"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Date of Admission
                    <input type="text" class="form-control form-control-user" name="patient_doa" readonly   id="doa" placeholder="Enter Date of Admission">
                    </div>
                    </div>
 
                    <div class="col-md-6">
                    <div class="form-group">
                    Time of Admission
                    <input type="text" class="form-control form-control-user" name="patient_toa" readonly   id="toa"  placeholder="Enter Time of Admission">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Blood Pressure
                    <input type="text" class="form-control form-control-user" name="patient_bp"  required   value="'.$row["checkup_bp"].'">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                    Weight
                    <input type="text" class="form-control form-control-user" name="patient_weight" required    value="'.$row["checkup_weight"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Body Temperature
                    <input type="text" class="form-control form-control-user" name="patient_temp"  required   value="'.$row["checkup_temp"].'">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    PR
                    <input type="text" class="form-control form-control-user" name="patient_pr"  required   value="'.$row["checkup_pr"].'">
                    </div>
                    </div>
                      

                    <div class="col-md-3">
                    <div class="form-group">
                    RR
                    <input type="text" class="form-control form-control-user" name="patient_rr"  required  value="'.$row["checkup_rr"].'">
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Fundic Height
                    <input type="text" class="form-control form-control-user" name="patient_fh"  required   value="'.$row["checkup_fh"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    FHB
                    <input type="text" class="form-control form-control-user" name="patient_fhb"  required  value="'.$row["checkup_fhb"].'">
                    </div>
                    </div>
 <input type="text" class="form-control form-control-user" name="checkup_id"  hidden  value="'.$row["checkup_id"].'">
                    <div class="col-md-4">
                    <div class="form-group">
                    AOG
                    <input type="text" class="form-control form-control-user" name="patient_aog"  required  value="'.$row["checkup_aog"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Location
                    <input type="text" class="form-control form-control-user" name="patient_loc"  required  value="'.$row["checkup_location"].'">
                    </div>
                    </div>
 <input type="hidden" class="form-control form-control-user" name="patient_caseno"  required  value="'.$row["patient_caseno"].'" placeholder="Enter Location">
                    <div class="col-md-4">
                    <div class="form-group">
                    Presentation
                    <input type="text" class="form-control form-control-user" name="patient_pres"  required  value="'.$row["checkup_present"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Pallor
                    <input type="text" class="form-control form-control-user" name="patient_pallor"  required   value="'.$row["checkup_pallar"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Edema
                    <input type="text" class="form-control form-control-user" name="patient_edema"  required   value="'.$row["checkup_edema"].'">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    Remarks
                    <input type="text" class="form-control form-control-user" name="patient_remarks"  required   value="'.$row["checkup_remarks"].'">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    TCB Date
                    <input type="text" class="form-control form-control-user" name="patient_tcb" id="tcbup"  readonly>
                    </div>
                    </div>


                    </div>
                    </div>
                   
                    <div class="container">
                    <div class="row">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3">
                     <button type="submit" class="btn btn-primary btn-user btn-block" name="add_subcheck">Add Subcheckup</button>
                    </div>
                    </div>
                    </div> 
                   </form>';
}
		

}
}

	
	
	$condb= new connectdb('root','','jclinic');

	


?>
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
<script>
function getTimeToday() {
    time = new Date();

var hh = time.getHours();
var mm = time.getMinutes();
var ss = time.getSeconds() 
if(hh<12){
 
ss="am";
}else{
  hh=hh-12;
  ss="pm";
}
if(mm<10){
mm="0"+mm;
}else{
 
}
document.getElementById("toa").value = hh + ":" + mm + " " + ss;
}
function getdateToday() {
   var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
document.getElementById("doa").value = dd + "/" + mm + "/" + yyyy;

}
getTimeToday();
getdateToday();

function getTCBdate() {
    var date = new Date();
    var newdate = new Date(date);
  newdate.setDate(newdate.getDate() + 30);
   var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();
    if(mm<10){
  mm="0"+mm;
}
if(dd<10){
  dd="0"+dd;
}
   var someFormattedDate = dd + '/' + mm + '/' + y;
     document.getElementById('tcbup').value = someFormattedDate;
     document.getElementById('tcbup1').value = someFormattedDate;
}
getTCBdate();
function getdate() {
    var tt = document.getElementById('lmp').value;

    var date = new Date(tt);
    var newdate = new Date(date);
  var newdate1 = new Date(date);

    newdate.setDate(newdate.getDate() + 280);
     newdate1.setDate(newdate1.getDate() + 30);
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();
     var dd1 = newdate1.getDate();
    var mm1 = newdate1.getMonth() + 1;
    var y1 = newdate1.getFullYear();
if(mm<10){
  mm="0"+mm;
}
if(dd<10){
  dd="0"+dd;
}
    var someFormattedDate = dd + '/' + mm + '/' + y;
      var someFormattedDate1 = dd1 + '/' + mm1 + '/' + y1;
    document.getElementById('edcup').value = someFormattedDate;
  
}</script>
</body>

</html>