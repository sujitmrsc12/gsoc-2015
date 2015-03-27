<?php
echo "<form method='post' action='".$_SERVER['PHP_SELF']."'><i>Search</i>: <input type='text' name='url' placeholder='Search Content'><br><input type='submit' name='submit' value='submit'></form>";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$url = $_POST["url"];
	$url1="http://www.ncbi.nlm.nih.gov/pmc/?term=".str_replace(" ","+",$url);
	echo "<script>alert('Your search for ".$url." is completed!');</script>";
	//passing file name to readfile.php using autosubmission of form......
	echo "<form method='post' action='load_content.php' id='frm'><input type='hidden' name='links' value='$url1'><br><script type='text/javascript'>document.getElementById('frm').submit()</script></form>";
}
?>