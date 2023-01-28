<?php include "database.php";
  session_start();

  if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
  }

  $user = unserialize($_SESSION["user"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DALIYA CRYPTO - Buy & Sell Digital Assets In The cryptex</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/styles.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>

  <header class="header" data-header>
    <div class="container">

      <div class="logo" style="cursor: pointer;" onclick="location.href = 'index.php'">
        <img src="images/logo.svg" alt="Croppo brand logo" />
        <span class="text text--medium">DALIYA CRYPTO</span>
      </div>
      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item ">
            <a href="home.php" class="navbar-link" data-nav-link>HomePage</a>
          </li>

          <li class="navbar-item">
            <form action="editProfile.php">
              <button type="submit">
                <a class="navbar-link" data-nav-link>Profile</a>
              </button>
            </form>
          </li>
          <li class="navbar-item">
            <a href="home.php?logout=true" type="submit" class="navbar-link" data-nav-link name="logout">LogOut</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <form action="wallet.php">
        <button>
          <a class="navbar-link active">Wallet</a>
        </button>
      </form>


    </div>
  </header>

  <main style="margin-bottom:5rem;">
    <article>
      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <?php echo "<h1 class='h1 hero-title'>Ballance = $" . $user->balance . "</h1>" ?>

            <p class="hero-text">
              DALIYA CRYPTO is the easiest, safest, and fastest way to buy & sell crypto asset exchange.
            </p>
          </div>

          <div class="hero-content" style="display: flex;justify-content: center;align-items: center;">

            <button onclick="chargeAccount()" class="btn btn-outline" style="width: 35rem;font-size: 3rem;height: 7rem;">Charge Account</button>

          </div>

        </div>
      </section>

      <section class="section trend" aria-label="crypto trend" data-section>
        <div class="container">

          <div class="trend-tab">

            <ul class="tab-nav">

              <li>
              </li>

            </ul>

            <ul class="tab-content" id="wallet_items">

              <?php
              $walletItems = array();
              $coins = array();

              $sql = "SELECT * FROM `holding_currency` INNER JOIN `user` ON `holding_currency`.`user_id` = `user`.`id` WHERE `user`.`email` = '" . $user->email . "'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $walletItems[] = $row;
                }
              }

              $sql = 'SELECT * FROM coin';

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $coins[] = $row;
                }
              }

              foreach ($walletItems as $item) {
                $price = 0;
                foreach ($coins as $coin) {
                  if ($coin["name"] == $item["name"]) {
                    $price = (float)$coin["price"];
                  }
                }
                echo
                '
                    <li>
                      <div class="trend-card">
    
                        <div class="card-title-wrapper">
                          <img src="./assets/images/' . $item["name"] . '.svg" width="24" height="24" alt="' . $item["name"] . ' logo">
    
                          <a href="#" class="card-title">
                            ' . $item["name"] . ' <span class="span">' . $item["name"] . '/USD</span>
                          </a>
                        </div>
    
                        <data class="card-value">USD ' . number_format($price * (float)$item["amount"], 2) . '</data>
    
                        <div class="card-analytics " style="margin-bottom:5px;">
                          <data class="current-price" value="' . number_format($price, 3) . '">' . number_format($price, 3) . '</data>
    
    
                          </div>
                          <data class="current-price " value="' . $item["amount"] . '" style="margin-bottom:1rem;">Amount = ' . $item["amount"] . '</data>
    
                          <button class="tab-btn active promptBtn" onclick="pr(\'' . $item["name"] . '\')">Sell</button>
    
                      </div>
                    </li>
                  ';
              }

              ?>
            </ul>

          </div>

        </div>
      </section>

      </tr>

      <tr class="table-row">

        <td class="table-data">
          <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>


      </tr>

      <tr class="table-row">

        <td class="table-data">
          <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
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
  <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="./prompt.js"></script>

</body>

</html>