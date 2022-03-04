<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Calendar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/colorbox.css"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.colorbox-min.js"></script>
</head>
<body>
	<div align="center">
		<?php echo $notes?>
		<span> by Cemplux</span>
	</div>
	<script>
	$(function(){
		$(".act_note").colorbox({ 
				overlayClose: false,
				data:{year:<?php echo $year;?>,mon:<?php echo $mon;?>}
		});
	});
</script>
</body>
</html>