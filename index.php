<?php
require_once('class/functions.php');
include_once('class/connectdb.php');
include_once('loading.php');
session_start();
$condb= new connectdb('root','','jclinic');
if(isset($_SESSION['ongoingsession'])){

}else{
  header("Location: login.php");
}
$today = date("j");
if($today<10){
  $today="0".$today;
}
	$date=date("n"); 
$date1=date("Y");
if($date<10){
  $date="0".$date;
}
	$number1=$condb->checkAllPregnancies('patient');
    $number2=$condb->checkCheckUps('patient_checkup');
    $number3=$condb->getMonthly('patient_checkup',$date,$date1);
    $number4=$condb->getMonthly('patient_subcheckup',$date,$date1);
     $number5=$condb->getMonthly('patient_newborn',$date,$date1);
     $number6=$condb->getDaily('patient_checkup',$date,$date1,$today);
    $number7=$condb->getDaily('patient_subcheckup',$date,$date1,$today);
     $number8=$condb->getDaily('patient_newborn',$date,$date1,$today);
    $_SESSION["pregnantcount"]=$number1;
    $_SESSION["checkupCount"]=$number2;
      $_SESSION["monthlyCheckup"]=$number3;
    $_SESSION["monthlySubcheckup"]=$number4;
      $_SESSION["monthlyDelivery"]=$number5;
      $_SESSION["dailyCheckup"]=$number6;
    $_SESSION["dailySubcheckup"]=$number7;
      $_SESSION["dailyDelivery"]=$number8;
   
?>
<html lang="en">

<head>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="idle.js"></script>
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
   <link href="css/pmcss.css" rel="stylesheet">

</head>

<body  onload="loadingScreen()">
<div id="loader"></div>
<div id="page-top"  style="display:none;" class="animate-bottom">
  <!-- Page Wrapper -->
  
  <div id="wrapper" >

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
      <li class="nav-item active ">
        <a class="nav-link" href="index.php">
         

          <span>Reports</span></a>

      </li>
       

      <!-- Nav Item - Pages Records Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
           <i class="fas fa-notes-medical"></i>
          <span>Records</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Select Records:</h6>
            <a class="collapse-item" href="pregrec.php">Pregnant Records</a>
            <a class="collapse-item" href="newrec.php">Delivery Records</a>
                 <a class="collapse-item" href="newrec.php">Newborn Records</a>
          </div>
        </div>
      </li>
      

      <!-- Nav Item - Add Patient -->
      <li class="nav-item">
        <a class="nav-link" href="addpatient.php">
          <i class="fas fa-user-plus"></i>
          <span>Add Patient</span></a>
      </li>

      <!-- Nav Item - About -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-question-circle"></i>
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
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Reports</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Number of Pregnancies (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pregnancies</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                      echo $_SESSION["pregnantcount"];
                      ?>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Number of Pre-natal Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Prenatal Checkup</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION["checkupCount"] ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-notes-medical fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
               <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Monthly Checkup</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                      echo $_SESSION["monthlyCheckup"];
                      ?>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
               <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Monthly Subcheckup</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                      echo $_SESSION["monthlySubcheckup"];
                      ?>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Monthly Deliveries</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                      echo $_SESSION["monthlyDelivery"];
                      ?>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Newborn (Total) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Daily Checkups</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                      echo $_SESSION["dailyCheckup"];
                      ?>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Daily Subcheckups</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                      echo $_SESSION["dailySubcheckup"];
                      ?>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Daily Deliveries</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                      echo $_SESSION["dailyDelivery"];
                      ?>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
               
            </div>
           
            <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
            <h1 class="h3 mb-0 text-gray-800">Dues Today:</h1>
          </div>
          </div>
            <?php
                       $id=0;
                  $conn=mysqli_connect("localhost","root","", "jclinic");
                  if($conn->connect_error){
                    die("connection failed: " .$conn->error);
                  }
             	$nice=$today."/".$date."/".$date1;
	$sql= "SELECT patient_caseno,checkup_id,checkup_tcb, checkup_remarks FROM patient_checkup WHERE `checkup_tcb` LIKE '%$nice%' ";
               $result=$conn->query($sql);
              $check=1;
               $row;
               
	
    

               if($result->num_rows>0){
               while($row=$result->fetch_assoc()){
                 $id+=1;
                 $ded=$row['patient_caseno'];
                 $condb=new connectdb('root','','jclinic');
    $check=strval($condb->getFullName($ded));
    
echo ' <div class="col-xl-4 col-md-5 mb-5">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Checkup for'.$check.'</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      "<a href=viewCheckup.php?idNo='.$row['checkup_id']. '>'.$row['checkup_remarks'].'"</a>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>';
               }
              }

              //Subcheckups
               $conn=mysqli_connect("localhost","root","", "jclinic");
                  if($conn->connect_error){
                    die("connection failed: " .$conn->error);
                  }
             	$nice=$today."/".$date."/".$date1;
	$sql= "SELECT patient_caseno,subcheckup_id,checkup_id,checkup_tcb, checkup_remarks FROM patient_subcheckup WHERE `checkup_tcb` LIKE '%$nice%' ";
               $result=$conn->query($sql);
               $id; $check=1;
               $row;
               
	
    

               if($result->num_rows>0){
               while($row=$result->fetch_assoc()){
                 $id+=1;
                 $ded=$row['patient_caseno'];
                 $condb=new connectdb('root','','jclinic');
    $check=strval($condb->getFullName($ded));
echo ' <div class="col-xl-4 col-md-5 mb-5">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Subcheckup for'.$check.'</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      "<a href=update.php?subidNo='.$row['subcheckup_id']. '>'.$row['checkup_remarks'].'"</a>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>';
               }
              }
            if($id>0){
              
            }else{
echo '  <p class="h3 mb-0 text-blue-800" center>Nothing much happening right now</p>';
            }
               ?>
   
                
            <!-- Postnatal (Monthly) Card Example -->
          
 <!-- content HERE MERE
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
         

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              
        <!-- /.container-fluid -->

  
      <!-- End of Main Content -->

      <!-- Footer -->


      <!-- End of Footer -->

    </div>
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
