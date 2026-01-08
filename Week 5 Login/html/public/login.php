<?php
include_once("../source/dataclasses/mydb.php");
include_once("../source/dataclasses/user.php");


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(500);
    echo ('Verkeerd verzoek');
    exit;
}

$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

$username = $data['username'] ?? '';
$password = $data['hashedpass'] ?? '';

$connection = database_connect();
$user = User::GetUserByName($connection, $username);

if (!$user) {
    http_response_code(404);
    echo ('Gebruiker niet gevonden');
    exit;
}

if ($user->VerifyPassword($password)) {
    echo ('Je bent ingelogd!'. $user->displayname);
} else {
    http_response_code(404);
    echo ('Onjuist wachtwoord');
}

?>
