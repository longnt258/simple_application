<?php

class Database {
  private $host;
  private $user;
  private $pwd;
  private $db;
  private $conn;

  public function __construct()
  {
    $this->host = getenv('DB_HOST');
    $this->user = getenv('DB_USER');
    $this->pwd = getenv('DB_PWD');
    $this->db = getenv('DB_NAME');

    $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->db);
  }

  public function getBooks()
  {
    $sql = "SELECT * FROM book";
    $result = $this->conn->query($sql);
    
    if ($result->num_rows > 0) {
      echo "<h2>Books:</h2>";
      while ($row = $result->fetch_assoc()) {
        echo "Book name: " . htmlspecialchars($row['name']) . "<br>";
      }
    }
  }

  public function __destruct()
  {
    $this->conn->close();
  }
}

try {
  $conn = new Database();

  echo $conn->getBooks();
} catch (Exception $e) {
  echo "Connection failed: " . $e->getMessage();
}