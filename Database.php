<?php 
  class Database {
    // DB Params
    private $host = 'etdq12exrvdjisg6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    private $db_name = 'fzo2fd5ygn0g46xh';
    private $username = 'dq8gchm4gvc3iump';
    private $password = 'jth8gvgv3jdbs4fd';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: Please Try Agaon ' ;//. $e->getMessage();
      }

      return $this->conn;
    }
  }
  ?>
