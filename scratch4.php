
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
                    <div class="col-md-9">
                    </div>';
                    "</table>";

             
                     echo' <a href=update.php?patientNo='.$clientId. ' target="_blank" class="btn btn-primary">Edit Checkup</a> ';
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
                  
                  
</tr>';
            
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
                      <th>Checkup</th>
                      <th>Time of Admission</th>
                      <th>Date of Admission</th>
                      <th>Remarks</th>
                      <th>View Checkup</th>
                      
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
                 
                 '  <a href=viewCheckup.php?idNo='.$row['checkup_id']. ' target="_blank" class="btn btn-primary">View</a>';
               

                 
                  '</td></tr> ';
               }
              }

               ?>
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
                   </form>

                   <?php
                  $sql= "UPDATE `patient` SET 
                  `patient_bloodtype`=[value-2],`patient_religion`=[value-3],
                  `patient_menarche`=[value-4],`patient_age`=[value-5],
                  `patient_lname`=[value-6],`patient_fname`=[value-7],
                  `patient_mname`=[value-8],`patient_nname`=[value-9],
                  `patient_bday`=[value-10],`patient_cstat`=[value-11],
                  `patient_occup`=[value-12],`patient_phone`=[value-13],
                  `patient_address`=[value-14],`patient_husname`=[value-15],
                  `patient_contnum`=[value-16],`patient_phonehus`=[value-17],
                  `patient_phoneper`=[value-18],`patient_i1`=[value-19],
                  `patient_i2`=[value-20],`patient_i3`=[value-21],
                  `patient_i4`=[value-22],`patient_i5`=[value-23],
                  `patient_i6`=[value-24],`patient_i7`=[value-25],
                  `patient_i8`=[value-26],`patient_i9`=[value-27],
                  `patient_i10`=[value-28],`patient_i11`=[value-29] WHERE patient_id=$patient_caseno";