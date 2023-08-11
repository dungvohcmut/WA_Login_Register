<?php
    require 'shoppingModel.php';
    class signupModel extends shoppingModel {
        
        /* Get the current page name without the '.php' extension. */
        public function detectPage() {
            return basename($_SERVER['PHP_SELF'], '.php');
        }

        public function checkUser($username) {
            $this->open_db();
            $sql = "SELECT * FROM users WHERE userName = '$username'";
            $result = $this->conn->query($sql);
            $this->close_db();
            if ($result->num_rows > 0) {
                return false;
            }
            return true;
        }

        public function createUser($fullName, $userName, $password) {
            $this->open_db();
            $sql = "INSERT INTO users (fullname, username, password) VALUES ('$fullName', '$userName', '$password')";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }
    }
?>