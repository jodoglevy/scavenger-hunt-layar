<html>
<body>
<h2>Change Password For <?php echo $user_type;?></h2>
<div style="color:red"><?php echo $message; ?></div><br />	
<form action="" method="post">
	<label for="old_password">Old Password:</label>&nbsp;<input type="password" name="old_password" /><br /><br />
	<label for="new_password">New Password:</label>&nbsp;<input type="password" name="new_password" /><br />
	<label for="new_password2">Confirm New Password:</label>&nbsp;<input type="password" name="new_password2" />
	<br /><br /><input type="submit" value="Change password" name="changepword" />	
</form>
</body>
</html>
