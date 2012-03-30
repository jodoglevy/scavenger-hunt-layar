<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js">
        </script>
    </head>
    <body>
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    Leaderboard
                </h3>
            </div>
            <div data-role="content">
                <ol data-role="listview" class="ui-listview">
				    <?php 
                        foreach ($teams as $team)
                        {
                    ?>
                            <li class="ui-li ui-li-static ui-body-c">
                                <?php echo "&nbsp;" . $team["name"] . " " . $team["email"]; ?>
                                <span class="ui-li-count ui-btn-up-c ui-btn-corner-all"><?php echo $team["score"] . " points"; ?></span>                            
                            </li>
                    <?php 
                        }
                    ?>
			    </ol>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>
