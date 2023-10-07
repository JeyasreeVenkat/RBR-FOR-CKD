<?php 
$con = mysql_connect("localhost","root","mysql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbr", $con);

$n=5;
$sql = mysql_query("SELECT age,sex,thalach from patient_details") or die    (mysql_error());

if(mysql_num_rows($sql)!=0)
  {
  
    while($row = mysql_fetch_array($sql))
   {
	$ag = $row['age'];
	$se = $row['sex'];
    $sug_value = $row['thalach'];
	$prev_sug=$sug_value;
	
	$min = 120;
	
	if($sug_value > $min)
	{	
	for( $i = 1;$i <= $n; $i++)
	{
		
		$sug_value = $sug_value - 10;
			
			if($sug_value=$min)
			{
			$sug_value=$min;
			}
			
		}
		//echo $bp_value;
	}
   $res= mysql_query("INSERT INTO recompute_bloodsugar(age,sex,pre_sugar_level,re_sugar_level) VALUES('$ag','$se','$prev_sug','$sug_value')");
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

