<?php 
$con = mysql_connect("localhost","root","mysql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbr", $con);

$n=5;
$sql = mysql_query("SELECT age,sex,re_chol_level from recompute_cholestrol") or die    (mysql_error());

if(mysql_num_rows($sql)!=0)
  {
  
    while($row = mysql_fetch_array($sql))
   {
	$ag = $row['age'];
	$se = $row['sex'];
    $rch_value= $row['re_chol_level'];
	
		
	
	
   $res= mysql_query("UPDATE ckd_recompute SET recompute_chol='$rch_value' where age='$ag'");

  

if(!$res)

{
    die('Invalid query: ' . mysql_error());
    }
  else
  {
 
   header('Location:success.php');
    }  
 }
 }
 
 ?>

