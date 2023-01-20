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
</head>

<body>

    <?php session_start();
        if(!isset($_SESSION['user'])){
            header('Location: index.php');
            exit();
        }

        if(isset($_GET['logout'])){
          session_unset();
          header('Location: index.php');
          exit();
        }
    ?>

  <header class="header" data-header>
    <div class="container">

      <!-- <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="32" height="32" alt="Cryptex logo">
        Cryptex
      </a> -->
      <div class="logo">
        <img src="images/logo.svg" alt="Croppo brand logo" />
        <span class="text text--medium">DALIYA CRYPTO</span>
      </div>
      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item ">
            <a href="#" class="navbar-link active" data-nav-link>HomePage</a>
          </li>



          <!-- <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Markets</a>
          </li> -->

          <!-- <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Sell Crypto</a>
          </li> -->

          <li class="navbar-item">
            <form action="editProfile.php">
              <button type="submit">
                <a class="navbar-link" data-nav-link>Profile</a>
              </button>
            </form>
          </li>
          <!-- 
          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>BITUSDT</a>
          </li> -->
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
          <a class="btn btn-outline">Wallet</a>
        </button>
      </form>


    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->
      <!-- 
      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Buy & Sell Digital Assets In The DALIYA CRYPTO</h1>

            <p class="hero-text">
              Coin Cryptex is the easiest, safest, and fastest way to buy & sell crypto asset exchange.
            </p>

            <a href="#" class="btn btn-primary">Get started now</a>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="570" height="448" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section> -->





      <!-- 
        - #TREND
      -->






      <!-- 
        - #MARKET
      -->

      <section class="section market" aria-label="market update" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Market Update</h2>

            <!-- <a href="#" class="btn-link">See All Coins</a> -->
          </div>

          <div class="market-tab">

            <ul class="tab-nav">

            </ul>

            <table class="market-table">

              <thead class="table-head">

                <tr class="table-row table-title">

                  <th class="table-heading"></th>

                  <th class="table-heading" scope="col">#</th>

                  <th class="table-heading" scope="col">Name</th>

                  <th class="table-heading" scope="col">Last Price</th>

                  <th class="table-heading" scope="col">24h %</th>

                  <th class="table-heading" scope="col">Market Cap</th>

                  <!-- <th class="table-heading" scope="col">Last 7 Days</th> -->

                  <th class="table-heading"></th>

                </tr>

              </thead>

              <tbody class="table-body" id="data_container">
                <tr class="table-row" style="display : none">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <!-- <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon> -->
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">4</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-3.75%%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <!-- <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td> -->

                  <td class="table-data">
                    <button class="btn btn-outline">Buy</button>
                  </td>

                </tr>

                <tr class="table-row" style="display : none">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <!-- <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon> -->
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">5</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.45%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <!-- <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td> -->

                  <td class="table-data">
                    <button class="btn btn-outline">Buy</button>
                  </td>

                </tr>

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

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
  <script src="data_api.js"></script>

</body>

</html>