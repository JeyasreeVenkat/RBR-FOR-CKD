<html>
<head>
<body style='background-color:#0099AA;'>

<?php
$con = mysql_connect("localhost","root","mysql");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("rbr", $con);

include 'header_main.php';

$max = 200;
$j=1;
$limits = 0;

$sql = mysql_query("SELECT age,sex,treastbps from patient_details  LIMIT ".$limits.",".$max."") or die    (mysql_error());
echo "<div align='right'><a href='svm_classification_option.php'><img width=100 height=40 src='images/home2.png'></div></a></div>";

echo "<center><h1 style='color:white; font-size:30px'>"."RESTING BLOOD-PRESSURE DATA CLASSIFICATION  "."</h1>";
	$totalres = mysql_result(mysql_query("SELECT COUNT(age)  FROM patient_details"),0);

$totalpages = ceil($totalres / $max);


if(mysql_num_rows($sql)!=0)
      {      
       
        
        echo "<br><table width='50%' align='center' border='3' style='border-collapse:collapse;background-color:#610F4D; border:10px grey; '>";
	echo "<th style='background-color:black;color:white;height:30px;'>"."Sl.No"."</th>";
			 
echo "<th style='background-color:black;color:white;height:30px;'>"."AGE"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."SEX"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."RESTING-BP"."</th>";


			while($row = mysql_fetch_array($sql))
                        {
                       
        	             echo "<tr style='background-color:white;color:black;height:20px;'><td align='center'>";
						 echo $j;
						 echo "</td><td align='center'>";
							 echo $row['age'];
                             echo "</td><td align='center'>";
							 echo $row['sex'];
							 echo "</td><td align='center'>";
							 echo $row['treastbps'];
							
							  echo "</td>";
						   
	                     echo "</tr>";
                           $j=$j+1; 
                       }
					echo "</table></center>";
                   

				  

}




?>
</head>
</body>
</html>
