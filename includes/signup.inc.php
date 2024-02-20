<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["nameInput"];
    $email = $_POST["emailInput"];
    $username = $_POST["userInput"];
    $password = $_POST["passInput"];
    
    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // ERROR HANDLERS
        $errors = [];
        
        if (is_input_empty($name, $email, $username, $password)){
            $errors["empty_input"] = "Fill in all fields";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email)){
            $errors["email_used"] = "Email already registered";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "name" => $name,
                "email" => $email,
                "username" => $username
            ];

            $_SESSION["signup_data"] = $signupData;
            header("Location: signup.php");
            die();
        }

        create_user($pdo, $name, $email, $username, $password);

        header("Location: ../index.php?signup=success");
        die();

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e){
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}