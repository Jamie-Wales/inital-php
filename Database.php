<?php
class Database {

    private $dsn;
    private $pdo;
    private $statement;

    public function __construct($config, $username="root", $password="new_password") {




        $this->dsn = "mysql:". http_build_query($config, '', ';');
        $this->pdo = new PDO($this->dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $arg=[]): Database {

        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute([$arg]);
        return $this;
    }

    public function find() {
        return $this->statement->fetchAll();
    }

    public function findOrFail() {

        $result = $this-> find();
        if (!$result) {
            abort();
        }

        return $result;
    }

}