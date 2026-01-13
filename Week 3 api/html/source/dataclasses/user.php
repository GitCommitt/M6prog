<?php
class user
{
    public int $iduser;
    public string $username;
    public string $token;

    public function __construct(
        int $iduser,
        string $username,
        string $token

    ){
        $this->iduser = $iduser;
        $this->username = $username;
        $this->token = $token;
    }

    public static function GetAllUser($connection){
        $query = "SELECT * FROM user";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

       $users = [];
        while ($row = mysqli_fetch_assoc($result)){

        $users[] = user::FromResultRow($row);
        }
        return $users;
    }


    public static function GetUserById($connection, $iduser){
        $query = "SELECT * FROM user WHERE iduser = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $iduser);
        $stmt->execute();
        $result = $stmt->get_result();

        $users = [];
        while ($row = mysqli_fetch_assoc($result)){

        $users[] = user::FromResultRow($row);
        }
        return $users;
    }

    public static function FromResultRow($row)
    {
        return new user(
            $row['iduser'],
            $row['username'],
            $row['token']
        );
    }
}

