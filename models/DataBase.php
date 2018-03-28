<?php
    class DataBase {
        private $conn;

        public function connect() {
            $this->conn = new mysqli("localhost", "root", "9293709b13", "blog");
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            return $this->conn;
        }

        public function closeConnection() {
            mysqli_close($this->conn);
        }

        function __destruct() {
            if (mysqli_ping($this->conn)) {
                mysqli_close($this->conn);
            }
        }

    }
?>
