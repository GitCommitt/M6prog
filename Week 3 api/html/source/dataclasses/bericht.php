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

    public static function GetAllBericht($connection){
        $query = "SELECT * FROM bericht";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $berichten = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $berichten[] = bericht::FromResultRow($row);
        }

        return $berichten;
    }


    public static function GetBerichtById($connection, $idbericht){
        $query = "SELECT * FROM bericht WHERE idbericht = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $idbericht);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result;
    }

    public static function FromResultRow($row)
    {
        return new bericht(
            $row['idbericht'],
            $row['content'],
            $row['user_iduser']
        );
    }
}

    