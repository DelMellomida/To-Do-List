<?php

declare(strict_types=1);

function go_to_web_app() {
    if (isset($_SESSION["user_id"])) {
        header("Location: application.php");
        exit;
    }
}

function check_login_errors() {
    if (isset($_SESSION['errors_login'])) {
        $errors = $_SESSION['errors_login'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form-error" style="text-align:center; color: red;">' . $error . '</p>';
        }

        unset($_SESSION['errors_login']);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<br>';
        echo '<p class="form-success" style:"text-align: center; color: green;">Signup Success!</p>';
    }
}