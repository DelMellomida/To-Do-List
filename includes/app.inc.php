<?php

try{
    require_once 'dbh.inc.php';
    require_once 'app_model.inc.php';
    require_once 'app_contr.inc.php';

    $result = get_user($pdo);

    require_once 'config_session.inc.php';

    $_SESSION["user_fullname"] = htmlspecialchars($result["name"]);

} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}