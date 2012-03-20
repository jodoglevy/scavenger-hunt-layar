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
                    Layar Hunt
                </h3>
            </div>
            <div data-role="content">
                <p style="color:red">
                    <?php echo $error;?>
                </p>
                <p style="color:green">
                    <?php echo $message;?>
                </p>
                <form action="team" data-ajax="false" method="post">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textinput1">
                            </label>
                            <input id="textinput1" placeholder="Enter team name..." value="" type="text" name="team"/>
                            <input type="hidden" name="answer" value="<?php echo $answer;?>" />
                            <input type="hidden" name="id" value="<?php echo $id;?>" />
                        </fieldset>
                    </div>
                    <input type="submit" data-theme="a" value="Submit" />
                </form>
                 <div>
                    <br /><br />
                    <p>
                        Don't have a team yet?<br />
                        <a href="/hunt/createteam?answered-id=<?php echo $id;?>&answer=<?php echo $answer;?>" data-transition="fade">
                            Click here to create one
                        </a>
                    </p>                
                </div>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>

