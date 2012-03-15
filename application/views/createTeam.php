<html>
	<head>
	</head>
	<body>
		<h4>
			Create a Team:
		</h4>
        <span style="color:red"><?php echo $error;?></span>
        <span style="color:green"><?php echo $message;?></span>
		<br /><br />
        <form id="form" method="POST" action="">
			<div>
				Team Name:
				<br />
				<input id="team" name="team" type="text" />
				<br /><br />
			</div>
			<div>
				<input type="submit" value="Create Team" />
				<br /><br />
			</div>
		</form>
	</body>
<html>
