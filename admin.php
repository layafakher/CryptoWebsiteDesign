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

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <div class="logo">
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
              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-1.svg" width="24" height="24" alt="bitcoin logo">

                    <a href="#" class="card-title">
                      Bitcoin <span class="span">BTC/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="46168.95">USD 46,168.95</data>

                  <div class="card-analytics " style="margin-bottom:5px;">
                    <data class="current-price" value="36641.20">36,641.20</data>
                    </div>
                    <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Amount = 1.2</data>
                    <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Name = adfs</data>
                    <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Email = daial@gmail.com</data>
                    <button class="tab-btn active">Cancel</button>
                </div>
              </li>
              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-2.svg" width="24" height="24" alt="ethereum logo">
                    <a href="#" class="card-title">
                      Ethereum <span class="span">ETH/USD</span>
                    </a>
                  </div>
                  <data class="card-value" value="3480.04">USD 3,480.04</data>
                  <div class="card-analytics" style="margin-bottom:5px;">
                  <data class="current-price" value="36641.20">36,641.20</data>
                  </div>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Amount = 1.2</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Name = adfs</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Email = daial@gmail.com</data>
                <button class="tab-btn active">Cancel</button>
                </div>
              </li>
              <li>
                <div class="trend-card">
                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-3.svg" width="24" height="24" alt="tether logo">

                    <a href="#" class="card-title">
                      Tether <span class="span">USDT/USD</span>
                    </a>
                  </div>
                  <data class="card-value" value="1.00">USD 1.00</data>

                  <div class="card-analytics" style="margin-bottom:5px;">
                    <data class="current-price" value="36641.20">36,641.20</data>
                  </div>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Amount = 1.2</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Name = adfs</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Email = daial@gmail.com</data>
                  <button class="tab-btn active">Cancel</button>

                </div>
              </li>
              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-3.svg" width="24" height="24" alt="tether logo">

                    <a href="#" class="card-title">
                      Tether <span class="span">USDT/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="1.00">USD 1.00</data>

                  <div class="card-analytics" style="margin-bottom:5px;">
                    <data class="current-price" value="36641.20">36,641.20</data>

                  </div>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Amount = 1.2</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Name = adfs</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Email = daial@gmail.com</data>

                <button class="tab-btn active">Cancel</button>

                </div>
              </li>
              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-3.svg" width="24" height="24" alt="tether logo">

                    <a href="#" class="card-title">
                      Tether <span class="span">USDT/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="1.00">USD 1.00</data>

                  <div class="card-analytics" style="margin-bottom:5px;">
                    <data class="current-price" value="36641.20">36,641.20</data>

                  </div>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Amount = 1.2</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Name = adfs</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Email = daial@gmail.com</data>


                <button class="tab-btn active">Cancel</button>

                </div>
              </li>
              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-3.svg" width="24" height="24" alt="tether logo">

                    <a href="#" class="card-title">
                      Tether <span class="span">USDT/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="1.00">USD 1.00</data>

                  <div class="card-analytics" style="margin-bottom:5px;">
                    <data class="current-price" value="36641.20">36,641.20</data>

                  </div>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Amount = 1.2</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Name = adfs</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Email = daial@gmail.com</data>


                <button class="tab-btn active">Cancel</button>

                </div>
              </li>

              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-4.svg" width="24" height="24" alt="bnb logo">

                    <a href="#" class="card-title">
                      BNB <span class="span">BNB/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="443.56">USD 443.56</data>

                  <div class="card-analytics" style="margin-bottom:5px;">
                    <data class="current-price" value="36641.20">36,641.20</data>

                  </div>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Amount = 1.2</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Name = adfs</data>
                  <data class="current-price " value="36641.20" style="margin-bottom:1rem;">Email = daial@gmail.com</data>


                <button class="tab-btn active">Cancel</button>

                </div>
              </li>

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

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>

                    </button>
                  </td>

                  <th class="table-data rank" scope="row">1</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <!-- <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img"> -->

                      <h3>
                        <a href="#" class="coin-name">Danial</a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">chekani</td>

                  <td class="table-data last-update">09391165361</td>

                  <td class="table-data market-cap">danial@gmail.com</td>



                  <td class="table-data">
                    <div >$254,058,960</div>
                  </td>

                </tr>
                <tr class="table-row">

                <td class="table-data">
                  <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>

                  </button>
                </td>

                <th class="table-data rank" scope="row">2</th>

                <td class="table-data">
                  <div class="wrapper">
                    <!-- <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img"> -->

                    <h3>
                      <a href="#" class="coin-name">Danial</a>
                    </h3>
                  </div>
                </td>

                <td class="table-data last-price">chekani</td>

                <td class="table-data last-update">09391165361</td>

                <td class="table-data market-cap">danial@gmail.com</td>



                <td class="table-data">
                  <div >$254,058,960</div>
                </td>

                </tr>
                <tr class="table-row">

                <td class="table-data">
                  <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>

                  </button>
                </td>

                <th class="table-data rank" scope="row">3</th>

                <td class="table-data">
                  <div class="wrapper">
                    <!-- <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img"> -->

                    <h3>
                      <a href="#" class="coin-name">Danial</a>
                    </h3>
                  </div>
                </td>

                <td class="table-data last-price">chekani</td>

                <td class="table-data last-update">09391165361</td>

                <td class="table-data market-cap">danial@gmail.com</td>



                <td class="table-data">
                  <div >$254,058,960</div>
                </td>

                </tr>
                <tr class="table-row">

                <td class="table-data">
                  <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>

                  </button>
                </td>

                <th class="table-data rank" scope="row">4</th>

                <td class="table-data">
                  <div class="wrapper">
                    <!-- <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img"> -->

                    <h3>
                      <a href="#" class="coin-name">Danial</a>
                    </h3>
                  </div>
                </td>

                <td class="table-data last-price">chekani</td>

                <td class="table-data last-update">09391165361</td>

                <td class="table-data market-cap">danial@gmail.com</td>



                <td class="table-data">
                  <div >$254,058,960</div>
                </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">2</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-5.12%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>



                  <td class="table-data">
                    <button class="btn btn-outline">Edit</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">3</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.45%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>



                  <td class="table-data">
                    <button class="btn btn-outline">Buy</button>
                  </td>

                </tr>

                <tr class="table-row">

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

                <tr class="table-row">

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
                  <td class="table-data">
                    <button class="btn btn-outline">Buy</button>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">6</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-2.22%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>
                  <td class="table-data">
                    <button class="btn btn-outline">Buy</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                    </button>
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

                  <td class="table-data market-cap">$880,423,640,582</td>
                  <td class="table-data">
                    <button class="btn btn-outline">Buy</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                    </button>
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

                  <td class="table-data market-cap">$880,423,640,582</td>
                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
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

</body>

</html>