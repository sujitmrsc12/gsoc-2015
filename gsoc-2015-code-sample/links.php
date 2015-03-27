<?php
include('window/call_window.php');
$nmf= $_GET['urls'];
$genf= $_GET['names'];
$exp=explode(",",$nmf);
$gh=explode(",",$genf);
$counter=0;
$counter2=1;
foreach($exp as $value)
{
	echo $counter2.") <a class='group1' href='frame.php?r=".$value."' >".$gh[$counter]."</a><br>";
	$counter++;
	$counter2++;
}
?>
<link rel="stylesheet" type="text/css" href="css/colorbox.css" media="screen" />
<script type="text/javascript" src="script/jquery.colorbox.js"></script>
</body>
</html>