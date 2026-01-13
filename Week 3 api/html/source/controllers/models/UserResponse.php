<?php

class UserResponse
{
    public int $iduser;
    public string $username;

    public function __construct(
        int $iduser,
        string $username
    ){
        $this->iduser = $iduser;
        $this->username = $username;
    }
}

