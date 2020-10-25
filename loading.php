<!DOCTYPE HTML>
<link href="css/pmcss.css" rel="stylesheet">
<script> 
var myVar;
function loadingScreen() {
  myVar = setTimeout(showPage, 500);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("page-top").style.display = "block";
}
  function printDiv() { 
            var divContents = document.getElementById("printMe").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body > <h1>Jambo Maternity Clinic </h1> <br>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); }
</script>
