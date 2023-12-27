<?php
if ($_POST['admin']=='bhupendra'){
	?>
<html>
<head>
<title>rason card update form</title>
</head>
<body  style="background-color:Violet;">
<h1 style="background-color:DodgerBlue;border:2px solid Tomato; " >add new rason card</h1>
<table border="1" >
<form method="post" action="sendupdate.php">
<tr>
<td>candidat full name</td>
<td>
<input type="text" name="cname"/>
</td>
<td>candidate father name</td>
<td><input type="text" name="fname"></td>
</tr>
<tr><td>dob</td>
<td>
<input type="text" name="dob"/>
</td>
<td>gender</td>
<td><select name="gen" id="gen">
<option value="male">male</option>
<option value="female">female</option>
</select>
</tr>
<tr><td>rason card no.</td>
<td><input type="text" name="rcno"/></td>
<td>mobile no</td>
<td><input type="text" name="mobile"/></td></tr>
<tr>
<td>relation with mukhia</td>
<td><select name="muss">
<option value="स्वयं">self</option>
<option value="सौहर / पति">husband</option>
<option value="बेटा">son</option>
<option value="बेटी">dughter</option>
</select></td>
<td>addher no.</td><td><input type="text" name="adher"/></td>
</tr><tr><td>mother name</td><td><input type="text" name="mname"/><td>
<select name="adstetus">
<option value="up">have addhar</option>
<option value="np">not have addar</option></select></td><td>
<input type="hidden" name="admin" value="bhupendra"/>
<input type="submit" name="submit"/></td></tr></table>
</form>
</body>
</html>
<?php
}else{
	echo '<script>alert("you entering a worn input")</script>';
	echo'<script>history.back()</script>';
}