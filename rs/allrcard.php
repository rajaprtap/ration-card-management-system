<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<title>rason card result</title>
<body  style="background-color:Violet;">
<h1 style="background-color:DodgerBlue;border:2px solid Tomato; " >All rason card</h1>
<p></br></p>
<ul>
<li><a href="http://localhost/rs/allrcard.php">All rason card</a></li>
<li><a href="http://localhost/rs">Home</a></li>
</ul>
  <table border="1" >
 <tr>
    <th>NO.</th>
	<th>ID</th>
	<th>Rason no.</th>
    <th>Candidat name</th>
	<th>can. mother</th>
	<th>can father</th>
	<th>dob</th>
	<th>gen</th>
	<th>relation</th>
	<th>mobileno</th>
	<th>addar no</th>
 
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset( $conn, 'utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `ID`, `CFNAME`, `MNAME`,`FNAME`,`DOB`,`GEN`,`RCN`,`MUSS`,`MNO`,`ADD` FROM rcard WHERE ADDRN ='np' ";
$result = mysqli_query($conn,$sql);
 
$i=0;
if ($i == mysqli_num_rows($result)) {
	echo"no ewsult found";
}
if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row=mysqli_fetch_assoc($result)) {
      ?>
	 </tr>
  <tr>
  <td><?php echo $i ?></td>
    <td><?php echo $row['ID'] ?></td>
    <td><?php echo $row['RCN'] ?></td>
	<td><?php echo  $row['CFNAME'] ?></td>
	<td><?php echo $row['MNAME'] ?></td>
	<td><?php echo $row['FNAME'] ?></td>
	<td><?php echo $row['DOB'] ?></td>
	<td><?php echo $row['GEN'] ?></td>
	<td><?php echo $row['MUSS'] ?></td>
	<td><?php echo $row['MNO'] ?></td>
	<td><?php echo $row['ADD'] ?></td>

<?php	
$i++;   
    }
} else {
    echo "0 results";
}
$conn->close();
?>
	
</tr>
  </table>
  
  </html>
  </body>