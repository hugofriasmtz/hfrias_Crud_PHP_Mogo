<?php


    class crud extends connection {
        public function showdata() {
            try {
                    $connection = parent::connect();
                    $collection = $connection->persons;
                    $data = $collection->find();
                    return $data;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
?>