<?php include "database.php";

    session_start();

    $user = unserialize($_SESSION["user"]);

    $coin = array();
    $posts = array();
    $sql_user = array();
    $user_wallet_item = array();

    if (isset($_POST['coin_name']) && isset($_POST['amount'])) {
        
        $sql = "SELECT * FROM `coin` WHERE `name` = '".$_POST['coin_name']."'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $coin[] = $row;
            }
        }

        $cost = (float)$coin[0]['price'] * (float)$_POST['amount'];

        $sql = "SELECT * FROM `user` WHERE `email` = '".$user->email."'";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sql_user[] = $row;
            }
        }

        if($cost > (float)$sql_user[0]["balance"]){
            $sql = "INSERT INTO `crypto_order`(`user_id`, `coin_id`, `order_date`, `status`, `amount`, `order_price`) VALUES ("
            .$sql_user[0]['id'].",".$coin[0]['id'].",NOW(),'pending',".$_POST['amount'].",".(float)$coin[0]['price'].")";

            $conn->query($sql);

            print -1;

            exit();

        } else {
            $sql = "INSERT INTO `crypto_order`(`user_id`, `coin_id`, `order_date`, `status`, `amount`, `order_price`) VALUES ("
            .$sql_user[0]['id'].",".$coin[0]['id'].",NOW(),'completed',".$_POST['amount'].",".(float)$coin[0]['price'].")";

            $conn->query($sql);

            $sql = "UPDATE `user` SET `balance`=".((float)$sql_user[0]['balance'] - $cost)." WHERE `id` =".$sql_user[0]["id"];

            $conn->query($sql);

            $sql = "SELECT * FROM `holding_currency` WHERE `name`='".$coin[0]["name"]."'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){

                while ($row = $result->fetch_assoc()) {
                    $user_wallet_item[] = $row;
                }

                $sql = "UPDATE `holding_currency` SET `amount`="
                    .((float)$user_wallet_item[0]["amount"] + (float)$_POST['amount'])." WHERE `name` = '"
                    .$coin[0]["name"]."'";
            }
            else{
                $sql = "INSERT INTO `holding_currency`(`name`, `amount`, `user_id`) VALUES ('"
                .$coin[0]["name"]."',".(float)$_POST['amount'].",".$sql_user[0]['id'].")";
            }

            $conn->query($sql);

            $user->balance = $user->balance - $cost;

            $_SESSION['user'] = serialize($user);

            print $cost;

            exit();
        }
    }

?>
