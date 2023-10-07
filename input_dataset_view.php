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

$limits = 0;

$sql = mysql_query("SELECT Id,age,Bp,albumin,sugar,RBC,pus_cell,bacteria,cholestrol,blood_urea,serum_creatine,sodium,pottasium,Hemoglobin,white_blood_cell,red_blood_cell,Hypertension,diabetes_melitus,cad,appetite,anemia,class from ckd_data  LIMIT ".$limits.",".$max."") or die    (mysql_error());
echo "<div align='right'><a href='input_preprocess_option.php'><img width=100 height=40 src='images/home2.png'></div></a></div>";

echo "<center><h1 style='color:white; font-size:30px'>"."CHRONIC-KIDNEY-DISEASE ATTRIBUTE-DETAILS  "."</h1>";
	$totalres = mysql_result(mysql_query("SELECT COUNT(age)  FROM ckd_data"),0);

$totalpages = ceil($totalres / $max);


if(mysql_num_rows($sql)!=0)
      {      
	  echo"<div style='overflow-x:auto;'>";
       
        
        echo "<br><table width='100%' align='center' border='3' style='border-collapse:collapse;background-color:#610F4D; border:10px grey; '>";
				 
echo "<th style='background-color:black;color:white;height:30px;'>"."ID"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."AGE"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."Bp"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."ALBUMIN"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."SUGAR"."<BR>"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."RBC"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."PUS-CELLS"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."BACTERIA"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."CHOLESTROL"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."BLOOD-UREA"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."SERUM_CREATINE"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."SODIUM"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."POTTASIUM"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."HAEMOGLOBIN"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."WBC-COUNT"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."RBC-COUNT"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."HYPERTENSION"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."DIABETES-MELITUS"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."CAD"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."APPETITE"."</th>";
echo "<th style='background-color:black;color:white;height:30px;'>"."ANEMIA"."</th>";







			while($row = mysql_fetch_array($sql))
                        {
                       
        	             echo "<tr style='background-color:white;color:black;height:20px;width=100px'><td>";
						 echo $row['Id'];
                             echo "</td><td align='center'>";
							 echo $row['age'];
							 echo "</td><td align='center'>";
							 echo $row['Bp'];
							 echo "</td><td align='center'>";
							 echo $row['albumin'];
							 echo "</td><td align='center'>";
							 echo $row['sugar'];
							 echo "</td><td align='center'>";
							 echo $row['RBC'];
							 echo "</td><td align='center'>";
							 echo $row['pus_cell'];
							 echo "</td><td align='center'>";
							 echo $row['bacteria'];
							 echo "</td><td align='center'>";
							 echo $row['cholestrol'];
							 echo "</td><td align='center'>";
							 echo $row['blood_urea'];
							 echo "</td><td align='center'>";
							 echo $row['serum_creatine']; 
							 echo "</td><td align='center'>";
							 echo $row['sodium'];
							 echo "</td><td align='center'>";
							 echo $row['pottasium'];
							 echo "</td><td align='center'>";
							 echo $row['Hemoglobin'];
							 echo "</td><td align='center'>";
							 echo $row['white_blood_cell'];
							echo "</td><td align='center'>";
							 echo $row['red_blood_cell'];
							 echo "</td><td align='center'>";
							 echo $row['Hypertension'];
							 echo "</td><td align='center'>";
							 echo $row['diabetes_melitus'];
							 echo "</td><td align='center'>";
							 echo $row['cad'];
							echo "</td><td align='center'>";
							 echo $row['appetite'];
							 echo "</td><td align='center'>";
							 echo $row['anemia'];
							
							  echo "</td>";
						   
	                     echo "</tr>";
                            
                       }
					echo "</table></center>";
                   echo "</div>";

				  

}




?>
</head>
</body>
</html>
