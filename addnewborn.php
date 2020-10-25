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
         function hideme() {

          var dropdown=document.getElementById("hideme").value;
          if(dropdown="other"){document.getElementById("baby_place").value=dropdown;
          document.getElementById("baby_place").required=true;
          }
else{
  document.getElementById("baby_place").value=dropdown;
    document.getElementById("baby_place").required=true;
}

        }
        hideme();
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
             <a class="collapse-item" href="newrec.php">Delivery Records</a>
            <a class="collapse-item" href="babyrec.php">Newborn Records</a>
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
<input type="text" class="form-control form-control-user" name="patient_caseno" hidden   value="<?php echo $_GET['parent']?>">
  <input type="text" class="form-control form-control-user" name="newborn_id" hidden   value="<?php echo $_GET['addnewborn']?>">
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
                    Sex
                  <select id="cars" class="form-control form-control-user" required  name="baby_sex">
                    <option value="" disabled selected>Choose Sex</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    </select>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Birthday <input type="date" class="form-control form-control-user" name="baby_birthday" required  placeholder="Enter birthday">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Type of Birth  <input type="text" class="form-control form-control-user" name="baby_tob" required placeholder="Enter type of birth">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    If multiple birth, child was  <input type="text" class="form-control form-control-user" name="baby_mulbirth" required placeholder="Enter answer">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Order of Birth
            
<input type="textbox" name="baby_place" class="form-control form-control-user" required placeholder="eg. first, second etc." >
</div>
</div>
                    <div class="col-md-3">
                    <div class="form-group">
                    Weight at Birth <input type="text" class="form-control form-control-user" name="baby_wab" required placeholder="Enter weight at birth">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                  Mother's Name  <input type="text" class="form-control form-control-user" name="baby_mother" required placeholder="Enter mother's name">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    Citizenship  <input type="text" class="form-control form-control-user" name="baby_mcitizenship" required placeholder="Enter citizenship">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Religion  <input type="text" class="form-control form-control-user" name="baby_mreligion" required placeholder="Enter religion">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Total number of children born alive  <input type="text" class="form-control form-control-user" name="baby_bornalive" required placeholder="Enter answer">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                     Total number of living children(including recent) <input type="text" class="form-control form-control-user" name="baby_totalalive" required placeholder="Enter answer">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Total number of children born alive but are now dead <input type="text" class="form-control form-control-user" name="baby_deceased" required placeholder="Enter answer">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Occupation <input type="text" class="form-control form-control-user" name="baby_moccup" required placeholder="Enter occupation">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Age<input type="text" class="form-control form-control-user" name="baby_mage" required placeholder="Enter mother age">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Residence<input type="text" class="form-control form-control-user" name="baby_mres" required placeholder="Enter mother residence">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Father Name<input type="text" class="form-control form-control-user" name="baby_father" required placeholder="Enter father name">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Citizenship<input type="text" class="form-control form-control-user" name="baby_fcitizenship" required placeholder="Enter father citizenship">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Religion<input type="text" class="form-control form-control-user" name="baby_freligion" required placeholder="Enter father religion">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Occupation<input type="text" class="form-control form-control-user" name="baby_foccup" required placeholder="Enter father occupation">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Age<input type="text" class="form-control form-control-user" name="baby_fage" required placeholder="Enter father age">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    Residence<input type="text" class="form-control form-control-user" name="baby_fres" required placeholder="Enter father residence">
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
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="add_baby">Register Newborn</button>
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
<script>
function setTextReq(){
   
                    
                        
    if(document.getElementById("other").style.visibility=='visible'){
        document.getElementById("other").required = true;
    }else{
    document.getElementById("other").required = false;
    }
}
setTextReq();
</script>

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
