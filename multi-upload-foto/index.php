<!DOCTYPE html>
<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiple File Upload dengan PHP | Syntax-x.blogspot.com</title>
</head>
<body>
	<?php
		include 'proses.php';
	?>
	<form action="" method="post" enctype="multipart/form-data" class="addChoose">
		<input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
		<input type="submit" value="Upload!">
		<button type="button" class="add">Add</button>
	</form>
	
	<script>
		$(document).on('click','.add',function(){
		$('.addChoose').append('<br>'+
		'<input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />');
		});
	</script>
</body>
</html>