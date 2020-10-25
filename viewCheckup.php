<?php
	
  session_start();

require_once('class/connectdb.php');
  require_once('class/functions.php');
    include_once('loading.php');
    if(isset($_SESSION['ongoingsession'])){

}else{
  header("Location: 404.php");
}


      // echo 'the clients id is: '.$_GET['idNo']. 'and you are located in PreMATERNAL';


  

  
  

  


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
   
<head> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="idle.js"></script>
   <script>
   function check($data) {
  document.getElementById($data).checked = true;
}

   $(document).ready(function(){
    $('.check').click(function() {
        $('.check').not(this).prop('checked', false);
    });
});
      function validateForm() {
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

<body  onload="loadingScreen()" id="myDivToPrint" >
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
                 <a class="collapse-item" href="newrec.php">Newborn Records</a>
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
      <div id="printMe">

<?php
if(isset($_GET['subidno'])){
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient_checkup WHERE checkup_id=$clientId";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {




     echo'    <form action="databaseAdd.php" name="myForm" onsubmit="return validateForm()"  method="post">
                    <form class="user">
                  <div class="container">
                  <div class="row">



                    <div class="col-md-4">
                    <div class="form-group">
                    Last Date of Delivery
                    <input type="text" class="form-control form-control-user" name="patient_ldd" disabled  placeholder="'.$row["checkup_ldd"].'">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    LMP
                    <input type="text" class="form-control form-control-user" name="patient_lmp"  disabled  placeholder="'.$row["checkup_lmp"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    EDC
                    <input type="text" class="form-control form-control-user" name="patient_edc"  disabled  placeholder="'.$row["checkup_edc"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Date of Admission
                    <input type="text" class="form-control form-control-user" name="patient_doa"  disabled  placeholder="'.$row["checkup_doa"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Time of Admission
                    <input type="text" class="form-control form-control-user" name="patient_toa"  disabled  placeholder="'.$row["checkup_toa"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Blood Pressure
                    <input type="text" class="form-control form-control-user" name="patient_bp"  disabled  placeholder="'.$row["checkup_bp"].'">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                    Weight
                    <input type="text" class="form-control form-control-user" name="patient_weight" disabled   placeholder="'.$row["checkup_weight"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Body Temperature
                    <input type="text" class="form-control form-control-user" name="patient_temp"  disabled  placeholder="'.$row["checkup_temp"].'">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    PR
                    <input type="text" class="form-control form-control-user" name="patient_pr"  disabled  placeholder="'.$row["checkup_pr"].'">
                    </div>
                    </div>
                      

                    <div class="col-md-3">
                    <div class="form-group">
                    RR
                    <input type="text" class="form-control form-control-user" name="patient_rr"  disabled  placeholder="'.$row["checkup_rr"].'">
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Fundic Height
                    <input type="text" class="form-control form-control-user" name="patient_fh"  disabled  placeholder="'.$row["checkup_fh"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    FHB
                    <input type="text" class="form-control form-control-user" name="patient_fhb"  disabled  placeholder="'.$row["checkup_fhb"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    AOG
                    <input type="text" class="form-control form-control-user" name="patient_aog"  disabled  placeholder="'.$row["checkup_aog"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Location
                    <input type="text" class="form-control form-control-user" name="patient_loc"  disabled  placeholder="'.$row["checkup_location"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Presentation
                    <input type="text" class="form-control form-control-user" name="patient_pres"  disabled  placeholder="'.$row["checkup_present"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Pallor
                    <input type="text" class="form-control form-control-user" name="patient_pallor"  disabled  placeholder="'.$row["checkup_pallar"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Edema
                    <input type="text" class="form-control form-control-user" name="patient_edema"  disabled  placeholder="'.$row["checkup_edema"].'">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    Remarks
                    
                    <input type="text" class="form-control form-control-user" name="patient_remarks"  disabled  placeholder="'.$row["checkup_remarks"].'">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    TCB Date
                    <input type="text" class="form-control form-control-user" name="patient_tcb"  disabled  placeholder="'.$row["checkup_tcb"].'">
                    </div>
                    </div>


                    </div>
                    </div>
                  </div>
                    <div class="container">
                    <div class="row">

                    <div class="col-md-6">
                    </div>

                    <div class="col-md-2">
                    <a href=update.php?idNo='.$row['checkup_id']. '  class="btn btn-primary">Back</a>
                    </div>
                    
                     <div class="col-md-2">
                    <a href=addCheckup.php?subcheck='.$row['checkup_id']. '  class="btn btn-primary">Edit Subcheckup</a>
                    </div>
                    
                    </div>
                    </div> 
                    <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div></div></form>';
                    
                    "</table></div>"
                     
                    ;

             
                    

            
 } 
} else { echo "0 results"; }

$conn->close();
echo'
               </tbody>
</table>';
}else{
  
$clientId=$_GET['idNo'];
$conn = mysqli_connect("localhost", "root", "", "jclinic");
// Check connection
if ($conn->connect_error) {
  
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM patient_checkup WHERE checkup_id=$clientId";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {




     echo'  <div id="printMe">   <form action="databaseAdd.php" name="myForm" onsubmit="return validateForm()"  method="post">
                    <form class="user">
                  <div class="container">
                  <div class="row">



                    <div class="col-md-4">
                    <div class="form-group">
                    Last Date of Delivery
                    <input type="text" class="form-control form-control-user" name="patient_ldd" disabled  placeholder="'.$row["checkup_ldd"].'">
                    </div>
                    </div>
                      
                    <div class="col-md-4">
                    <div class="form-group">
                    LMP
                    <input type="text" class="form-control form-control-user" name="patient_lmp"  disabled  placeholder="'.$row["checkup_lmp"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    EDC
                    <input type="text" class="form-control form-control-user" name="patient_edc"  disabled  placeholder="'.$row["checkup_edc"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Date of Admission
                    <input type="text" class="form-control form-control-user" name="patient_doa"  disabled  placeholder="'.$row["checkup_doa"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Time of Admission
                    <input type="text" class="form-control form-control-user" name="patient_toa"  disabled  placeholder="'.$row["checkup_toa"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Blood Pressure
                    <input type="text" class="form-control form-control-user" name="patient_bp"  disabled  placeholder="'.$row["checkup_bp"].'">
                    </div>
                    </div>

                    <div class="col-md-4">  
                    <div class="form-group">
                    Weight
                    <input type="text" class="form-control form-control-user" name="patient_weight" disabled   placeholder="'.$row["checkup_weight"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Body Temperature
                    <input type="text" class="form-control form-control-user" name="patient_temp"  disabled  placeholder="'.$row["checkup_temp"].'">
                    </div>
                    </div>

                    <div class="col-md-3">  
                    <div class="form-group">
                    PR
                    <input type="text" class="form-control form-control-user" name="patient_pr"  disabled  placeholder="'.$row["checkup_pr"].'">
                    </div>
                    </div>
                      

                    <div class="col-md-3">
                    <div class="form-group">
                    RR
                    <input type="text" class="form-control form-control-user" name="patient_rr"  disabled  placeholder="'.$row["checkup_rr"].'">
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                    <div class="form-group">
                    Fundic Height
                    <input type="text" class="form-control form-control-user" name="patient_fh"  disabled  placeholder="'.$row["checkup_fh"].'">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                    FHB
                    <input type="text" class="form-control form-control-user" name="patient_fhb"  disabled  placeholder="'.$row["checkup_fhb"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    AOG
                    <input type="text" class="form-control form-control-user" name="patient_aog"  disabled  placeholder="'.$row["checkup_aog"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Location
                    <input type="text" class="form-control form-control-user" name="patient_loc"  disabled  placeholder="'.$row["checkup_location"].'">
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    Presentation
                    <input type="text" class="form-control form-control-user" name="patient_pres"  disabled  placeholder="'.$row["checkup_present"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Pallor
                    <input type="text" class="form-control form-control-user" name="patient_pallor"  disabled  placeholder="'.$row["checkup_pallar"].'">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    Edema
                    <input type="text" class="form-control form-control-user" name="patient_edema"  disabled  placeholder="'.$row["checkup_edema"].'">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    Remarks
                    
                    <input type="text" class="form-control form-control-user" name="patient_remarks"  disabled  placeholder="'.$row["checkup_remarks"].'">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    TCB Date
                    <input type="text" class="form-control form-control-user" name="patient_tcb"  disabled  placeholder="'.$row["checkup_tcb"].'">
                    </div>
                    </div>


                    </div>
                    </div>
                   </div>
                   </div>
                    <div class="container">
                    <div class="row">

                    <div class="col-md-4">
                    </div>
                     <div class="col-md-2">
                   
                    </div>
   <div class="col-md-2">
                    <input type="button"  onclick="printDiv()" value="Print Record" class="btn btn-primary">
                    </div>
                    <div class="col-md-2">
                    <a href=update.php?idNo='.$row['checkup_id']. '  class="btn btn-primary">Edit Checkup</a>
                    </div>
                    
                     <div class="col-md-2">
                    <a href=addCheckup.php?subcheck='.$row['checkup_id']. '  class="btn btn-primary">Add subcheckup</a>
                    </div>
                    
<div class="col-md-12"><hr>
                    </div>
                    </div>
                    </div> 
                    <div class ="container">
                    <div class ="row">
                    <div class="col-md-9">
                    </div></div></form>';
                    
                    "</table>"
                     
                    ;

             
                    

            
 } 
} else { echo "0 results"; }

$conn->close();
               ?>
               </tbody>
</table>
<div class="table-responsive">
               
                  
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th>Subcheckup</th>
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
               $sql="SELECT subcheckup_id,checkup_id, checkup_toa, checkup_doa, checkup_remarks from patient_subcheckup WHERE  checkup_id=$clientId ";
               $result=$conn->query($sql);
               $id;
               $row;
$counter=0;
               if($result->num_rows>0){
               while($row=$result->fetch_assoc()){
$counter++;
             
                 echo '<tr><td> ' .$counter .'</td><td>' .$row['checkup_toa'] . '</td><td>'.$row['checkup_doa']. '</td><td>'.$row['checkup_remarks']. '</td><td>'.
                 
                 '  <a href=update.php?subidNo='.$row['subcheckup_id']. '  class="btn btn-primary">View</a>';
               

                 
                  '</td></tr> ';
               }
              }
            

 echo '


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


<script type="text/javascript">
  


</script>