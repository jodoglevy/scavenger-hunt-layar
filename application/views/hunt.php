<html>
<body>
<span style="color:red"><?php echo $error;?></span>
<br /><br />
<?php echo $question;?>
<br /><br />	
<form action="" method="post">
	<label for="answer">Answer:</label>&nbsp;<input type="text" name="answer" />
    <br /><br />
    <input type="hidden" name="id" value="<?php echo $id;?>" />
    <input type="submit" value="Submit Answer" />	
</form>
</body>
</html>
