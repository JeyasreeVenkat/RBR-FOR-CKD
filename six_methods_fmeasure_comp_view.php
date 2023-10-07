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
$sql = mysql_query("SELECT methods,precision_value,recall_value,f_measure from f1_measure_comp LIMIT ".$limits.",".$max." ") or die    (mysql_error());


echo "<div align='center'>";
echo "<BR><table align='center' width=60% style='background-color:#0099AA;margin-left:250px;border:5px;border-top-left-radius:1.5em;border-bottom-right-radius:1.5em;border-top-right-radius:1.5em;border-bottom-left-radius:1.5em;'>";
echo "<tr><td height=30 align='center' style='color:black;font-size:30px'> <b><u> RBR-SVM-WITH OTHER SIX-METHODS<br> F_MEASURE-COMPARISON </u></b></td></tr>";

echo "</table></div><br>";


if(mysql_num_rows($sql)!=0)
      {       
	     
	                       	
							echo "<br><div align='center'>";
							echo "<table width=60% border='10' style='border-color:navy;border-top-left-radius:1.5em;border-bottom-right-radius:1.5em;border-top-right-radius:1.5em;border-bottom-left-radius:1.5em;'>";
							echo "<th style='background-color:maroon;color:white; width:100px; height:50px;'>"."SL.NO"."</th>";
							
							echo "<th style='background-color:maroon;color:white; width:100px; height:50px;'>"."METHOD"."</th>";
							echo "<th style='background-color:maroon;color:white;width:100px; height:50px;'>"."PRECISION-VALUE"."<BR>"."IN  %"."</th>";
							echo "<th style='background-color:maroon;color:white;width:100px; height:50px;'>"."RECALL-VALUE"."<BR>"."IN  %"."</th>";
							echo "<th style='background-color:maroon;color:white;width:100px; height:50px;'>"."F-MEASURE"."<BR>"."IN  %"."</th>";
							
							
							while($row = mysql_fetch_array($sql))
                        {
                            if($j<7)
							{
							echo "<tr style='background-color:white;color:navy;height:50px;'><td align='center' width='100px'><b>";
							echo $j;
							echo "</b></td><td align='left' width='200px'><b>";
                             echo $row['methods'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['precision_value'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['recall_value'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['f_measure'];
							
	                        echo "</b></td>";
    			     
	                         echo "</tr>";
							 }
							 else
							 {
							 echo "<tr style='background-color:navy;color:white;height:50px;'><td align='center' width='100px'><b>";
							echo $j;
							echo "</b></td><td align='left' width='200px'><b>";
                             echo $row['methods'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['precision_value'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['recall_value'];
							 echo "</b></td><td align='center' width='100px'><b>";
                             echo $row['f_measure'];
							
	                        echo "</b></td>";
    			     
	                         echo "</tr>";
							 }
							 
                        $j=$j+1;

                           }
                              
			   				
						echo "</table></div>";
}


?>

</body>
</html>