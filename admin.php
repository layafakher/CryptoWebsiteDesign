<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex - Buy & Sell Digital Assets In The cryptex</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/styles.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
   .table-heading , .table-data {padding: 1vw 2vw;}
  </style>
</head>


<body>

  <?php include "database.php";

    session_start();

    if(!isset($_SESSION['user'])){
      header('Location: index.php');
      exit(); 
    }
    else{
      $user = unserialize($_SESSION["user"]);;
      if(!filter_var($user->isAdmin, FILTER_VALIDATE_BOOLEAN)){
        header('Location: index.php');
        exit();
      }
    }

    if(isset($_POST["cancelOrder"])){

      $sql = "DELETE FROM `crypto_order` WHERE `id` = ".(int)$_POST["cancelOrder"];

      $conn->query($sql);
    }

  ?>

  <header class="header" data-header>
    <div class="container">
    <div class="logo" style="cursor: pointer;" onclick="location.href = 'index.php'">
        <img src="images/logo.svg" alt="Croppo brand logo" />
        <span class="text text--medium">DALIYA CRYPTO</span>
      </div>
      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item ">
            <a href="#" class="navbar-link " data-nav-link>Dashboard</a>
          </li>
          <li class="navbar-item" >
            <a href="#u" class="navbar-link" data-nav-link>Users</a>
          </li>
          <li class="navbar-item">
            <a href="#p" class="navbar-link" data-nav-link>Pending Oerders</a>
          </li>
        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <form action="index.php">
        <button >
        <a  class="btn btn-outline">Exit</a>
        </button>
      </form>


    </div>
  </header>

  <main>
    <article>

      <!--
        - #HERO
      -->
      <section class="section hero" aria-label="hero" data-section>
        <div class="container">


        </div>
      </section>
      <!--
        - #TREND
      -->
      <section class="section trend" aria-label="crypto trend" data-section id="p">
        <div class="container">

          <div class="trend-tab">

            <ul class="tab-nav">
              <li>
                <button class="tab-btn" style="font-size:3rem;">Pending Orders </button>
              </li>
            </ul>
            <ul class="tab-content">
              <?php
                $orders = array();

                $sql = "SELECT `user`.`first_name`, `user`.`last_name`, `coin`.`name`, `crypto_order`.`amount` , `crypto_order`.`order_price`, `crypto_order`.`order_date`, `crypto_order`.`id` FROM `crypto_order` INNER JOIN `coin` ON `crypto_order`.`coin_id` = `coin`.`id` INNER JOIN `user` ON `crypto_order`.`user_id` = `user`.`id` WHERE `status` = 'pending'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    $orders[] = $row;
                  }
                }

                foreach ($orders as $order) {
                  echo
                  '
                    <li>
                      <div class="trend-card">
      
                        <div class="card-title-wrapper">
                          <img src="./assets/images/'.$order["name"].'.svg" width="24" height="24" alt="'.$order["name"].' logo">
      
                          <a href="#" class="card-title">
                            '.$order["name"].' <span class="span">'.$order["name"].'/USD</span>
                          </a>
                        </div>
      
                        <data class="card-value" value="46168.95">USD '.number_format((float)$order["order_price"] * (float)$order["amount"],2).'</data>
      
                          <data class="current-price " style="margin-bottom:1rem;">Price = '.number_format($order["order_price"],3).'</data>
                          <data class="current-price " style="margin-bottom:1rem;">Amount = '.$order["amount"].'</data>
                          <data class="current-price " style="margin-bottom:1rem;">User = '.$order["first_name"]." ".$order["last_name"].'</data>
                          <data class="current-price " style="margin-bottom:1.5rem;">Order Date : '.$order["order_date"].'</data>
                          <form method="post" action="admin.php">
                            <input type="hidden" name="cancelOrder" value="'.$order["id"].'" />
                            <button class="tab-btn active" type="submit">Cancel</button>
                          </form>
                      </div>
                    </li>
                  ';
                }
              
              ?>
              
            </ul>

          </div>

        </div>
      </section>
      <!--
        - #MARKET
      -->
      <section class="section market" aria-label="market update" data-section id="u">
        <div class="container">

          <div class="title-wrapper">
            <!-- <h2 class="h2 section-title">Market Update</h2> -->

            <!-- <a href="#" class="btn-link">See All Coins</a> -->
          </div>

          <div class="market-tab">

            <ul class="tab-nav">

              <li>
                <button class="tab-btn" style="font-size:3rem;">Users</button>
              </li>


            </ul>

            <table class="market-table">

              <thead class="table-head">

                <tr class="table-row table-title">

                  <th class="table-heading"></th>

                  <th class="table-heading" scope="col">#</th>

                  <th class="table-heading" scope="col">First Name</th>

                  <th class="table-heading" scope="col">Last Name</th>

                  <th class="table-heading" scope="col">Phone</th>

                  <th class="table-heading" scope="col">Email</th>
                  <th class="table-heading" scope="col">Balance</th>


                  <!-- <th class="table-heading" scope="col">Last 7 Days</th> -->

                  <th class="table-heading"></th>

                </tr>

              </thead>

              <tbody class="table-body">

                <?php
                  $users = array();

                  $sql = "SELECT * FROM `user`";
                  $result = $conn->query($sql);
                  
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      $users[] = $row;
                    }
                  }

                  foreach ($users as $user) {
                    echo
                    '
                      <tr class="table-row">

                        <td class="table-data">
                          <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                          </button>
                        </td>
      
                        <th class="table-data rank" scope="row">'.$user["id"].'</th>
      
                        <td class="table-data">
                          <div class="wrapper">
                            <h3>
                              <a href="#" class="coin-name">'.$user["first_name"].'</a>
                            </h3>
                          </div>
                        </td>
      
                        <td class="table-data last-price">'.$user["last_name"].'</td>
      
                        <td class="table-data last-update">'.$user["phoneNumber"].'</td>
      
                        <td class="table-data market-cap">'.$user["email"].'</td>

                        <td class="table-data">
                          <div >'.number_format((float)$user["balance"],2).'</div>
                        </td>
      
                      </tr>
                    ';
                  }
                
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </section>
    </article>
  </main>

  <footer class="footer">


    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 DALIYA CRYPTO. All rights reserved. <a href="#" class="copyright-link"></a>
        </p>

      </div>
    </div>

  </footer>

  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>