<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DALIYA CRYPTO - Buy & Sell Digital Assets In The cryptex</title>

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
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>

  <!--
    - #HEADER
  -->

  <?php include "database.php";
  session_start();

  if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
  }

  $user = unserialize($_SESSION["user"]);

  ?>

  <header class="header" data-header>
    <div class="container">

      <!-- <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="32" height="32" alt="Cryptex logo">
        Cryptex
      </a> -->
      <div class="logo" style="cursor: pointer;" onclick="location.href = 'index.php'">
        <img src="images/logo.svg" alt="Croppo brand logo" />
        <span class="text text--medium">DALIYA CRYPTO</span>
      </div>
      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item ">
            <a href="home.php" class="navbar-link" data-nav-link>HomePage</a>
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
          <a class="navbar-link active">Wallet</a>
        </button>
      </form>


    </div>
  </header>





  <main style="margin-bottom:5rem;">
    <article>

      <!--
        - #HERO
      -->

      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <?php echo "<h1 class='h1 hero-title'>Ballance = $" . $user->balance . "</h1>" ?>

            <p class="hero-text">
              DALIYA CRYPTO is the easiest, safest, and fastest way to buy & sell crypto asset exchange.
            </p>

            <!-- <a href="#" class="btn btn-primary">Sell</a> -->

          </div>

          <!-- <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="570" height="448" alt="hero banner" class="w-100">
          </figure> -->

        </div>
      </section>





      <!--
        - #TREND
      -->

      <section class="section trend" aria-label="crypto trend" data-section>
        <div class="container">

          <div class="trend-tab">

            <ul class="tab-nav">

              <li>
                <!-- <button class="tab-btn active"></button> -->
              </li>


            </ul>

            <ul class="tab-content" id="wallet_items">

              <?php
                $walletItems = array();
                $coins = array();

                $sql = "SELECT * FROM `holding_currency` INNER JOIN `user` ON `holding_currency`.`user_id` = `user`.`id` WHERE `user`.`email` = '".$user->email."'";
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
                  foreach($coins as $coin){
                    if($coin["name"] == $item["name"]){
                      $price = (float)$coin["price"];
                    }
                  }
                  echo
                  '
                    <li>
                      <div class="trend-card">
    
                        <div class="card-title-wrapper">
                          <img src="./assets/images/'.$item["name"].'.svg" width="24" height="24" alt="'.$item["name"].' logo">
    
                          <a href="#" class="card-title">
                            '.$item["name"].' <span class="span">'.$item["name"].'/USD</span>
                          </a>
                        </div>
    
                        <data class="card-value">USD '.number_format($price * (float)$item["amount"],2).'</data>
    
                        <div class="card-analytics " style="margin-bottom:5px;">
                          <data class="current-price" value="'.number_format($price,3).'">'.number_format($price,3).'</data>
    
    
                          </div>
                          <data class="current-price " value="'.$item["amount"].'" style="margin-bottom:1rem;">Amount = '.$item["amount"].'</data>
    
                          <button class="tab-btn active promptBtn" onclick="pr(\''.$item["name"].'\')">Sell</button>
    
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


      </tr>

      <tr class="table-row">

        <td class="table-data">
          <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>


      </tr>

      <tr class="table-row">

        <td class="table-data">
          <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
            <!-- <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon> -->
            <!-- </button>
                  </td>

                  <th class="table-data rank" scope="row">7</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+0.8%</td>

                  <td class="table-data market-cap">$880,423,640,582</td> -->

            <!-- <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td> -->
            <!--
                  <td class="table-data">
                    <button class="btn btn-outline">Buy</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav> -->
            <!-- <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon> -->
            <!-- </button>
                  </td>

                  <th class="table-data rank" scope="row">8</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-8.svg" width="20" height="20" alt="Avalanche logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Avalanche <span class="span">AVAX</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.41%</td>

                  <td class="table-data market-cap">$880,423,640,582</td> -->

            <!-- <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td> -->
            <!--
                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>
      </section> -->





            <!--
        - #INSTRUCTION
      -->


            <!--
        - #ABOUT
      -->



            <!--
        - #APP
      -->

            <!-- <section class="section app" aria-label="app" data-section>
        <div class="container">

          <div class="app-content">

            <h2 class="h2 section-title">Free Your Money & Invest With Confident</h2>

            <p class="section-text">
              With Cryptor Trade, you can be sure your trading skills are matched
            </p>

            <ul class="section-list">

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 item-title">Buy, Sell, And Trade On The Go</h3>
                </div>

                <p class="item-text">
                  Manage Your Holdings From Your Mobile Decive
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 item-title">Take Control Of Your Wealth</h3>
                </div>

                <p class="item-text">
                  Rest Assured You (And Only You) Have Access To Your Funds
                </p>
              </li>

            </ul>

            <div class="app-wrapper">
              <a href="#">
                <img src="./assets/images/googleplay.png" width="135" height="40" loading="lazy"
                  alt="get it on google play">
              </a>

              <a href="#">
                <img src="./assets/images/appstore.png" width="120" height="40" loading="lazy"
                  alt="download on the app store">
              </a>
            </div>

          </div>

          <div class="app-banner">
            <img src="./assets/images/app-banner.png" width="618" height="526" loading="lazy" alt="app banner"
              class="w-100">

            <span class="span">Scan To Download</span>
          </div>

        </div>
      </section> -->

    </article>
  </main>





  <!--
    - #FOOTER
  -->

  <footer class="footer">


    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 DALIYA CRYPTO. All rights reserved. <a href="#" class="copyright-link"></a>
        </p>



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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="./prompt.js"></script>

</body>

</html>