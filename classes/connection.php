<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_mongo/vendor/autoload.php";

    class connection {
        public function connect() {
            try {
                $server = "127.0.0.1";
                $user = "mongoadmin";
                $password = "123456";
                $Database = "crud";
                $port = "27017";
                $cadenaconnection = "mongodb://" . 
                                        $user . ":" .
                                        $password . "@" .
                                        $server . ":" .
                                        $port . "/" .
                                        $Database;
                $client = new MongoDB\Client($cadenaconnection);
                return $client->selectDatabase($Database);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

    $object = new connection();
    // var_dump($object->connect());
?>