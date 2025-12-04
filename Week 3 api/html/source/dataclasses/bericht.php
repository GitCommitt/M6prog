<?php
class bericht
{
    public int $idbericht;
    public string $content;
    public int $user_iduser;

    public function __construct(
        int $idbericht,
        string $content,
        int $user_iduser

    ){
        $this->idbericht = $idbericht;
        $this->content = $content;
        $this->user_iduser = $user_iduser;
    }

    public function GetAllBericht(){
        
    }


    public function GetBerichtById(){
        
    }
}

