<?php

function get_user(object $pdo) {
    $query = "SELECT * FROM userInfo WHERE id = :userId;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":userId", $_SESSION["user_id"]);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

