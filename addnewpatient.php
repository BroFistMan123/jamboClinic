<?php
require_once('class/functions.php');
include_once('class/connectdb.php');
session_start();
include_once('loading.php');
if (isset($_SESSION['message'])) {
    $show_message = $_SESSION['message'];
    $_SESSION['message'] = null;
}
session_write_close ();
if(isset($_SESSION['ongoingsession'])){

}else{
  header("Location: 404.php");
}
	
// ...

if (isset($show_message)) {
echo "<script>alert('{$show_message}');</script>";
}
?>
<html lang="en">
   
<head> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="idle.js"></script>
   <script>
   
    

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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
           <i class="fas fa-notes-medical"></i
          <span>Records</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Select Records:</h6>
            <a class="collapse-item" href="pregrec.php">Pregnant Records</a>
            <a class="collapse-item" href="newrec.php">Newborn Records</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Add Patient -->
      <li class="nav-item active">
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

        <!-- Begin Page Content -->
      



         <form action="databaseAdd.php" name="myForm" onsubmit="return validateForm()"  method="post">
                  <form class="user">
                  <div class="container">
                  <div class="row">

                    <div class="col-md-4">
                    <div class="form-group">
                    First Name<input type="text" class="form-control form-control-user" name="first_name" required   placeholder="Enter First Name">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Middle Name <input type="text" class="form-control form-control-user" name="middle_name" required  placeholder="Enter Middle Initial">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Last Name <input type="text" class="form-control form-control-user" name="last_name" required  placeholder="Enter Last Name">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Nickname  <input type="text" class="form-control form-control-user" name="nickname" required  placeholder="Enter nickname">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Age <input type="number" class="form-control form-control-user" name="age" required  placeholder="Enter age">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Religion  <input type="text" class="form-control form-control-user" name="religion" required placeholder="Enter religion">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    Blood Type  <input type="text" class="form-control form-control-user" name="blood_type" required placeholder="Enter blood type">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Menarch  <input type="text" class="form-control form-control-user" name="menarche" required placeholder="Enter menarche">
                    </div>
                    </div>
                     
                    <div class="col-md-3">
                    <div class="form-group">
                    Birthday <input type="date" class="form-control form-control-user" name="birthday" required placeholder="Enter birthday">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Civil Status  <input type="text" class="form-control form-control-user" name="civil_status" required placeholder="Enter civil status">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Occupation  <input type="text" class="form-control form-control-user" name="occupation" required placeholder="Enter occupation">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Phone Number  <input type="text" class="form-control form-control-user" name="phone" required placeholder="Enter phone number">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Address  <input type="text" class="form-control form-control-user" name="address" required placeholder="Enter address">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Husband Name  <input type="text" class="form-control form-control-user" name="husband_name" required placeholder="Enter husband name">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Husband Phone Number  <input type="text" class="form-control form-control-user" name="husband_phone" required placeholder="Enter husband phone">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Contact Person Name <input type="text" class="form-control form-control-user" name="contact_name" required placeholder="Enter contact name">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Contact Person Number<input type="text" class="form-control form-control-user" name="contact_phone" required placeholder="Enter Contact number">
                    </div>
                    </div>
                    </div>
                    </div>
                   
        
                    <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div>
                   
                    
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
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
             
                  <tbody>
                  
                     <?php
                     $tabled = array("Tuberculosis(14 days or more of cough)", "Heart Disease(Shortness of Breath)", "Diabetes(High Blood Sugar)","Hypertension(High Blood Pressure)"
                    , "Bronchial Asthma","Urinary Tract Infection","Smoking","Alcohol Intake","Malaria","Parasitism","Goiter");
                 
              
       


echo                  '<tr><td>'. $tabled[0]. '</td>
                  <td>'. '<input type="radio" name="group1" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group1" value="no" required class="check">'.'</td>'.
                   '<tr><td>'. $tabled[1]. '</td>
                  <td>'. '<input type="radio" name="group2" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group2" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[2]. '</td>
                  <td>'. '<input type="radio" name="group3" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group3" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[3]. '</td>
                  <td>'. '<input type="radio" name="group4" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group4" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[4]. '</td>
                  <td>'. '<input type="radio" name="group5" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group5" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[5]. '</td>
                  <td>'. '<input type="radio" name="group6" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group6" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[6]. '</td>
                  <td>'. '<input type="radio" name="group7" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group7" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[7]. '</td>
                  <td>'. '<input type="radio" name="group8" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group8" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[8]. '</td>
                  <td>'. '<input type="radio" name="group9" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group9" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[9]. '</td>
                  <td>'. '<input type="radio" name="group10" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group10" value="no" required class="check">'.'</td>'.
                  
                   '<tr><td>'. $tabled[10]. '</td>
                  <td>'. '<input type="radio" name="group11" value="yes" required class="check">' .
                  '</td><td>'.'<input type="radio" name="group11" value="no" required class="check">'.'</td>
                  
                  
</tr>';
            

               ?>
               </tbody>
</table>
  <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div>
<div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="reg_patient">Register Patient</button>
                    </div>
                    </div>
                    </div>
                   </form>
 
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
