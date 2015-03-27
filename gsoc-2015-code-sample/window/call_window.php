<!-- call this file to open new window example(anita_studio) and in anchor tag in file include class='group1' example(<a href='abcd.html' class='group1'></a>)-->
<!doctype html>
<html>
<head>
	<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="script/jquery.colorbox.js"></script>
	<script type="text/javascript" >
			$(document).ready(function(){				
				$(".group1").colorbox({rel:'group1'});
			});
	</script>
	<style>
	.image_position
	{
	background-position:45px 16px;
	border: 1px solid rgba(128, 128, 128, 0.33);
	}
	</style>
</head>
<body>