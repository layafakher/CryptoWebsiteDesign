<?php include "database.php";

    $walletItems = array();

    $sql = 'SELECT * FROM `holding_currency` WHERE `user_id` = 1';

    $result = $conn->query($sql);
        
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $coins[] = $row;
        }
    }
    
    print json_encode($coins);
?>
