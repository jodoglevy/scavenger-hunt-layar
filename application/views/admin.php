<html>
	<head>
	</head>
    <body>
        <h2>Admin Panel</h2>
        <a href="createUrl">Create Question URL</a><br /><br />
        <a href="createVisionUrl">Create Layar Vision URL</a><br /><br />
        <a href="/hunt/leaderboard">View Leaderboard</a><br /><br /><br />
        <a href="passwords/admin">Change Admin Password</a><br /><br />
        <a href="#" onclick="linkConfirm('deleteTeams')">Delete All Teams</a><br /><br />
    </body>

    <script type="text/javascript">
       function linkConfirm(url) {
            if(confirm("Are you sure?")){
                window.location.href=url;
            }
       }
    </script>
</html>
