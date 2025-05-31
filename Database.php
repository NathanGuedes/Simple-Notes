<?php

class Database {

    private $connection;

    function __construct($config, $user = 'root', $password = '') {
        $dsn = 'mysql:' . http_build_query($config,  '', ';');

        $this->connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    function query($sql, $params = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($params);

        return $statement;
    }
}