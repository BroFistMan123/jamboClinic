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
<head> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="idle.js"></script>
<script>
function getDate(){
   var todaydate = new Date();
   var day = todaydate.getDate();
   var month = todaydate.getMonth() + 1;
   var year = todaydate.getFullYear();
   var datestring = day + "/" + month + "/" + year;
   document.getElementById("frmDate").value = datestring;
  } 
getDate(); 
$("#formUpd :input").change(function() {
   $("#formUpd").data("changed",true);
});
if ($("#formUpd").data("changed")) {
   $('#button').prop('disabled', false);
}
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
     
function myFunction() { $('#button').prop('disabled', false);}
function myFunction1() { $('#button').prop('disabled', false);}
function myFunction2() { $('#button').prop('disabled', false);}
function myFunction3() { $('#button').prop('disabled', false);}
function myFunction4() { $('#button').prop('disabled', false);}
function myFunction5() { $('#button').prop('disabled', false);}
function myFunction6() { $('#button').prop('disabled', false);}
function myFunction7() { $('#button').prop('disabled', false);}
function myFunction8() { $('#button').prop('disabled', false);}
function myFunction9() { $('#button').prop('disabled', false);}
function myFunction10() { $('#button').prop('disabled', false);}
function myFunction11() { $('#button').prop('disabled', false);}
function myFunction12() { $('#button').prop('disabled', false);}
function myFunction13() { $('#button').prop('disabled', false);}
function myFunction14() { $('#button').prop('disabled', false);}
function myFunction15() { $('#button').prop('disabled', false);}
function myFunction16() { $('#button').prop('disabled', false);}
function myFunction17() { $('#button').prop('disabled', false);}
function myFunction18() { $('#button').prop('disabled', false);}


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
      <li class="nav-item active">
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
        <a class="nav-link" href="about.php">
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
<?php



if(isset($_GET['subcheck'])){

 
  // echo 'the clients id is: '.$_GET['idNo'].'and you at the ADD PREMATERNAL PREGNACNY';
  $current=$_GET['subcheck'];
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
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
                    <input type="date"  id="myInput" oninput="myFunction()" class="form-control form-control-user" name="patient_ldd" required value='.$row["checkup_ldd"].' placeholder="Enter Last Date of Delivery">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    LMP
                    <input type="date"  id="myInput1" oninput="myFunction1()" class="form-control form-control-user" name="patient_lmp"  required value='.$row["checkup_lmp"].'  placeholder="Enter LMP">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    EDC
                    <input type="date  id="myInput2" oninput="myFunction2()" class="form-control form-control-user" name="patient_edc"  required value='.$row["checkup_edc"].' placeholder="Enter EDC">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Date of Admission
                    <input type="text"  id="myInput3" oninput="myFunction3()" class="form-control form-control-user" name="patient_doa"  required value='.$row["checkup_doa"].' placeholder="Enter Date of Admission">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Time of Admission
                    <input type="text"  id="myInput4" oninput="myFunction4()" class="form-control form-control-user" name="patient_toa" value='.$row["checkup_toa"].' required  placeholder="Enter Time of Admission">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Blood Pressure
                    <input type="text"  id="myInput5" oninput="myFunction5()" class="form-control form-control-user" name="patient_bp"  required value='.$row["checkup_bp"].' placeholder="Enter Blood Pressure">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                    Weight
                    <input type="text"  id="myInput6" oninput="myFunction6()" class="form-control form-control-user" name="patient_weight" required  value='.$row["checkup_weight"].' placeholder="Enter Weight">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Body Temperature
                    <input type="text"  id="myInput7" oninput="myFunction7()" class="form-control form-control-user" name="patient_temp"  required value='.$row["checkup_temp"].' placeholder="Enter Body Temperature">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    PR
                    <input type="text"  id="myInput8" oninput="myFunction8()" class="form-control form-control-user" name="patient_pr"  required value='.$row["checkup_pr"].' placeholder="Enter PR">
                    </div>
                    </div>
                      

                    <div class="col-md-3">
                    <div class="form-group">
                    RR
                    <input type="text"  id="myInput9" oninput="myFunction9()" class="form-control form-control-user" name="patient_rr"  required value='.$row["checkup_rr"].' placeholder="Enter RR">
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Fundic Height
                    <input type="text"  id="myInput10" oninput="myFunction10()" class="form-control form-control-user" name="patient_fh"  required value='.$row["checkup_fh"].' placeholder="Enter Fundic Height">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    FHB
                    <input type="text"  id="myInput11" oninput="myFunction11()" class="form-control form-control-user" name="patient_fhb"  required value='.$row["checkup_fhb"].' placeholder="Enter FHB">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    AOG
                    <input type="text"  id="myInput12" oninput="myFunction12()" class="form-control form-control-user" name="patient_aog"  required value='.$row["checkup_aog"].' placeholder="Enter AOG">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Location
                    <input type="text"  id="myInput13" oninput="myFunction13()" class="form-control form-control-user" name="patient_loc"  required value="'.$row["checkup_location"].'" placeholder="Enter Location">
                    </div>
                    </div>
 <input type="hidden" class="form-control form-control-user" name="patient_caseno"  required  value='.$current.' placeholder="Enter Location">
                    <div class="col-md-4">
                    <div class="form-group">
                    Presentation
                    <input type="text"  id="myInput14" oninput="myFunction14()" class="form-control form-control-user" name="patient_pres"  required value='.$row["checkup_present"].' placeholder="Enter Presentation">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Pallor
                    <input type="text"  id="myInput15" oninput="myFunction15()" class="form-control form-control-user" name="patient_pallor"  required value='.$row["checkup_pallar"].' placeholder="Enter Pallor">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Edema
                    <input type="text"  id="myInput16" oninput="myFunction16()" class="form-control form-control-user" name="patient_edema"  required value='.$row["checkup_edema"].' placeholder="Enter Edema">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    Remarks
                    <input type="text"  id="myInput17" oninput="myFunction17()" class="form-control form-control-user" name="patient_remarks"  required value="'.$row["checkup_remarks"].'" placeholder="Enter Remarks">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    TCB Date
                    <input type="date"  id="myInput18" oninput="myFunction18()" class="form-control form-control-user" name="patient_tcb"  required value='.$row["checkup_tcb"].' placeholder="Enter TCB Date">
                    </div>
                    </div>


                    </div>
                    </div>
                   
                    <div class="container">
                    <div class="row">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3" id="myDIV">
                        <a href=viewCheckup.php?idNo='.$row['checkup_id']. ' class="btn btn-primary"  >Back</a>
                        
                     <button type="submit" style= " margin-top: 10px !important"  class="btn btn-primary btn-user btn-block" disabled id="button"  name="upd_checkup">Update CheckUp</button>
                    </div>
                    </div>
                    </div> 
                   </form>
                   '
                   ;
}


}
}else if(isset($_GET['subidNo'])){

 
  // echo 'the clients id is: '.$_GET['idNo'].'and you at the ADD PREMATERNAL PREGNACNY';
  $current=$_GET['subidNo'];
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient_subcheckup WHERE subcheckup_id=$current";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

  
	 echo'<div id="printMe"> <form action="databaseAdd.php" method="post">
                  <form class="user">
                  <div class="container">
                  <div class="row">



                    <div class="col-md-4">
                    <div class="form-group">
                    Last Date of Delivery
                    <input type="date"  id="myInput" oninput="myFunction()" class="form-control form-control-user" name="patient_ldd" readonly value='.$row["checkup_ldd"].' placeholder="Enter Last Date of Delivery">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    LMP
                    <input type="date"  id="myInput1" oninput="myFunction1()" class="form-control form-control-user" name="patient_lmp"  readonly value='.$row["checkup_lmp"].'  placeholder="Enter LMP">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    EDC
                    <input type="text  id="myInput2" oninput="myFunction2()" class="form-control form-control-user" name="patient_edc"  readonly value='.$row["checkup_edc"].' placeholder="Enter EDC">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Date of Admission
                    <input type="text"  id="myInput3" oninput="myFunction3()" class="form-control form-control-user" name="patient_doa"  readonly value='.$row["checkup_doa"].' placeholder="Enter Date of Admission">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Time of Admission
                    <input type="text"  id="myInput4" oninput="myFunction4()" class="form-control form-control-user" name="patient_toa" value="'.$row["checkup_toa"].'" readonly  placeholder="Enter Time of Admission">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Blood Pressure
                    <input type="text"  id="myInput5" oninput="myFunction5()" class="form-control form-control-user" name="patient_bp"  readonly value='.$row["checkup_bp"].' placeholder="Enter Blood Pressure">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                    Weight
                    <input type="text"  id="myInput6" oninput="myFunction6()" class="form-control form-control-user" name="patient_weight" readonly  value='.$row["checkup_weight"].' placeholder="Enter Weight">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Body Temperature
                    <input type="text"  id="myInput7" oninput="myFunction7()" class="form-control form-control-user" name="patient_temp"  readonly value='.$row["checkup_temp"].' placeholder="Enter Body Temperature">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    PR
                    <input type="text"  id="myInput8" oninput="myFunction8()" class="form-control form-control-user" name="patient_pr"  readonly value='.$row["checkup_pr"].' placeholder="Enter PR">
                    </div>
                    </div>
                      

                    <div class="col-md-3">
                    <div class="form-group">
                    RR
                    <input type="text"  id="myInput9" oninput="myFunction9()" class="form-control form-control-user" name="patient_rr"  readonly value='.$row["checkup_rr"].' placeholder="Enter RR">
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Fundic Height
                    <input type="text"  id="myInput10" oninput="myFunction10()" class="form-control form-control-user" name="patient_fh"  readonly value='.$row["checkup_fh"].' placeholder="Enter Fundic Height">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    FHB
                    <input type="text"  id="myInput11" oninput="myFunction11()" class="form-control form-control-user" name="patient_fhb"  readonly value='.$row["checkup_fhb"].' placeholder="Enter FHB">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    AOG
                    <input type="text"  id="myInput12" oninput="myFunction12()" class="form-control form-control-user" name="patient_aog"  readonly value='.$row["checkup_aog"].' placeholder="Enter AOG">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Location
                    <input type="text"  id="myInput13" oninput="myFunction13()" class="form-control form-control-user" name="patient_loc"  readonly value="'.$row["checkup_location"].'" placeholder="Enter Location">
                    </div>
                    </div>
 <input type="hidden" class="form-control form-control-user" name="patient_caseno"  readonly  value='.$current.' placeholder="Enter Location">
                    <div class="col-md-4">
                    <div class="form-group">
                    Presentation
                    <input type="text"  id="myInput14" oninput="myFunction14()" class="form-control form-control-user" name="patient_pres"  readonly value='.$row["checkup_present"].' placeholder="Enter Presentation">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Pallor
                    <input type="text"  id="myInput15" oninput="myFunction15()" class="form-control form-control-user" name="patient_pallor"  readonly value='.$row["checkup_pallar"].' placeholder="Enter Pallor">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Edema
                    <input type="text"  id="myInput16" oninput="myFunction16()" class="form-control form-control-user" name="patient_edema"  readonly value='.$row["checkup_edema"].' placeholder="Enter Edema">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    Remarks
                    <input type="text"  id="myInput17" oninput="myFunction17()" class="form-control form-control-user" name="patient_remarks"  readonly value="'.$row["checkup_remarks"].'" placeholder="Enter Remarks">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    TCB Date
                    <input type="text"  id="myInput18" oninput="myFunction18()" class="form-control form-control-user" name="patient_tcb"  readonly value='.$row["checkup_tcb"].' placeholder="Enter TCB Date">
                    </div>
                    </div>


                    </div>
                    </div>
                   </div>
                    <div class="container">
                    <div class="row">

                    <div class="col-md-7">
                    </div>
                       <div class="col-md-2">
                    <input type="button"  onclick="printDiv()" value="Print Record" class="btn btn-primary">
                    </div>
<div class="col-md-3">
                    <a href=update.php?updatesub='.$current. ' class="btn btn-primary"  >Update Subcheckup</a>
                    </div>
                 
                    </div>
                    </div> 
                   </form>
                   '
                   ;
}


}
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
 


   echo' <form action="databaseAdd.php" id="formUpd" method="post">
  
                  <form class="user">
                  <div class="container">
                  <div class="row">



                    <div class="col-md-4">
                    <div class="form-group">
                  Name
                    <input type="text" class="form-control form-control-user" name="newborn_name" required oninput="myFunction3()"  value="'. $row['newborn_name'].'">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    Midwife
                    <input type="text" class="form-control form-control-user" name="newborn_midwife" oninput="myFunction3()"  required  value="'. $row['newborn_midwife'].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Bed No
                    <input type="text" class="form-control form-control-user" name="newborn_bedno" oninput="myFunction3()" required  value="'. $row['newborn_bedno'].'">
                    </div>
                    </div>
    <input type="text" class="form-control form-control-user" name="newborn_caseno"  hidden  value='. $row['newborn_caseno'].'>
        <input type="text" class="form-control form-control-user" name="newborn"  hidden  value='.$ded1.'>
                    <div class="col-md-2">
                    <div class="form-group">
                    Case No
                    <input type="text" class="form-control form-control-user"  name="newborn_casen" oninput="myFunction3()" disabled  value='.$_GET['parent'].'>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Delivery Date
                    <input type="date" class="form-control form-control-user" name="newborn_dd" oninput="myFunction3()" required  value="'. $row['newborn_dd'].'">
                    </div>
                    </div>

                    <div class="col-md-2">
                    <div class="form-group">
                   Time
                    <input type="time" class="form-control form-control-user" name="newborn_time"  required  oninput="myFunction3()" value="'. $row['newborn_time'].'">
                    </div>
                    </div>
                      <div class="col-md-3">  
                    <div class="form-group">
                          Sterile
                    <input type="checkbox" name="newborn_sterile" value="yes" oninput="myFunction3()" '.$inputanswer[0].'>
                    </div>
                    </div>
                      

                    <div class="col-md-4">  
                    <div class="form-group">
                   Delivered by
                    <input type="text" class="form-control form-control-user" name="newborn_delby" required  oninput="myFunction3()" value="'. $row['newborn_delby'].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                  Assisted by
                    <input type="text" class="form-control form-control-user" name="newborn_ass" oninput="myFunction3()" required  value="'. $row['newborn_ass'].'">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                   Type of Delivery:       Spontaneous
                    <input type="checkbox" name="newborn_tod" oninput="myFunction3()" '.$inputanswer[1].'>
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
                    <input type="time" class="form-control form-control-user" name="oxy_time" oninput="myFunction3()" required  value="'. $row['oxy_time'].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                   Drug given
                    <input type="text" class="form-control form-control-user" name="oxy_drug" oninput="myFunction3()" required  value="'. $row['oxy_drug'].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    IM
                  <input type="radio"  name="group1" '.$inputanswer[2].' value="im" oninput="myFunction3()" required class="check">
                  IV
                   <input type="radio"  name="group1" '.$inputanswer[3].' value="iv" oninput="myFunction3()" required class="check">
                 
                    </div>
                    </div>

                    <div class="col-md-12">
                      <hr>
                  <h4>Laceration       Yes
                  <input type="radio" onclick="ifYes()"  name="group2" value="yes" oninput="myFunction3()" required class="check">
                  No
                   <input type="radio"  onclick="ifNo()"  name="group2" value="no" oninput="myFunction3()" required class="check">
                    </div>
                                

                    <div class="col-md-4">
                    <div class="form-group">
                    Repair Degree
                    <input type="text" id="myBtn" required class="form-control form-control-user" oninput="myFunction3()" name="newborn_degree">
                    </div>
                    </div>
                     <div class="col-md-4">
                    <div class="form-group">
                   Yes
                  <input type="radio" id="myBtn1" disabled name="group3"  value="yes" oninput="myFunction3()"  class="check">
                  No
                   <input type="radio"  id="myBtn2" name="group3" value="no"  disabled oninput="myFunction3()" class="check">
                    </div>
                    </div>
 <div class="col-md-12">
                      <hr>
                  <h4>Placenta      
                    </div>
                  

                    <div class="col-md-12">
                    <div class="form-group">
                    Spontaneous
                  <input type="radio"  name="group4" value="spontaneous" '.$inputanswer[8].' oninput="myFunction3()" required class="check">
                  Manual Removal
                   <input type="radio"  name="group4" value="manual" '.$inputanswer[9].' oninput="myFunction3()" required class="check">
                      Schultz
                   <input type="radio"  name="group4" value="schultz" '.$inputanswer[10].' oninput="myFunction3()" required class="check">
                      Manual Exploration
                   <input type="radio"  name="group4" value="manualE" '.$inputanswer[11].' oninput="myFunction3()" required class="check">
                    </div>
                    </div>

                  

                    <div class="col-md-6">
                    <div class="form-group">
                    Placenta Time out
                    <input type="text" class="form-control form-control-user" name="newborn_timeout" oninput="myFunction3()" required  value="'. $row['newborn_timeout'].'">
                     Complete
                  <input type="radio"  name="group5" value="complete" '.$inputanswer[12].' oninput="myFunction3()" required class="check">
                 Not Complete
                   <input type="radio"  name="group5" value="incomplete" '.$inputanswer[13].' oninput="myFunction3()" required class="check">
                    </div>
                    </div>

                 <div class="col-md-12">
                      <hr>
                  <h4>Anesthesia      
                    </div>
  <div class="col-md-4">
                    <div class="form-group">
                    Agent
 <input type="text" class="form-control form-control-user" name="newborn_agent"  required oninput="myFunction3()" value="'. $row['newborn_agent'].'">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
                    Dosage
 <input type="text" class="form-control form-control-user" name="newborn_dosage"  required oninput="myFunction3()" value="'. $row['newborn_dosage'].'">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
                    Method
 <input type="text" class="form-control form-control-user" name="newborn_method"  required oninput="myFunction3()" value="'. $row['newborn_method'].'">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                  Uterus Contracted :
    Yes
                   <input type="radio"  name="group6" value="yes" '.$inputanswer[14].' oninput="myFunction3()" required class="check">
                      No
                   <input type="radio"  name="group6" value="no" '.$inputanswer[15].' oninput="myFunction3()" required class="check">
                    </div>
                    </div>
                     <div class="col-md-12">
                    <div class="form-group">
                  Blood Loss :
    Slight
                   <input type="radio"  name="group7" value="slight" '.$inputanswer[16].' oninput="myFunction3()" required class="check">
                      Moderate
                   <input type="radio"  name="group7" value="moderate" required '.$inputanswer[17].' oninput="myFunction3()" class="check">
                   Hemorrhage
                   <input type="radio"  name="group7" value="hemorrhage" required '.$inputanswer[18].' oninput="myFunction3()" class="check">
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
 <input type="text" class="form-control form-control-user" name="patient_name" oninput="myFunction3()"  disabled value="'. $row['newborn_name'].' (Changes take effect after update)">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
              Age
 <input type="text" class="form-control form-control-user" name="newborn_age" oninput="myFunction3()" required  value="'. $row['newborn_age'].'">
                    </div>
                    </div>
                      <div class="col-md-4">
                    <div class="form-group">
              Date and Time
 <input type="datetime-local" class="form-control form-control-user" name="newborn_dat" oninput="myFunction3()" required  value="'. $row['newborn_dat'].'">
                    </div>
                    </div>
                       <div class="col-md-12">
                    <div class="form-group">
         Management Notes
 <textarea class="autoExpand" rows="3" data-min-rows="3" oninput="myFunction3()" required name="newborn_comment">'. $row['newborn_comment'].'</textarea>
                    </div>
                    </div>
                      
                    <div class="container">
                    <div class="row">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3">
                 <button type="submit" style= " margin-top: 10px !important"  class="btn btn-primary btn-user btn-block" disabled id="button"  name="upd_delrec">Update Delivery Record</button>
                    </div>
                    </div>
                    </div> 
                   </form>';
                   }
                  }
                }
else if(isset($_GET['idNo'])){
 
  // echo 'the clients id is: '.$_GET['idNo'].'and you at the ADD PREMATERNAL PREGNACNY';
  $current=$_GET['idNo'];
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
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
                    <input type="date"  id="myInput" oninput="myFunction()" class="form-control form-control-user" name="patient_ldd" required value='.$row["checkup_ldd"].' placeholder="Enter Last Date of Delivery">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    LMP
                    <input type="date"  id="myInput1" oninput="myFunction1()" class="form-control form-control-user" name="patient_lmp"  required value='.$row["checkup_lmp"].'  placeholder="Enter LMP">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    EDC
                    <input type="date"  id="myInput2" oninput="myFunction2()" class="form-control form-control-user" name="patient_edc"  required value='.$row["checkup_edc"].' placeholder="Enter EDC">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Date of Admission
                    <input type="text"  id="myInput3" oninput="myFunction3()" class="form-control form-control-user" name="patient_doa"  required value='.$row["checkup_doa"].' placeholder="Enter Date of Admission">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Time of Admission
                    <input type="time"  id="myInput4" oninput="myFunction4()" class="form-control form-control-user" name="patient_toa" value='.$row["checkup_toa"].' required  placeholder="Enter Time of Admission">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Blood Pressure
                    <input type="text"  id="myInput5" oninput="myFunction5()" class="form-control form-control-user" name="patient_bp"  required value='.$row["checkup_bp"].' placeholder="Enter Blood Pressure">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                    Weight
                    <input type="text"  id="myInput6" oninput="myFunction6()" class="form-control form-control-user" name="patient_weight" required  value='.$row["checkup_weight"].' placeholder="Enter Weight">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Body Temperature
                    <input type="text"  id="myInput7" oninput="myFunction7()" class="form-control form-control-user" name="patient_temp"  required value='.$row["checkup_temp"].' placeholder="Enter Body Temperature">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    PR
                    <input type="text"  id="myInput8" oninput="myFunction8()" class="form-control form-control-user" name="patient_pr"  required value='.$row["checkup_pr"].' placeholder="Enter PR">
                    </div>
                    </div>
                      

                    <div class="col-md-3">
                    <div class="form-group">
                    RR
                    <input type="text"  id="myInput9" oninput="myFunction9()" class="form-control form-control-user" name="patient_rr"  required value='.$row["checkup_rr"].' placeholder="Enter RR">
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Fundic Height
                    <input type="text"  id="myInput10" oninput="myFunction10()" class="form-control form-control-user" name="patient_fh"  required value='.$row["checkup_fh"].' placeholder="Enter Fundic Height">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    FHB
                    <input type="text"  id="myInput11" oninput="myFunction11()" class="form-control form-control-user" name="patient_fhb"  required value='.$row["checkup_fhb"].' placeholder="Enter FHB">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    AOG
                    <input type="text"  id="myInput12" oninput="myFunction12()" class="form-control form-control-user" name="patient_aog"  required value='.$row["checkup_aog"].' placeholder="Enter AOG">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Location
                    <input type="text"  id="myInput13" oninput="myFunction13()" class="form-control form-control-user" name="patient_loc"  required value="'.$row["checkup_location"].'" placeholder="Enter Location">
                    </div>
                    </div>
 <input type="hidden" class="form-control form-control-user" name="patient_caseno"  required  value='.$_GET['idNo'].' placeholder="Enter Location">
                    <div class="col-md-4">
                    <div class="form-group">
                    Presentation
                    <input type="text"  id="myInput14" oninput="myFunction14()" class="form-control form-control-user" name="patient_pres"  required value='.$row["checkup_present"].' placeholder="Enter Presentation">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Pallor
                    <input type="text"  id="myInput15" oninput="myFunction15()" class="form-control form-control-user" name="patient_pallor"  required value='.$row["checkup_pallar"].' placeholder="Enter Pallor">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Edema
                    <input type="text"  id="myInput16" oninput="myFunction16()" class="form-control form-control-user" name="patient_edema"  required value='.$row["checkup_edema"].' placeholder="Enter Edema">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    Remarks
                    <input type="text"  id="myInput17" oninput="myFunction17()" class="form-control form-control-user" name="patient_remarks"  required value="'.$row["checkup_remarks"].'" placeholder="Enter Remarks">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    TCB Date
                    <input type="date"  id="myInput18" oninput="myFunction18()" class="form-control form-control-user" name="patient_tcb"  required value='.$row["checkup_tcb"].' placeholder="Enter TCB Date">
                    </div>
                    </div>


                    </div>
                    </div>
                   
                    <div class="container">
                    <div class="row">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3" id="myDIV">
                        <a href=viewCheckup.php?idNo='.$row['checkup_id']. ' class="btn btn-primary"  >Back</a>
                        
                     <button type="submit" style= " margin-top: 10px !important"  class="btn btn-primary btn-user btn-block" disabled id="button"  name="upd_checkup">Update CheckUp</button>
                    </div>
                    </div>
                    </div> 
                   </form>
                   '
                   ;
}

}
}else if(isset($_GET['patientNo'])){
// echo 'the clients id is: '.$_GET['patientNo'].'and you at the ADD POSTMATERNAL PREGNANSCT';
$clientId=$_GET['patientNo'];
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
                    First Name<input type="text" class="form-control form-control-user"  name="first_name" required oninput="myFunction()"    value="'.$row["patient_fname"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Middle Name <input type="text" class="form-control form-control-user" name="middle_name" required oninput="myFunction1()"  value="'.$row["patient_mname"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Last Name <input type="text" class="form-control form-control-user" name="last_name" required oninput="myFunction2()"  value="'.$row["patient_lname"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Nickname  <input type="text" class="form-control form-control-user" name="nickname" required oninput="myFunction3()"  value="'.$row["patient_nname"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Age <input type="text" class="form-control form-control-user" name="age"  required oninput="myFunction4()" value='.$row["patient_age"].'>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Religion  <input type="text" class="form-control form-control-user" name="religion" required oninput="myFunction5()" value="'.$row["patient_religion"].'">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    Blood Type  <input type="text" class="form-control form-control-user" name="blood_type" required oninput="myFunction6()" value="'.$row["patient_bloodtype"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Menarch  <input type="text" class="form-control form-control-user" name="menarche" required oninput="myFunction7()" value="'.$row["patient_menarche"].'">
                    </div>
                    </div>
                     
                    <div class="col-md-3">
                    <div class="form-group">
                    Birthday <input type="date" class="form-control form-control-user" name="birthday" required oninput="myFunction8()" value="'.$row["patient_bday"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Civil Status  <input type="text" class="form-control form-control-user" name="civil_status" required oninput="myFunction9()" value="'.$row["patient_cstat"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Occupation  <input type="text" class="form-control form-control-user" name="occupation" required oninput="myFunction10()" value="'.$row["patient_occup"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Phone Number  <input type="text" class="form-control form-control-user" name="phone" required oninput="myFunction11()" value="'.$row["patient_phone"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Address  <input type="text" class="form-control form-control-user" name="address" required oninput="myFunction12()" value="'.$row["patient_address"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Husband Name  <input type="text" class="form-control form-control-user" name="husband_name" required oninput="myFunction13()" value="'.$row["patient_husname"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Husband Phone Number  <input type="text" class="form-control form-control-user" name="husband_phone" required oninput="myFunction14()" value="'.$row["patient_phonehus"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Contact Person Name <input type="text" class="form-control form-control-user" name="contact_name" required oninput="myFunction15()" value="'.$row["patient_phoneper"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Contact Person Number<input type="text" class="form-control form-control-user" name="contact_phone" required oninput="myFunction16()" value="'.$row["patient_contnum"].'">
                    </div>
                    </div>
                    </div>
                    </div>
                   
        
                    <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div>';
                    "</table>";

             
                  
echo'<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th colspan="3">Past and Present Illness/ Health Problems</th>
                     
                      
                    </tr>
                    <tr>
                      <th colspan="3">Please put a check on the appropriate column</th>
                     
                      
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
                  <td>'. '<input type="radio" name="group1" value="yes" '.$agree[0].' required oninput="myFunction16()"  class="check">' .
                  '</td><td>'.'<input type="radio" name="group1" value="no" '.$disagree[0].' required oninput="myFunction16()"  class="check">'.'</td>'.
                   '<tr><td>'. $tabled[1]. '</td>
                  <td>'. '<input type="radio" name="group2" value="yes" '.$agree[1].' required oninput="myFunction16()" class="check">' .
                  '</td><td>'.'<input type="radio" name="group2" value="no" '.$disagree[1].' required oninput="myFunction16()"  class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[2]. '</td>
                  <td>'. '<input type="radio" name="group3" value="yes" '.$agree[2].' required oninput="myFunction16()"  class="check">' .
                  '</td><td>'.'<input type="radio" name="group3" value="no" '.$disagree[2].' required oninput="myFunction16()"  class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[3]. '</td>
                  <td>'. '<input type="radio" name="group4" value="yes" '.$agree[3].' required oninput="myFunction16()"  class="check">' .
                  '</td><td>'.'<input type="radio" name="group4" value="no" '.$disagree[3].' required oninput="myFunction16()"  class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[4]. '</td>
                  <td>'. '<input type="radio" name="group5" value="yes" '.$agree[4].' required oninput="myFunction16()"  class="check">' .
                  '</td><td>'.'<input type="radio" name="group5" value="no" '.$disagree[4].' required oninput="myFunction16()"  class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[5]. '</td>
                  <td>'. '<input type="radio" name="group6" value="yes" '.$agree[5].' required oninput="myFunction16()"  class="check">' .
                  '</td><td>'.'<input type="radio" name="group6" value="no" '.$disagree[5].' required oninput="myFunction16()"  class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[6]. '</td>
                  <td>'. '<input type="radio" name="group7" value="yes" '.$agree[6].'  required oninput="myFunction16()" class="check">' .
                  '</td><td>'.'<input type="radio" name="group7" value="no" '.$disagree[6].' required oninput="myFunction16()" class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[7]. '</td>
                  <td>'. '<input type="radio" name="group8" value="yes" '.$agree[7].' required oninput="myFunction16()"  class="check">' .
                  '</td><td>'.'<input type="radio" name="group8" value="no" '.$disagree[7].' required oninput="myFunction16()"  class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[8]. '</td>
                  <td>'. '<input type="radio" name="group9" value="yes" '.$agree[8].'  class="check">' .
                  '</td><td>'.'<input type="radio" name="group9" value="no" '.$disagree[8]. '  required oninput="myFunction16()" class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[9]. '</td>
                  <td>'. '<input type="radio" name="group10" value="yes" '.$agree[9].' required oninput="myFunction16()" class="check">' .
                  '</td><td>'.'<input type="radio" name="group10" value="no" '.$disagree[9].' required oninput="myFunction16()" class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[10]. '</td>
                  <td>'. '<input type="radio" name="group11" value="yes" '.$agree[10].' required oninput="myFunction16()" class="check">' .
                  '</td><td>'.'<input type="radio" name="group11" value="no" '.$disagree[10].' required oninput="myFunction16()" class="check">'.'</td>
                  
                  
</tr>'. '<input type="hidden" name="lol" value='.$clientId.' required oninput="myFunction16()"  class="check">' ;
            
 } 
} else { echo "0 results"; }
$conn->close();

 echo'              
               </tbody>
</table>

<div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div>
<div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-user btn-block" disabled id="button" name="upd_patient">Update Patient</button>
                    </div>
                    </div>
                    </div>
                    </form>';
	
}
else if(isset($_GET['updatesub'])){
 
  // echo 'the clients id is: '.$_GET['idNo'].'and you at the ADD PREMATERNAL PREGNACNY';
  $current=$_GET['updatesub'];
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient_subcheckup WHERE subcheckup_id=$current";
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
                    <input type="date"  id="myInput" oninput="myFunction()" class="form-control form-control-user" name="patient_ldd" required value='.$row["checkup_ldd"].' placeholder="Enter Last Date of Delivery">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    LMP
                    <input type="date"  id="myInput1" oninput="myFunction1()" class="form-control form-control-user" name="patient_lmp"  required value='.$row["checkup_lmp"].'  placeholder="Enter LMP">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    EDC
                    <input type="date"  id="myInput2" oninput="myFunction2()" class="form-control form-control-user" name="patient_edc"  required value='.$row["checkup_edc"].' placeholder="Enter EDC">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Date of Admission
                    <input type="text"  id="myInput3" oninput="myFunction3()" class="form-control form-control-user" name="patient_doa"  required value='.$row["checkup_doa"].' placeholder="Enter Date of Admission">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Time of Admission
                    <input type="time"  id="myInput4" oninput="myFunction4()" class="form-control form-control-user" name="patient_toa" value='.$row["checkup_toa"].' required  placeholder="Enter Time of Admission">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Blood Pressure
                    <input type="text"  id="myInput5" oninput="myFunction5()" class="form-control form-control-user" name="patient_bp"  required value='.$row["checkup_bp"].' placeholder="Enter Blood Pressure">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                    Weight
                    <input type="text"  id="myInput6" oninput="myFunction6()" class="form-control form-control-user" name="patient_weight" required  value='.$row["checkup_weight"].' placeholder="Enter Weight">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Body Temperature
                    <input type="text"  id="myInput7" oninput="myFunction7()" class="form-control form-control-user" name="patient_temp"  required value='.$row["checkup_temp"].' placeholder="Enter Body Temperature">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    PR
                    <input type="text"  id="myInput8" oninput="myFunction8()" class="form-control form-control-user" name="patient_pr"  required value='.$row["checkup_pr"].' placeholder="Enter PR">
                    </div>
                    </div>
                      

                    <div class="col-md-3">
                    <div class="form-group">
                    RR
                    <input type="text"  id="myInput9" oninput="myFunction9()" class="form-control form-control-user" name="patient_rr"  required value='.$row["checkup_rr"].' placeholder="Enter RR">
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Fundic Height
                    <input type="text"  id="myInput10" oninput="myFunction10()" class="form-control form-control-user" name="patient_fh"  required value='.$row["checkup_fh"].' placeholder="Enter Fundic Height">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    FHB
                    <input type="text"  id="myInput11" oninput="myFunction11()" class="form-control form-control-user" name="patient_fhb"  required value='.$row["checkup_fhb"].' placeholder="Enter FHB">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    AOG
                    <input type="text"  id="myInput12" oninput="myFunction12()" class="form-control form-control-user" name="patient_aog"  required value='.$row["checkup_aog"].' placeholder="Enter AOG">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Location
                    <input type="text"  id="myInput13" oninput="myFunction13()" class="form-control form-control-user" name="patient_loc"  required value="'.$row["checkup_location"].'" placeholder="Enter Location">
                    </div>
                    </div>
 <input type="hidden" class="form-control form-control-user" name="patient_caseno"  required  value='.$row['patient_caseno'].' placeholder="Enter Location">
  <input type="hidden" class="form-control form-control-user" name="subcheckup_id"  required  value='.$row['subcheckup_id'].' placeholder="Enter Location">
                    <div class="col-md-4">
                    <div class="form-group">
                    Presentation
                    <input type="text"  id="myInput14" oninput="myFunction14()" class="form-control form-control-user" name="patient_pres"  required value='.$row["checkup_present"].' placeholder="Enter Presentation">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Pallor
                    <input type="text"  id="myInput15" oninput="myFunction15()" class="form-control form-control-user" name="patient_pallor"  required value='.$row["checkup_pallar"].' placeholder="Enter Pallor">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Edema
                    <input type="text"  id="myInput16" oninput="myFunction16()" class="form-control form-control-user" name="patient_edema"  required value='.$row["checkup_edema"].' placeholder="Enter Edema">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    Remarks
                    <input type="text"  id="myInput17" oninput="myFunction17()" class="form-control form-control-user" name="patient_remarks"  required value="'.$row["checkup_remarks"].'" placeholder="Enter Remarks">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    TCB Date
                    <input type="date"  id="myInput18" oninput="myFunction18()" class="form-control form-control-user" name="patient_tcb"  required value='.$row["checkup_tcb"].' placeholder="Enter TCB Date">
                    </div>
                    </div>


                    </div>
                    </div>
                   
                    <div class="container">
                    <div class="row">

                    <div class="col-md-9">
                    </div>

                    <div class="col-md-3" id="myDIV">
                        <a href=viewCheckup.php?idNo='.$row['subcheckup_id']. ' class="btn btn-primary"  >Back</a>
                        
                     <button type="submit" style= " margin-top: 10px !important"  class="btn btn-primary btn-user btn-block" disabled id="button"  name="upd_subcheckup">Update subcheckup</button>
                    </div>
                    </div>
                    </div> 
                   </form>
                   '
                   ;
}}

}
else if(isset($_GET['baby'])){
  $current=$_GET['baby'];
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient_baby WHERE baby_id=$current";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  echo '<div id="printMe">
  <form action="databaseAdd.php" name="myForm" onsubmit="return validateForm()"  method="post">
                  <form class="user">
                  <div class="container">
                  <div class="row">
<input type="text" class="form-control form-control-user" name="patient_caseno" hidden   value="">
  <input type="text" class="form-control form-control-user" name="newborn_id" hidden   value="">
                    <div class="col-md-4">
                    <div class="form-group">
                    First Name<input type="text" class="form-control form-control-user" name="first_name" readonly  value="'.$row['first_name'].'" >
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Middle Name <input type="text" class="form-control form-control-user" name="middle_name" readonly value="'.$row['middle_name'].'"  >
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Last Name <input type="text" class="form-control form-control-user" name="last_name" readonly value="'.$row['last_name'].'"  >
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Sex
                      Last Name <input type="text" class="form-control form-control-user" name="baby_sex" readonly value="'.$row['baby_sex'].'" >
                  
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Birthday <input type="date" class="form-control form-control-user" name="baby_birthday" readonly value="'.$row['baby_birthday'].'"  >
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Type of Birth  <input type="text" class="form-control form-control-user" name="baby_tob" readonly value="'.$row['baby_tob'].'"  >
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    If multiple birth, child was  <input type="text" class="form-control form-control-user" name="baby_mulbirth" readonly value="'.$row['baby_mulbirth'].'" >
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Order of Birth
                <input type="text" class="form-control form-control-user" name="baby_mulbirth" readonly value="'.$row['baby_place'].'" >
                   

</div>
</div>
                    <div class="col-md-3">
                    <div class="form-group">
                    Weight at Birth <input type="text" class="form-control form-control-user" name="baby_wab" readonly  value="'.$row['baby_wab'].'" >
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                  Mother`s Name  <input type="text" class="form-control form-control-user" name="baby_mother" readonly  value="'.$row['baby_mother'].'" >
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Citizenship  <input type="text" class="form-control form-control-user" name="baby_mcitizenship" readonly value="'.$row['baby_mcitizenship'].'"  >
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Religion  <input type="text" class="form-control form-control-user" name="baby_mreligion" readonly value="'.$row['baby_mreligion'].'" >
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Total number of children born alive  <input type="text" class="form-control form-control-user" name="baby_bornalive" readonly value="'.$row['baby_bornalive'].'" >
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                     Total number of living children(including recent) <input type="text" class="form-control form-control-user" name="baby_totalalive" readonly value="'.$row['baby_totalalive'].'" >
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Total number of children born alive but are now dead <input type="text" class="form-control form-control-user" name="baby_deceased" readonly  value="'.$row['baby_deceased'].'" >
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Occupation <input type="text" class="form-control form-control-user" name="baby_moccup" readonly  value="'.$row['baby_moccup'].'" >
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Age<input type="text" class="form-control form-control-user" name="baby_mage" readonly  value="'.$row['baby_mage'].'" >
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Residence<input type="text" class="form-control form-control-user" name="baby_mres" readonly value="'.$row['baby_mres'].'" >
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Father Name<input type="text" class="form-control form-control-user" readonly name="baby_father" value="'.$row['baby_father'].'" >
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Citizenship<input type="text" class="form-control form-control-user" name="baby_fcitizenship" readonly value="'.$row['baby_fcitizenship'].'"  >
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Religion<input type="text" class="form-control form-control-user" name="baby_freligion" readonly value="'.$row['baby_freligion'].'" >
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Occupation<input type="text" class="form-control form-control-user" name="baby_foccup" readonly value="'.$row['baby_foccup'].'" >
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Age<input type="text" class="form-control form-control-user" name="baby_fage" readonly value="'.$row['baby_fage'].'" >
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Residence<input type="text" class="form-control form-control-user" name="baby_fres" readonly value="'.$row['baby_fres'].'" >
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                   
        
                    <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div>
                   </div>
                   </div>
                    

  <div class ="container">
                    <div class ="row">
                    <div class="col-md-12">
                    <hr>
                    </div>
                    <div class="col-md-7">
                    </div>
<div class="col-md-1">
                  <a href=babyrec.php class="btn btn-secondary"  >Back</a>
                    </div>
                     <div class="col-md-2">
                    <input type="button"  onclick="printDiv()" value="Print Record" class="btn btn-primary">
                    </div>
                    <div class="col-md-2">
                     <a href=update.php?updatebaby='.$current. ' class="btn btn-primary"  >Update Newborn</a>
                    </div>
                    </div>
                    </div>
                   </form>
 ';
                      }
                    }
                  
	
}else if(isset($_GET['updatebaby'])){
  $current=$_GET['updatebaby'];
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient_baby WHERE baby_id=$current";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  echo '
  <form action="databaseAdd.php" name="myForm" onsubmit="return validateForm()"  method="post">
                  <form class="user">
                  <div class="container">
                  <div class="row">
<input type="text" class="form-control form-control-user" name="patient_caseno" hidden   value="'.$row['patient_caseno'].'">
  <input type="text" class="form-control form-control-user" name="newborn_id" hidden   value="'.$current.'">
                    <div class="col-md-4">
                    <div class="form-group">
                    First Name<input type="text" class="form-control form-control-user" name="first_name" required   value="'.$row['first_name'].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Middle Name <input type="text" class="form-control form-control-user" name="middle_name" required value="'.$row['middle_name'].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Last Name <input type="text" class="form-control form-control-user" name="last_name" required value="'.$row['last_name'].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Sex
                  <select id="cars" class="form-control form-control-user" required name="baby_sex">
                    <option value="" disabled selected>Choose Sex</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    </select>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Birthday <input type="date" class="form-control form-control-user" name="baby_birthday" required  value="'.$row['baby_birthday'].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Type of Birth  <input type="text" class="form-control form-control-user" name="baby_tob" required value="'.$row['baby_tob'].'">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    If multiple birth, child was  <input type="text" class="form-control form-control-user" name="baby_mulbirth" required value="'.$row['baby_mulbirth'].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Order of Birth
            
<input type="textbox" name="baby_place" class="form-control form-control-user" required value="'.$row['baby_place'].'" >
</div>
</div>
                    <div class="col-md-3">
                    <div class="form-group">
                    Weight at Birth <input type="text" class="form-control form-control-user" name="baby_wab" required value="'.$row['baby_wab'].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                  Mother`s Name  <input type="text" class="form-control form-control-user" name="baby_mother" required value="'.$row['baby_mother'].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Citizenship  <input type="text" class="form-control form-control-user" name="baby_mcitizenship" required value="'.$row['baby_mcitizenship'].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Religion  <input type="text" class="form-control form-control-user" name="baby_mreligion" required value="'.$row['baby_mreligion'].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Total number of children born alive  <input type="text" class="form-control form-control-user" name="baby_bornalive" required value="'.$row['baby_bornalive'].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                     Total number of living children(including recent) <input type="text" class="form-control form-control-user" name="baby_totalalive" required value="'.$row['baby_totalalive'].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Total number of children born alive but are now dead <input type="text" class="form-control form-control-user" name="baby_deceased" required value="'.$row['baby_deceased'].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Occupation <input type="text" class="form-control form-control-user" name="baby_moccup" required value="'.$row['baby_moccup'].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Age<input type="text" class="form-control form-control-user" name="baby_mage" required value="'.$row['baby_mage'].'">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Residence<input type="text" class="form-control form-control-user" name="baby_mres" required value="'.$row['baby_mres'].'">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Father Name<input type="text" class="form-control form-control-user" name="baby_father" required value="'.$row['baby_father'].'">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Citizenship<input type="text" class="form-control form-control-user" name="baby_fcitizenship" required value="'.$row['baby_fcitizenship'].'">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Religion<input type="text" class="form-control form-control-user" name="baby_freligion" required value="'.$row['baby_freligion'].'">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Occupation<input type="text" class="form-control form-control-user" name="baby_foccup" required value="'.$row['baby_foccup'].'">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Age<input type="text" class="form-control form-control-user" name="baby_fage" required value="'.$row['baby_fage'].'">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Residence<input type="text" class="form-control form-control-user" name="baby_fres" required value="'.$row['baby_fres'].'">
                    </div>
                    </div>
                    </div>
                    </div>
                   
        
                    <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div>
                   
                    

  <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div>
<div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="upd_baby">Update Newborn</button>
                    </div>
                    </div>
                    </div>
                   </form>';
                    
                       }
}
}
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
<script> function getupDate(){
   var todaydate = new Date();
   var day = todaydate.getDate();
  
   var month = todaydate.getMonth() + 1;
 
   var year = todaydate.getFullYear();
    var time = todaydate.getTime();
    var hr = todaydate.getHours();
    var am="am";
  
   
    if(hr>12){
      hr=hr-12;
var am="pm";
    }
var min = todaydate.getMinutes();
 if(day<10){
    var day="0"+day;
   }
   if(month<10){
     var month="0"+month;
   }
    var timestring=""+hr+":"+min+" "+am;
   var datestring = year + "-" + month + "-" + day;
   document.getElementById("frmDate").value = datestring;
   document.getElementById('txtid').value = timestring;
   document.getElementById('txtid1').value = timestring;
    document.getElementById("frmDate1").value = datestring;
  } 
  function prohibit(){
    if( document.getElementById("baby_place").value == "other"){
document.getElementById("other").value= required;
    }
  }
  getDate();</script>
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