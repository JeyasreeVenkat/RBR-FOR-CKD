<?php 
$con = mysql_connect("localhost","root","mysql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbr", $con);

$n=5;
$sql = mysql_query("SELECT age,sex,re_bp_value from recompute_bp") or die    (mysql_error());

if(mysql_num_rows($sql)!=0)
  {
  
    while($row = mysql_fetch_array($sql))
   {
	$ag = $row['age'];
	$se = $row['sex'];
    $rbp_value= $row['re_bp_value'];
	
		
	
	
   $res= mysql_query("update ckd_recompute set recompute_bp = '$rbp_value' WHERE age='$ag';");

  

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

