<!doctype html>
<html>
<head>

<title>CKD
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.navside.js"></script>
<style>
html, body {
  margin: 0;
  padding: 0;
  background: #0099AA;
  font-family: 'Open Sans', sans-serif;
  font-style: normal;
  font-weight: 400;
  color: #7b7b7a;
  font-size: 25px;
  line-height: 18px;
  overflow-y: auto;
  overflow-x: hidden;
  width: 100%;
}

/* Menu styles
===========================*/
#sidebar-menu {
  top: 0px;
  width: 100%;
}

#sidebar-menu li { border-bottom: 1px solid rgba(238, 238, 238, 0.05); }

#sidebar-menu a {
  text-decoration: none;
  color: #fff;
}

#sidebar-menu a:hover {
  text-decoration: none;
  color: #fff;
}

</style>
<script>
$(document).ready(function() {
					$(function(){
						$("#navside").navside({
					            position         : 'left',   // options for Position: 'left' or 'right'. Default is 'right'
					            scroll           : 'fixed'  // options for Scroll: 'hidden' or 'fixed'. Default is 'hidden'
					        });
					});
				});
</script>
<link href="css/navside1.css" rel="stylesheet" type="text/css">
</head>

<body>
<nav id="navside">
  <ul id="sidebar-menu">
    <li class="active"><a href="input_preprocess_option.php"><b>Data - Extraction</a></li>
    <li><a href="svm_classification_option.php">SVM-Classification</a></li>
    <li><a href="rbr_option.php">RBR-Computing</a></li>
    <li><a href="Performance_Menu.php">Performance-Comparision </a></li>
    <li><a href="index.php">Exit</a></li></b>
  </ul>
</nav>

<h1 style='text-align:center; color:#000000;font-size:25px;'> <b>RESULT-BASED RECOMPUTATION FOR CHRONIC KIDNEY DISEASE PREDICTION<BR><BR><BR>USING SVM CLASSIFICATION</b></h1>


<br><br>
<div align="center">
<h1 align=center class=home><b>Successfully Executed</b></h1>
</div>
</body>
</html>
