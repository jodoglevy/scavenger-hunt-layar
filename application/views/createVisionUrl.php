<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="/js/md5_crypt.js"></script>
		<script type="text/javascript" src="/js/makeUrl.js"></script>
	</head>
	<body>
		<h4>
			Create a Layar Vision Url:
		</h4>
		<form id="form">
			<div>
				Layar Vision Url Name:
				<br />
				<input type="text" id="question" name="question" value="The Last Supper" />
				<br /><br />
			</div>
		    <input id="answer" name="answer" type="hidden" value="LAYAR_VISION" addToUrl="yes" />
			<div>
				Points:
				<br />
				<input id="points" name="points" type="text" value="5" />
				<br /><br />
			</div>
			<div>
				<input type="submit" value="Create Url" />
				<br /><br />
			</div>
			Please use the url:
			<br />
			<div id="url" type="text" />
		</form>
	</body>
<html>
