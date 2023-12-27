<?php 
if (isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$str = <<<MY_MARKER
<script type="text/javascript">
  alert("New record created successfully");
</script>
MY_MARKER;

$cname=$_POST['cname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$rcno=$_POST['rcno'];
$muss=$_POST['muss'];
$mobile=$_POST['mobile'];
$add=$_POST['adher'];
$adstetus=$_POST['adstetus'];
if($gen=="male"){
	$gen="पुरूष";
}
elseif($gen=="female"){
	$gen="महिला";
}
$sql = "INSERT INTO `rcard` (`CFNAME`, `MNAME`,`FNAME`,`DOB`,`GEN`,`RCN`,`MUSS`,`MNO`,`ADD`,`MPHOTO`,`HPHOTO`,`SPHOTO`,`DPHOTO`,`EPHOTO`,`FPHOTO`,`GPHOTO`,`ADDER`,`DOCA`,`DOCB`,`DOCC`,`DOCD`,`ADDRN`)
VALUES (N'$cname',N'$mname',N'$fname','$dob',N'$gen','$rcno',N'$muss','$mobile','$add','','','','','','','','','','','','','$adstetus')";

if ($conn->query($sql) === TRUE) {
    echo $str;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else{
	echo"worng attempt";
}
?>