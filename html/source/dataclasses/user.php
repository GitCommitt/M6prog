<?php
class user 
{   
        public int $idUser;
        public string $name;
        public string $pass;
    public function __construct(
        int $idUser,
        string $name,
        string $pass
    ) 
    {
        $this->idUser = $idUser;
        $this->name = $name;
        $this->pass = $pass;
    }
}