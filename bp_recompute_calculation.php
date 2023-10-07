<?php 
$con = mysql_connect("localhost","root","mysql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbr", $con);

$n=5;
$sql = mysql_query("SELECT age,sex,treastbps from patient_details") or die    (mysql_error());

if(mysql_num_rows($sql)!=0)
  {
  
    while($row = mysql_fetch_array($sql))
   {
	$ag = $row['age'];
	$se = $row['sex'];
    $bp_value = $row['treastbps'];
	$prev_bp=$bp_value;
	echo $bp_value;
	$min = 120;
	
	if($bp_value > $min)
	{	
	for( $i = 1;$i <= $n; $i++)
	{
		
		$bp_value = $bp_value - 5;
			
			if($bp_value=$min)
			{
			$bp_value=$min;
			}
			
		}
		//echo $bp_value;
	}
   $res= mysql_query("INSERT INTO recompute_bp(age,sex,pre_bp_value,re_bp_value) VALUES('$ag','$se','$prev_bp','$bp_value')");
//$res= mysql_query("INSERT INTO location_precision(id,key_name,pre_value) VALUES ('$j','$sname','$P')");

  

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

