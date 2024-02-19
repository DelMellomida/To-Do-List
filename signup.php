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
                <input type="text" name="nameInput" placeholder="Name">
                <br>
                <input type="email" name="emailInput" placeholder="Email">
                <br>
                <input type="text" name="userInput" placeholder="Username">
                <br>
                <input type="text" name="passInput" placeholder="Password">
                <br>
                <button>Signup</button>
            </form>
        </div>
        <?php
            check_signup_errors();
        ?>
        <script src="script.js"></script>
    </body>
</html>