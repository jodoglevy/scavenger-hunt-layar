<html>
	<head></head>
    <body>
        <h2>Please Log In To Continue</h2>
        <div style="color:red"><?php echo $message; ?></div><br />	
        <form action="" method="post">
	        <label for="password">Password:</label>&nbsp;<input type="password" name="password" />
	        <br /><br /><input type="submit" value="Log In" name="log_in" />	
        </form>
    </body>
</html>
