<!DOCTYPE html>
<html>
<head>
	<title>Update data</title>
</head>
<body>

 <?php echo validation_errors(); ?>

	<h2>Update Data</h2>
	<form action="http://localhost/start/index.php/Update_control/index" method="POST">
		<div class="form-group">
			Name:
			<input type="text" name="name" value=""><br>
			Email:
			<input type="text" name="email" value=""><br>
			Address:					
			<input type="text" name="address" value=""><br>
			Phone:				
			<input type="text" name="phone" value=""><br>
			<input type="submit"  value="Update">
		</div>
	</form>

	
	</body>
	</html>