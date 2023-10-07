
<?php
include "rbr_option_head.php";
  $con = mysql_connect("localhost","root","mysql");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("rbr", $con);
?>
<html><head><title>CKD</title>


</head>

<body>


<?php
$max = 20;


$limits = 0;
  
$j=1;
$sql = mysql_query("SELECT disease,normal_patient,defect from after_recompute LIMIT ".$limits.",".$max." ") or die    (mysql_error());


echo "<div align='center'>";
echo "<table align='center' width=55% style='background-color:maroon;margin-left:150px;border:5px;border-top-left-radius:1.5em;border-bottom-right-radius:1.5em;border-top-right-radius:1.5em;border-bottom-left-radius:1.5em;'>";
echo "<tr><td height=30 align='center' style='color:white;font-size:30px'> <b><u> AFTER-RECOMPUTATION </u></b></td></tr>";
echo "</table></div><br>";



if(mysql_num_rows($sql)!=0)
      {       
	     
	                       	
							echo "<br><div align='center'>";
							echo "<table width=60% border='10' style='border-color:navy;border-top-left-radius:1.5em;border-bottom-right-radius:1.5em;border-top-right-radius:1.5em;border-bottom-left-radius:1.5em;'>";
							echo "<th style='background-color:blue;color:white; width:100px; height:50px;'>"."SL.NO"."</th>";
							
							echo "<th style='background-color:blue;color:white; width:100px; height:50px;'>"."DISEASE"."</th>";
							echo "<th style='background-color:blue;color:white;width:100px; height:50px;'>"."NUBMER-OF"."<BR>"."NORMAL PATIENTS"."</th>";
							echo "<th style='background-color:blue;color:white;width:100px; height:50px;'>"."NUMBER-OF"."<BR>"."DEFECTED PATIENTS"."</th>";
							
							while($row = mysql_fetch_array($sql))
                        {
                            
							echo "<tr style='background-color:white;color:navy;height:50px;'><td align='center' width='100px'><b>";
							echo $j;
							echo "</b></td><td align='left' width='200px'><b>";
                             echo $row['disease'];
							 echo "</b></td><td align='center' width='200px'><b>";
                             echo $row['normal_patient'];
							 echo "</b></td><td align='center' width='200px'><b>";
                             echo $row['defect'];
	                        echo "</b></td>";
    			     
	                         echo "</tr>";
                        $j=$j+1;

                           }
                              
			   				
						echo "</table></div>";
}


?>

</body>
</html>