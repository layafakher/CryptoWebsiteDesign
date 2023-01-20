<?php include "database.php";

    $posts = array();

    if (isset($_POST['coins'])) {
        $coins = $_POST['coins'];

        foreach ($coins as $key => $coin) {
            $sql = "SELECT * FROM `coin` WHERE `name`='".$key."'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                $sql = "UPDATE `coin` SET `name`='".$key."',`price`=".$coin['usd'].
                ",`market_cap`=".$coin['usd_market_cap'].",`24h_change`=".$coin['usd_24h_change'].
                " WHERE `name`='".$key."'";
            }
            else{
                $sql = "INSERT INTO `coin`(`name`, `price`, `market_cap`, `24h_change`) VALUES('"
                    .$key."',".$coin['usd'].",".$coin['usd_market_cap'].",".$coin['usd_24h_change'].")";
            }
            $conn->query($sql);
        }
        
    }

?>
