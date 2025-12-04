<?php
class user
{
    public int $iduser;
    public int $username;
    public int $token;

    public function __construct(
        int $iduser,
        string $username,
        string $token

    ){
        $this->iduser = $iduser;
        $this->username = $username;
        $this->token = $token;
    }

    public function GetAllUser(){

    }

    public function GetUserById(){
        
    }

}

