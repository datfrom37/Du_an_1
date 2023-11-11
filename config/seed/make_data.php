<?php 
    include '../connect.php';

    try {
      $conn = connect_db();
      for( $i = 1; $i <= 10; $i++){
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";
      }
    }
?>