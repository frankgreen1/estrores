
&lt;?php
$server = "localhost";
$dbuser = "root";
$dbpass ="";
$dbname ="registrationdb";
//connection between mysql and php
$con = mysql_connect($server,$dbuser,$dbpass);
//validate your connection
if(isset($con)){
$res = mysql_select_db($dbname);
if (!isset($res)) {
echo "No database found!";
}
}else{
echo "Unable to connect to the mysql database";
}

//set a query for inserting data in the database
$sql ="INSERT INTO `tblregistration` (`FNAME`, `LNAME`, `EMAILADD`, `USERNAME`, `PASSWORD`)
VALUES ('".$_POST['FNAME']."','".$_POST['LNAME']."','".$_POST['EMAILADD']."','".$_POST['USERNAME']."','".$_POST['PASS']."')";
//Execute the query
$result = mysql_query($sql) or die(mysql_error());
//validate the executed query.
if ($result&gt;0) {

echo "&lt;h1&gt;Your now successfully resgistered!&lt;/h1&gt;";
}
?&gt;
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
<?php
$server = "localhost";
$dbuser = "root";
$dbpass ="";
$dbname ="registrationdb";
//connection between mysql and sign.php
$con = mysql_connect($server,$dbuser,$dbpass);
//validate your connection
if(isset($con)){
$res = mysql_select_db($dbname);
if (!isset($res)) {
echo "No database found!";
}
}else{
echo "Unable to connect to the mysql database";
}

//set a query for inserting data in the database
$query ="INSERT INTO tblregistration (FNAME, LNAME, EMAILADD, USERNAME, PASSWORD)
VALUES ('".$_POST['FNAME']."','".$_POST['LNAME']."','".$_POST['EMAILADD']."','".$_POST['USERNAME']."','".$_POST['PASS']."')";
//Execute the query
$result = mysqli_query($sql) or die(mysqli_error());
//validate the executed query.
if ($result>0) {

echo "<h1>Your now successfully resgistered!</h1>";
}
?>