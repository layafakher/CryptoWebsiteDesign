<?php include "database.php";

    session_start();

    $user = unserialize($_SESSION["user"]);

    $coin = array();
    $sql_user = array();

    if (isset($_POST['coin_name']) && isset($_POST['amount'])) {
        
        $sql = "SELECT * FROM `holding_currency` INNER JOIN `coin` ON `holding_currency`.`name` = `coin`.`name` WHERE `holding_currency`.`name` = '".$_POST['coin_name']."'";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $coin[] = $row;
            }
        }

        $total = (float)$coin[0]['price'] * (float)$_POST['amount'];

        $sql = "SELECT * FROM `user` WHERE `email` = '".$user->email."'";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sql_user[] = $row;
            }
        }

        if((float)$_POST['amount'] < (float)$coin[0]["amount"]){

            $sql = "UPDATE `user` SET `balance`=".((float)$sql_user[0]['balance'] + $total)." WHERE `id` =".$sql_user[0]["id"];

            $conn->query($sql);

            $sql = "UPDATE `holding_currency` SET `amount`=".((float)$coin[0]["amount"] - (float)$_POST['amount'])
                ." WHERE `name` = '".$_POST['coin_name']."'";

            $conn->query($sql);

            $user->balance = $user->balance + $total;

            $_SESSION['user'] = serialize($user);


        } else if($_POST['amount'] == (float)$coin[0]["amount"]) {

            $sql = "UPDATE `user` SET `balance`=".((float)$sql_user[0]['balance'] + $total)." WHERE `id` =".$sql_user[0]["id"];

            $conn->query($sql);

            $sql = "DELETE FROM `holding_currency` WHERE `name` = '".$_POST['coin_name']."'";

            $conn->query($sql);

            $user->balance = $user->balance + $total;

            $_SESSION['user'] = serialize($user);

        }
    }

    header('Location: wallet.php');

?>
