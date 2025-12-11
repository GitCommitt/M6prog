<?php

include_once(__DIR__."/models/UserResponse.php");

function handleGet($request_url, $connection) {

    $users=[];
    if (sizeof($request_url) < 3) {
        $users= User::GetAllUser($connection);
    } else {
        $users= User::GetUserById($connection, $request_url[2]);
    }

    $viewModel=[];
    for ($i=0; $i < count($users); $i++) { 
      $user = $users[$i];
      $response = new UserResponse($user->iduser, $user->username);
      $viewModel[] = $response;
    }

    return $viewModel;
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $result = handleGet($request_url, $connection);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($result);
}

