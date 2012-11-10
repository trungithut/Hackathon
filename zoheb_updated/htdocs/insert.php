<?php
$vari=0;
$varo=0;
$po= $_POST['Quantity'];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hackers_1", $con);

$result = mysql_query("SELECT quantity FROM  inventorytable where categoryName='$_POST[CategoryName]' and ProductName='$_POST[ProductName]'");


while($row = mysql_fetch_array($result))
  {
  if( $row['quantity'] >= $_POST['Quantity']+100)
  {
       $vari=1;
  }

  }
 
 $result1 = mysql_query("SELECT size FROM  agenttable where agentname='$_POST[AgentName]'");
  while($row1 = mysql_fetch_array($result1))
  {
  if( $row1['size'] >= $_POST['Quantity'])
{
       $varo=1;
  }

  }
  if($vari==1 && $varo==1)
  {
   $sql="INSERT INTO reqtable
VALUES
('2','$_POST[AgentName]','1','$_POST[CategoryName]','1','$_POST[ProductName]','$_POST[Quantity]')";

$result1 = mysql_query("SELECT quantity FROM  inventorytable where categoryName='$_POST[CategoryName]' and ProductName='$_POST[ProductName]'");

while($row1 = mysql_fetch_array($result1))
  {  $y=$row1['ProductName'];
    $x= $row1['quantity']-$_POST[Quantity];
   $sql1 = "UPDATE inventorytable  SET quantity = '$x' WHERE  ProductName='$_POST[ProductName]' ";

  }




if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

  if (!mysql_query($sql1,$con))
  {
  die('Error1: ' . mysql_error());
  }

  }
  else
  {
  }
  
  mysql_close($con);
?>