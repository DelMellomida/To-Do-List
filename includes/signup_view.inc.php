<?php

declare(strict_types=1);

function signup_inputs() {
    if(isset($_SESSION["signup_data"]["name"])) {
        echo '<input type="text" name="nameInput" placeholder="Name">';
        echo '<br>';
    }
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) 
        && !isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '<input type="email" name="emailInput" placeholder="Email" value="' .$_SESSION["signup_data"]["email"] . '">';
        echo '<br>';
    } else {
        echo '<input type="email" name="emailInput" placeholder="Email">';
        echo '<br>';
    }

    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<input type="text" name="userInput" placeholder="Username" value="' .$_SESSION["signup_data"]["username"] . '">';
        echo '<br>';
    } else {
        echo '<input type="text" name="userInput" placeholder="Username">';
        echo '<br>';
    }

    echo '<input type="text" name="passInput" placeholder="Password">';
    echo '<br>';
}

function check_signup_errors() {
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form-error" style="text-align:center; color: red;">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p class="form-success" style:"text-align: center; color: green;">Signup Success!</p>';
    }
}
