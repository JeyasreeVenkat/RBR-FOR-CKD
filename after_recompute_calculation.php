<?php

$con = mysql_connect("localhost","root","mysql");


if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("rbr", $con);

$sql = mysql_query("SELECT disease,normal,defect FROM before_recompute where disease like 'BLOOD-PRESSURE' limit 0,10") or die    (mysql_error());


    
          
		
		/*$d=$row['disease'];
		$n=$row['normal'];
		$df=$row['defect'];*/
		
		$d1=mysql_result(mysql_query("SELECT disease FROM before_recompute where disease like 'CKD'"),0);
		$n1=mysql_result(mysql_query("SELECT normal FROM before_recompute where disease like 'CKD'"),0);
		$df=mysql_result(mysql_query("SELECT defect FROM before_recompute where disease like 'CKD'"),0);
		
		$bp1=mysql_result(mysql_query("SELECT count(*) from ckd_recompute where class like 'non-ckd'  "),0);
		$bp2=mysql_result(mysql_query("SELECT count(*) from ckd_recompute where class like 'ckd'  "),0);
		//$ch1=mysql_result(mysql_query("SELECT count(*) from recompute_bcholestrol"),0);
		//$sug=mysql_result(mysql_query("SELECT count(*) from recompute_bloodsugar "),0);
		
		$chl_nor = $n1 + $bp1;
		
		$chl_df = $df - $bp1;
		
		
		$res=mysql_query("UPDATE after_recompute SET normal_patient='$chl_nor',defect='$chl_df' WHERE disease = '$d1'");
		
		
		if(!$res)
		{
		die('Invalid query: ' . mysql_error());
		}
		else
	{
	/* echo $n1;
	 echo $df;
	 ECHO $bp_nor;
	ECHO $bp_df;*/
		header('Location:success.php');
    }   
  
                           



?>
