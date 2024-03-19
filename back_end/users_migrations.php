<?php 
include '../database/db_connection.php';

    class Users_migrations extends Database {

        public function createTable() {
            $this->init();
            $reponse = $this->conn->query("CREATE TABLE IF NOT EXISTS profiles (
                id int auto_increment primary key,
                name varchar(255) not null,
                number int not null,
                email varchar(255) not null,
                password varchar(255) not null
                )");

                if($reponse) {
                    return [
                        'status' => 201,
                        'message' => 'Data Successfully Created'
                    ];
                }

                return [
                    'status' => 301,
                    'message' => 'Failed to Insert Data'
                ];
        }
    }
?>