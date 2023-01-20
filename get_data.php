<?php include "database.php";

    $coins = array();

    $sql = 'SELECT * FROM coin';

    $result = $conn->query($sql);
        
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $coins[] = $row;
        }
    }
    
    print json_encode($coins);
?>
