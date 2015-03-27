<!DOCTYPE html>
<html>
<script>
function alt()
{
	var uu=document.getElementsByTagName("body")[0];
	var gt=uu.getElementsByClassName("title");
   var yt=new Array(), result=new Array(), ext=new Array(), www=new Array(), prtl=new Array(), qwe, cn=new Array(), empt=0;
	var regex = /(<([^>]+)>)/ig;
	for(i=0;i<gt.length;i++)
	{
		yt[i]=gt[i].innerHTML
	};
	qwe='http://www.ncbi.nlm.nih.gov';
	for(j=0;j<yt.length;j++)
	{
		result[j] = yt[j].replace(regex, "");
		ext=yt[j].split(" ");
		www=ext[2].split('"');
		cn[j]=qwe.concat(www[1]);
	};
	window.location.href = "links.php?urls=" + cn + "&names=" + result;
}
</script>
<body onload='alt()'>
<?php
$n=$_POST['links'];
echo file_get_contents($n);?>
</body>
</html>
