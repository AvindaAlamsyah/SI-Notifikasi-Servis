<!DOCTYPE html>
<html>
<head>
	<title>Ujian</title>
</head>
<body>
	<form action="<?php base_url().'Ujian' ?>" method="post">
	<?php echo validation_errors(); ?>
	<input type="text" name="usernm" value="<?php echo set_value('usernm') ?>" placeholder="Enter your Email" /><br>
	<input type="submit" name="submit" value="Submit" />
</form>


</body>
</html>