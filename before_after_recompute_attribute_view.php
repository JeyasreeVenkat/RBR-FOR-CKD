<?php
include "Performance_head.php";
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
$sql = mysql_query("SELECT disease,before_normal,before_defect,after_normal,after_defect from before_after_recomputation LIMIT ".$limits.",".$max." ") or die    (mysql_error());


echo "<div align='center'>";
echo "<BR><table align='center' width=60% style='background-color:#0099AA;margin-left:250px;border:5px;border-top-left-radius:1.5em;border-bottom-right-radius:1.5em;border-top-right-radius:1.5em;border-bottom-left-radius:1.5em;'>";
echo "<tr><td height=30 align='center' style='color:black;font-size:30px'> <b><u> BEFORE AND AFTER RECOMPUTATION </u></b></td></tr>";

echo "</table></div><br>";



if(mysql_num_rows($sql)!=0)
      {       
	     
	                       	
							echo "<br><div align='center'>";
							echo "<table width=60% border='10' style='border-color:navy;border-top-left-radius:1.5em;border-bottom-right-radius:1.5em;border-top-right-radius:1.5em;border-bottom-left-radius:1.5em;'>";
							echo "<th style='background-color:maroon;color:white; width:100px; height:50px;'>"."SL.NO"."</th>";
							
							echo "<th style='background-color:maroon;color:white; width:100px; height:50px;'>"."DISEASES"."</th>";
							echo "<th style='background-color:maroon;color:white;width:100px; height:50px;'>"."BEFORE-RECOMPUTE"."<BR>"."NORMAL PATIENTS"."</th>";
							echo "<th style='background-color:maroon;color:white;width:100px; height:50px;'>"."AFTER-RECOMPUTE"."<BR>"."NORMAL PATIENTS"."</th>";
							echo "<th style='background-color:maroon;color:white;width:100px; height:50px;'>"."BEFORE-RECOMPUTE"."<BR>"."DEFECTED PATIENTS"."</th>";
							echo "<th style='background-color:maroon;color:white;width:100px; height:50px;'>"."AFTER-RECOMPUTE"."<BR>"."DEFECTED PATIENTS"."</th>";
							
							
							while($row = mysql_fetch_array($sql))
                        {
                            
							echo "<tr style='background-color:white;color:navy;height:50px;'><td align='center' width='100px'><b>";
							echo $j;
							echo "</b></td><td align='left' width='200px'><b>";
                             echo $row['disease'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['before_normal'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['after_normal'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['before_defect'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['after_defect'];
	                        echo "</b></td>";
    			     
	                         echo "</tr>";
                        $j=$j+1;

                           }
                              
			   				
						echo "</table></div>";
}


?>

</body>
</html>