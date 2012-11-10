<?php

//session_start();
//$user=$_SESSION['user'];

$connect= mysql_connect("localhost:81","root","123456");
if (!$connect)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("users");

$get=mysql_query("SELECT * FROM usertable")
while($row=mysql_fetch_assoc($get))
{
echo $row['admin'];
]

echo $admin;
die();

?>