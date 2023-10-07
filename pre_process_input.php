<!DOCTYPE html>
<html>
<body style='background-color:cornflowerblue;'>
<h1 style='text-align:center; color:#000000;font-size:25px;'> <b>RESULT-BASED RECOMPUTATION FOR CHRONIC KIDNEY DISEASE PREDICTION<BR>USING SVM CLASSIFICATION</b></h1>
<div align="center">
	
	<img width=1200 height=15 src="images/horizondal.jpg"></div>
	<div align='right'>
			
		<a href="input_preprocess_option.php"><img width=100 height=40 src="images/home2.png"></div></a>	
                      		
	</div>
	<div align="center">
<font face="arial" size="5" color="maroon">Reading of Pre-proceess Dataset</font><br><br></div>
<?php
$filename = "kidney_dataset.txt";
$fd = fopen ($filename, "r");
$contents = fread ($fd,filesize ($filename));

fclose ($fd); 
$delimiter = "[+";
$splitcontents = explode($delimiter, $contents);
$counter = "";
?>
<font color="maroon" face="arial" size="4">This Dataset contains kidney disease attributes values </font>
<hr>
<?php 
echo $contents;

?>

<br><br>
<!--<font color="blue" face="arial" size="4">Split File Contents</font>
<hr>
<?php
foreach ( $splitcontents as $color )
{

$counter = $counter+1;
echo  $counter ;
echo "<blank>";
echo $color;
echo "<BR>";
}

?>-->


</body>
</html>