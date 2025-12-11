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

        $stmt = $connection->prepare($query);

        $stmt->execute();
            
        $result = $stmt->get_result();

        $berichten = [];
        while ($row = mysqli_fetch_assoc($result)){

        $berichten[] = bericht::FromResultRow($row);
        }
        return $berichten;
    }

    public static function FromResultRow($row)
    {
        return new bericht(
            $row['idbericht'],
            $row['naam'],
            $row['bericht']
        );
    }
}