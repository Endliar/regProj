<?php

namespace dbProject\ConnectToDb;

use mysqli;

class Database {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Ошибка подключения: " . $this->conn->connect_error);
        }
        echo "Подключение успешно установлено!";
    }

    public function query($sql) {
        $result = mysqli_query($this->conn, $sql);

        if ($result === false) {
            die("Ошибка обработки выполнения запроса: ". $this->conn->error);
        }

        return $result;
    }
}
?>