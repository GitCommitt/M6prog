<?php

class bericht 
{   
        public int $idbericht;
        public string $naam;
        public string $bericht;
    public function __construct(
        int $idbericht,
        string $naam,
        string $bericht
    ) 
    {
        $this->idbericht = $idbericht;
        $this->naam = $naam;
        $this->bericht = $bericht;
    }
    
        public static function GetAllBerichten($connection){
          $query = 'SELECT p.* 
              FROM bericht p 
              ';

        $stmt = $connec tion->prepare($query);

        $stmt->execute();
            
        $result = $stmt->get_result();


}