<?php
class UserHasBericht
{

    public int $user_iduser;
    public int $berichten_idberichten ;

    public function __construct(
        int $user_iduser,
        string $berichten_idberichten 

    ){
        $this->user_iduser = $user_iduser;
        $this->berichten_idberichten  = $berichten_idberichten ;
    }

}