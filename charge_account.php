<?php include "database.php";

    session_start();

    $user = unserialize($_SESSION["user"]);

    $orders = array();
    $sql_user = array();
    $coin = array();
    $user_wallet_item = array();

    if (isset($_POST['amount'])) {

        $sql = "SELECT * FROM `user` WHERE `email` = '".$user->email."'";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sql_user[] = $row;
            }
        }

        $balance = (float)$_POST["amount"] + (float)$sql_user[0]["balance"];
        
        $sql = "SELECT * FROM `crypto_order` WHERE `status` = 'pending' AND `user_id` = ".$sql_user[0]["id"]." ORDER BY `order_date`";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $orders[] = $row;
            }
        }

        foreach ($orders as $order) {
            $cost = (float)$order["order_price"] * (float)$order["amount"];
            if($balance >= $cost){

                $sql = "UPDATE `crypto_order` SET `status`='completed' WHERE `id` = ".$order["id"];

                $conn->query($sql);

                $sql = "SELECT * FROM `coin` INNER JOIN `crypto_order` ON `coin`.`id` = `crypto_order`.`coin_id` WHERE `crypto_order`.`id` = ".$order["id"];
        
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $coin[] = $row;
                    }
                }

                $sql = "SELECT * FROM `holding_currency` WHERE `name`='".$coin[0]["name"]."'";

                $result = $conn->query($sql);

                if($result->num_rows > 0){
    
                    while ($row = $result->fetch_assoc()) {
                        $user_wallet_item[] = $row;
                    }
    
                    $sql = "UPDATE `holding_currency` SET `amount`="
                        .((float)$user_wallet_item[0]["amount"] + (float)$order['amount'])." WHERE `name` = '"
                        .$coin[0]["name"]."'";
                }
                else{
                    $sql = "INSERT INTO `holding_currency`(`name`, `amount`, `user_id`) VALUES ('"
                    .$coin[0]["name"]."',".(float)$order['amount'].",".$sql_user[0]['id'].")";
                }
    
                $conn->query($sql);

                $balance = $balance - $cost;
            }
            else{
                break;
            }
        }

        $sql = "UPDATE `user` SET `balance`=".$balance." WHERE `id` = ".$sql_user[0]['id'];
        
        $result = $conn->query($sql);

        $user->balance = $balance;

        $_SESSION['user'] = serialize($user);

    }

    header('Location: wallet.php');

?>
