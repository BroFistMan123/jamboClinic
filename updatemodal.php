<!DOCTYPE html>
<html lang="en">
<?php
include_once("userman.php");
include_once('loading.php');
if(isset($_SESSION['ongoingsession'])){

}else{
  header("Location: 404.php");
}
	
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="idle.js"></script>
<style>
.switch-field {
	display: flex;
	margin-bottom: 36px;
	overflow: hidden;
}

.switch-field input {
	position: absolute !important;
	clip: rect(0, 0, 0, 0);
	height: 1px;
	width: 1px;
	border: 0;
	overflow: hidden;
}

.switch-field label {
	background-color: #e4e4e4;
	color: rgba(0, 0, 0, 0.6);
	font-size: 14px;
	line-height: 1;
	text-align: center;
	padding: 8px 16px;
	margin-right: -1px;
	border: 1px solid rgba(0, 0, 0, 0.2);
	box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
	transition: all 0.1s ease-in-out;
}

.switch-field label:hover {
	cursor: pointer;
}

.switch-field input:checked + label {
	background-color: #a5dc86;
	box-shadow: none;
}

.switch-field label:first-of-type {
	border-radius: 4px 0 0 4px;
}

.switch-field label:last-of-type {
	border-radius: 0 4px 4px 0;
}

/* This is just for CodePen. */

.form {
	max-width: 600px;
	font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
	font-weight: normal;
	line-height: 1.625;
	margin: 8px auto;
	padding: 16px;
}

h2 {
	font-size: 18px;
	margin-bottom: 8px;
}
</style>
<script>
 $(window).on('load',function(){
    $('#myModal').modal('show');
        $('#m1').modal('show');
        
 
    });
$(document).ready(function(){
  $("checkbox").click(function(){
    $("button").toggle();
  });
});
$(document).ready(function(){
    $("#mer").on("change", "input:checkbox", function(){
        $("#mer").submit();
    });
});
function redPage() {
  window.location.href='userman.php';
}
function myFunction2() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function myFunction3() {
  
 
}
function myFunction4() { $('#button').prop('disabled', false);}
function myFunction() {
 aler($("#mySelect option:selected").index());
  var input=document.querySelector("mySelect");
  var x = document.getElementById("mySelect").selectedIndex;
  var y = document.getElementById("mySelect").options;

  
  if(x=0){
    alert("The administrator has full permission in the system. He/She can manage user privileges and patient records")
  } else if(y[x].index=1){
    alert("The clerk has average permission in the system. He/She can manage patient records")
  }else {
    alert("The midwife has limited permission in the system. He/She can only view patient records")
  }
}
function changeCheck() {

$( "#but" ).prop( "disabled", false );
  
  
 
}
$("#radio-one").click(function(){
    $("#second").click(); 
    return false;
});
$("#radio-two").click(function(){
    $("#second").click(); 
    return false;
});
</script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jambo Maternity Clinic Record Management System</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
<li class="nav-item active ">
        <a class="nav-link" href="userman.php">
         >

          <span>User Management</span></a>

      </li>
      <!-- Nav Item - Reports -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
         >

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
                 <a class="collapse-item" href="babyrec.php">Newborn Records</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Add Patient -->


      <li class="nav-item ">
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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
        <div class="container">
        <!-- End of Topbar -->
        
       
                <?php
             
                if(isset($_GET['idNo'])&&isset($_GET['uname'])){
$adminid=$_GET['idNo'];
   echo' <div class="modal fade" id="m1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form action="databaseAdd.php" name="myForm"  method="post">
      <div class="modal-content">
        <div class="modal-header">
        
          <h4 class="modal-title"> Edit User </h4>
        </div>
        <div class="modal-body">
         
   <input type="text" class="form-control form-control-user" hidden name="userid" value="'.$_GET["idNo"].'">
   <input type="text" class="form-control form-control-user" hidden name="username2" value="'.$_GET["uname"].'">
                    <div class="col-md-4">
                      <div class="form-group">
                        Username <input type="text" class="form-control form-control-user" name="user_name" required value="'.$_GET["uname"].'">
                      </div>
                        <div class="form-group">
                        Password <input type="password" class="form-control form-control-user" name="password" required >
                      </div>
                    <div class="form-group">
                     <label for="privilege">Choose Privilege:</label>
  <select id="cars'.$adminid.'" required name="privilege">
    <option disabled selected value> -- select an option -- </option>
    <option value="administrator">administrator</option>
    <option value="clerk">clerk</option>
    
  </select>
                    </div>
                        <div class="form-group">
                     <label for="status">Choose status:</label>
  <select id="status'.$adminid.'" required name="status">
    <option disabled selected value> -- select an option -- </option>
    <option value="active">active</option>
    <option value="void">void</option>
    
  </select>
  
                    </div>
                    
                    </div>

          
        </div>
        <div class="modal-footer">
          <a  href=userman.php><button type="button" class="btn btn-default">Close</a></button>
 <input type="submit" value="Update User" name="upd_user" class="btn btn-primary" ></button></form>
  <form action="databaseAdd.php" name="myForm2"  method="post">
    <input type="text" class="form-control form-control-user" hidden name="userid" value="'.$_GET["idNo"].'">
             
        </div>
      </div>
        ';
    

                }else if(isset($_GET['adduser'])){
         

           
               echo' <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form action="databaseAdd.php" name="myForm"  method="post">
      <div class="modal-content">
        <div class="modal-header">
        
          <h4 class="modal-title"> Register User </h4>
        </div>
        <div class="modal-body">
         

                    <div class="col-md-4">
                      <div class="form-group">
                        Username <input type="text" class="form-control form-control-user"  name="user_name" required placeholder="Username">
                      </div>
                         <div class="form-group">
                        Password <input type="password" class="form-control form-control-user"  name="password" required placeholder="Password">
                      </div>
                    <div class="form-group">
                     <label for="privilege">Choose Privilege:</label>
  <select id="cars" required name="privilege">
    <option disabled selected value> -- select an option -- </option>
    <option value="administrator">administrator</option>
    <option value="clerk">clerk</option>
    
  </select>
                    </div>
                        <div class="form-group">
                     <label for="status">Choose status:</label>
  <select id="status" required name="status">
    <option disabled selected value> -- select an option -- </option>
    <option value="active">active</option>
    <option value="void">void</option>
    
  </select>
  
                    </div>
                    
                    </div>

          
        </div>
        <div class="modal-footer">
          <a  href=userman.php><button type="button" class="btn btn-default">Close</a></button>
 <input type="submit" value="Register User" name="reg_user" class="btn btn-primary" ></button>
          
        </div>
      </div> </form>';
                }
             
                ?>
           

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

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