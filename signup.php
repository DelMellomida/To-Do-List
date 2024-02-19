<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>To-Do List</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <hr>
        <h1>To-Do-List Application</h1>
        <hr id="bottomLine">
        <div class="container">
            <form action="includes/signup.inc.php" method="post">    
                <?php
                    signup_inputs();
                ?>
                <button>Signup</button>
            </form>
        </div>
        <?php
            check_signup_errors();
        ?>
        <script src="script.js"></script>
    </body>
</html>
