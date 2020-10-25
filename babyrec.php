<?php
require_once('class/functions.php');
include_once('class/connectdb.php');
include_once('loading.php');
session_start();
if(isset($_SESSION['ongoingsession'])){

}else{
  header("Location: 404.php");
}
	
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

</head>

<body  onload="loadingScreen()" >
<div id="loader"></div>
<?php  if(isset($_SESSION['addCheckup'])) 
        { echo '<div class="alert alert-success" role="alert">
            Checkup successfully updated.
          </div>';
unset($_SESSION["addCheckup"]);
        }
        if(isset($_SESSION['addPatient'])) 
        { echo '<div class="alert alert-success" role="alert">
            Patient Record successfully updated.
          </div>';
unset($_SESSION["addPatient"]);
        } ?>
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
          <i class="fas fa-user-plus"></i>
          <span>Add Patient</span></a>
      </li>

      <!-- Nav Item - About -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
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

        <!-- Begin Page Content -->
 <div class="container-fluid">

          <!-- Page Heading -->

          <?php
        if(isset($_SESSION['added'])) 
        { echo '<div class="alert alert-success" role="alert">
            Successfully added to the database. 
          </div>';
unset($_SESSION["added"]);
        } if(isset($_SESSION['addnewborn'])) 
        { echo '<div class="alert alert-success" role="alert">
            Successfully added newborn record to the database. 
          </div>';
unset($_SESSION["addnewborn"]);
        }
         if(isset($_SESSION['updnewborn'])) 
        { echo '<div class="alert alert-success" role="alert">
           Successfully updated newborn record to the database. 
          </div>';
unset($_SESSION["updnewborn"]);
        }
         if(isset($_SESSION['wrong'])) 
        { echo '<div class="alert alert-danger" role="alert">
            Account already exist on the database. 
          </div>';

unset($_SESSION["wrong"]);
        }
          ?>
          <h1 class="h3 mb-2 text-gray-800">Newborn List</h1>
          <p class="mb-4">Existing newborn records are listed here. </a></p>
          <!-- <a href="addnewpatient.php"  target="_blank" class="btn btn-primary">ADD Patient</a> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Newborn List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
               
                  
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th>Newborn Count</th>
                      <th>Name</th>
                      <th>Birthday </th>
                      <th>Sex</th>
                      <th>Type of Birth</th>
                      <th>Operations</th>
                      
                    </tr>
                  </thead>
             
                  <tbody>
                     <?php
                     
                  $conn=mysqli_connect("localhost","root","", "jclinic");
                  if($conn->connect_error){
                    die("connection failed: " .$conn->error);
                  }
               $sql="SELECT baby_id, first_name, middle_name, last_name, baby_birthday, baby_sex, baby_tob from patient_baby";
               $result=$conn->query($sql);
               $id; $check=1;
               $row;
               
	$condb=new connectdb('root','','jclinic');
    

               if($result->num_rows>0){
               while($row=$result->fetch_assoc()){
                
                 echo '<tr><td>' .$check. '</td><td>'.$row['first_name']." " .$row['middle_name']." ".$row['last_name'].'</td><td>'.$row['baby_birthday']. '</td><td>'.$row['baby_sex'].'</td><td>'.$row['baby_tob']. '</td><td>'.
                 '<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Operations
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href=update.php?baby='.$row['baby_id'].'>View Baby Record</a></li>
     
    </ul>
  </div>';
              
                  '</td></tr> ';
                  $check++;
               }
              }

               ?>
               </tbody>
                </table>
           

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span></span>
          </div>
        </div>
      </footer>
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
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>