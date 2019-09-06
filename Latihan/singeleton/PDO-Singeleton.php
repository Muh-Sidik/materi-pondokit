<?php

class Database {

    protected static $instance;

    public function __construct() {}
    public static function getInstance() {

        if(empty(self::$instance)) {

            $db = array (
                "db_host" => "localhost",
                "db_user" => "root",
                "db_pass" => "masukaja",
                "db_name" => "blogku");
            try {
                self::$instance = new PDO("mysql:host=".$db['db_host'].';dbname='.$db['db_name'], $db['db_user'], $db['db_pass']);
                }
                catch (PDOException $error) {
                    echo $error->getMessage();
                }
        }
        return self::$instance;
    }

}

$db=Database::getInstance();
print_r($db);