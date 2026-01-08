<?php
class user {
    public string $username;
    public string $displayname;
    public string $password;

    public function __construct(string $username, string $displayname, string $password) {
        $this->username = $username;
        $this->displayname = $displayname;
        $this->password = $password;
    }

    public static function GetUserByName($connection, string $name): ?user {
        $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if (!$row) return null;
        return new user($row['username'], $row['displayname'], $row['passwordhash']);
    }

    public function VerifyPassword(string $password): bool {
        return password_verify($password, $this->password);
    }
}
?>
