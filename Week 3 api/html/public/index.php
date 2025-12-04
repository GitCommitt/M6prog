<?php


// include_once("../source/database.php");

// $connection = database_connect();

// $result = $connection->query("SELECT 'het werkt' as nice");

// print_r($result->fetch_all());
include_once "../source/dataclasses/dbcontext.php";

$request_url = explode('/', $_SERVER['REQUEST_URI']);

$controllers = ['bericht'];
foreach ($controllers as $i => $page)
{
    if($request_url[1] == $page)
    {
        include_once("../source/controllers/$page.php");
        exit;
    }
}

http_response_code(404);
exit;
