<?php

class Database {
  private $host='mysql';
  private $user='user';
  private $pwd='password';
  private $db='mydb';
  private $conn;

  public function __construct()
  {
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

$conn = new Database();
echo $conn->getBooks();