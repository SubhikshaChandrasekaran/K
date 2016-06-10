<html>
<head>
<title>ADD</title>
</head>
<body>

<form name="form3" action="index.html" >
<input name="act" value="back" type="submit">
</form>
<?php
$mysqlport=getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
$dbname='k';
mysql_select_db($dbname);
$fname=$_POST["fname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$gender=$_POST["gender"];
$lname=$_POST["lname"];
$dob=$_POST["dob"];
$sql_insert="INSERT INTO
sample(fname,lname,gender,email,dob,mobile)VALUES('$fname','$lname','$gender','$email','$dob','$mobile')";
if($fname==NULL OR $lname==NULL OR $email==NULL OR $mobile==NULL)
	die('Please enter values for all the fields');
else
{
 if(!mysql_query($sql_insert,$conn))
 {
	 die('Error:'.mysql_error());
 }
 else
	 echo "Details has been inserted successfully!!";
}
mysql_close($conn)

?>
</body>
</html>