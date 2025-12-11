<?php

class UserResponse
{
    public int $iduser;
    public int $username;

    public function __construct(
        int $iduser,
        string $username

    ){
        $this->iduser = $iduser;
        $this->username = $username;
    }
}
