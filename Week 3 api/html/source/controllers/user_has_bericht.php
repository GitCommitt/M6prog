<?php

include_once(__DIR__."/models/BerichtResponse.php");

function handleGet($request_url, $connection) {

    $berichten=[];
    if (sizeof($request_url) < 3) {
        $berichten= bericht::GetAllBericht($connection);
    } else {
        $berichten= bericht::GetBerichtById($connection, $request_url[2]);
    }

    $viewModel=[];
    for ($i=0; $i < count($berichten); $i++) { 
      $bericht = $berichten[$i];
      $response = new BerichtResponse(GetApiPath()."user/".$bericht->user_iduser);
      $viewModel[] = $response;
    }

    return $viewModel;
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $result = handleGet($request_url, $connection);

    header('Content-Type: application/json; charset=utf-8');
    print_r(json_encode($result));
}
