<?php 
include '../database/db_connection.php';

    class Users extends Database {

        public function getAll() {
            $this->init();

            $profiles = $this->conn->query("SELECT * FROM profiles");

            if($profiles->num_rows > 0) {
                $data = array();

                for($i = 0; $i < $profiles->num_rows; $i++){
                    $data[$i] = $profiles->fetch_assoc();
                }

                return $data;

            } else {

                return [
                    'status' => 404,
                    'message' => 'Data not found'
                ];
            }
        }

        public function Userinserts($params) {
            $this->init();

            $name = $params['name'];
            $number = $params['number'];
            $email = $params['email'];
            $password = $params['password'];

            $reponse = $this->conn->query("INSERT INTO profiles (name, number, email, password) VALUES 
                ('$name', '$number', '$email', '$password')");

                if($reponse) {
                    return [
                        'status' => 100,
                        'message' => 'User is Inserted'
                    ];
                }

            return [
                'status' => 101,
                'message' => 'User cannot be Inserted'
            ];
        }
    }

?>