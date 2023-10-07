<?php 
$con = mysql_connect("localhost","root","mysql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbr", $con);


$sql = mysql_query("SELECT age,sex,treastbps,chol,restecg,fbs from patient_details") or die    (mysql_error());

if(mysql_num_rows($sql)!=0)
  {
  
    while($row = mysql_fetch_array($sql))
   {
   
   
$be_bp_nor=mysql_result(mysql_query("SELECT count(treastbps) FROM patient_details where treastbps >=80 and treastbps = 120 "),0);
$be_bp_def=mysql_result(mysql_query("SELECT count(treastbps) FROM patient_details where treastbps > 120 "),0);
/*$be_chol_nor=mysql_result(mysql_query("SELECT count(chol) FROM patient_details where chol<=150 "),0);
$be_chol_def=mysql_result(mysql_query("SELECT count(chol) FROM patient_details where chol>150"),0);
$be_sugar_nor=mysql_result(mysql_query("SELECT count(fbs) FROM patient_details where fbs='t' "),0);
$be_sugar_def=mysql_result(mysql_query("SELECT count(fbs) FROM patient_details where fbs='f' "),0);
$be_ecg_nor=mysql_result(mysql_query("SELECT count(restecg) FROM patient_details where restecg='normal' "),0);
$be_ecg_def=mysql_result(mysql_query("SELECT count(restecg) FROM patient_details where restecg!='normal' "),0);

echo $be_bp_nor;
echo $be_bp_def;*/
}
$res= mysql_query("UPDATE before_recompute SET normal='$be_bp_nor' and defect='$be_bp_def' where disease='BLOOD-PRESSURE'");
/*$res1= mysql_query("UPDATE before_recompute SET normal='$be_chol_nor' and defect='$be_chol_def' where disease='SERUM-CHOLESTROL'");
$res2= mysql_query("UPDATE before_recompute SET normal='$be_sugar_nor' and defect='$be_sugar_def' where disease='FASTING-BLOOD-SUGAR'");
$res3= mysql_query("UPDATE before_recompute SET normal='$be_ecg_nor' and defect='$be_ecg_def' where disease='ECG-REPORT'");*/
//UPDATE before_recompute SET DEFECT=(SELECT count(restecg) FROM patient_details where restecg NOT LIKE 'normal') where disease='ECG-REPORT';

//UPDATE before_recompute SET normal=(SELECT count(treastbps) FROM patient_details where where treastbps >80 and treastbps = 120) where disease='BLOOD-PRESSURE';
update `before_after_recomputation` set before_defect=(select defect from before_recompute  where disease like 'CKD') where disease like 'CKD'

if(!$res)

{
    die('Invalid query: ' . mysql_error());
    }
  else
  {
 // echo $be_bp_nor;
//echo $be_bp_def;
   header('Location:success.php');
    }  
 
 }
 
 ?>

