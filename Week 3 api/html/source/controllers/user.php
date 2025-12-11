<?php

function handleGet($request_url, $connection) {
    if (sizeof($request_url) < 3) {
        return user::GetAllUser($connection);
    } else {
        return User::GetUserById($connection, $request_url[2]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $result = handleGet($request_url, $connection);

    header('Content-Type: application/json; charset=utf-8');
    print_r(json_encode($result->fetch_all(MYSQLI_ASSOC)));
}
