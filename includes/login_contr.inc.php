<?php

declare(strict_types=1);

function is_username_wrong(bool|array $results) {
    if(!$results){
        return true;
    }
    return false;
}

function is_password_wrong(string $password, string $hashedPwd) {
    if(!password_verify($password, $hashedPwd)){
        return true;
    }
    return false;
}

function is_input_empty(string $username, string $password) {
    if (empty($username) || empty($password)) {
        return true;
    }
    return false;
}