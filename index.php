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
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="userInput" placeholder="Username">
                <br>
                <input type="password" name="passInput" placeholder="Password">
                <br>
                <button type="submit">Login</button>
                <input type="button" value="Sign Up" onclick="window.location.href='signup.php';">
            </form>
        </div>
        <script src="scripts/script.js"></script>
    </body>
</html>