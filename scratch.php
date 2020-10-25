 <?php
                  $conn=mysqli_connect("localhost","root","", "jclinic");
                  if($conn->connect_error){
                    die("connection failed: " .$conn->error);
                  }
               $sql="SELECT patient_caseno, patient_fname, patient_lname from patient";
               $result=$conn->query($sql);
               if($result->num_rows>0){
               while($row=$result->fetch_assoc()){
                 echo "<tr><td>" .$row["patient_caseno"] . "</td><td>".$row["patient_fname"]. "</td><td>".$row["patient_lname"]."</td></tr>";
               }
              }
               ?>

               <?php


require_once('class/connectdb.php');
	require_once('class/functions.php');
	session_start();


			echo 'the clients id is: '.$_GET['CASENo'];

	

	
	
	$condb= new connectdb('root','','jclinic');

	


?>
<script>
$(document).ready(function() {
    $('#btnSubmit').click(function(e) {
        var isValid = true;
        $('input[type="text"].required').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });
        if (isValid == false) 
            e.preventDefault();
        else 
            alert('Thank you for submitting');
    });
});
</script>

<script>
$(document).ready(function() {
    $('#btnSubmit').click(function(e) {
        var isValid = true;
        $('input[type="text"].required').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });
        if (isValid == false) 
            e.preventDefault();
        else 
            alert('Thank you for submitting');
    });
});
</script>

<fieldset id=$tabled[$checker]>
    <input type="radio" value="value1" name="group1">
    <input type="radio" value="value2" name="group1">
  </fieldset>

  <fieldset id="group2">
    <input type="radio" value="value1" name="group2">
    <input type="radio" value="value2" name="group2">
    <input type="radio" value="value3" name="group2">
  </fieldset>