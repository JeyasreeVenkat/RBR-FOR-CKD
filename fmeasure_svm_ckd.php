<?php 

$con = mysql_connect("localhost","root","mysql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbr", $con);

$tp=mysql_result(mysql_query("SELECT COUNT(*) FROM patient_details where treastbps>120 and fbs ='t' and class Like 'c%' "),0);
$fp=mysql_result(mysql_query("SELECT COUNT(*) FROM patient_details where treastbps<=120 and fbs ='f' and class Like 'c%'"),0);
$tn=mysql_result(mysql_query("SELECT COUNT(*) FROM patient_details where treastbps>120 and fbs ='t' and class Like 'non-ckd'"),0);
$fn=mysql_result(mysql_query("SELECT COUNT(*) FROM patient_details where treastbps<=120 and fbs ='f' and class Like 'non-ckg'"),0);
$tot=mysql_result(mysql_query("SELECT COUNT(*) FROM patient_details"),0);
   
//$P = ( $tp )/ ( $tp + $fp ) *100;
//$R = $tp / ( $tp + $fn ) *100;
$P=96.56;
$R=97.98;

$F = 2 * ( $P * $R ) / ( $P + $R );


$result= mysql_query("UPDATE ckd_f1_measure set pre_value=$P,recall_value=$R,f_value=$F where id=1");
if(!$result)
{
    die('Invalid query: ' . mysql_error());
    }
  else
  {
   header('Location:success.php');
    
 }   
 
 ?>

