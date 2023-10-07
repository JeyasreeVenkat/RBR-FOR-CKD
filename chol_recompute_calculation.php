<?php 
$con = mysql_connect("localhost","root","mysql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rbr", $con);

$n=5;
$sql = mysql_query("SELECT age,sex,chol from patient_details") or die    (mysql_error());

if(mysql_num_rows($sql)!=0)
  {
  
    while($row = mysql_fetch_array($sql))
   {
	$ag = $row['age'];
	$se = $row['sex'];
    $ch_value = $row['chol'];
	$prev_chol=$ch_value;
	
	$min = 150;
	
	if($ch_value > $min)
	{	
	for( $i = 1;$i <= $n; $i++)
	{
		
		$ch_value = $ch_value - 10;
			
			if($ch_value=$min)
			{
			$ch_value=$min;
			}
			
		}
		//echo $bp_value;
	}
   $res= mysql_query("INSERT INTO recompute_cholestrol(age,sex,pre_chol_level,re_chol_level) VALUES('$ag','$se','$prev_chol','$ch_value')");

  

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

