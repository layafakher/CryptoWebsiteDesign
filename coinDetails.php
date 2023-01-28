<?php session_start();
if (!isset($_SESSION['user'])) {
  header('Location: index.php');
  exit();
}

if (isset($_GET['logout'])) {
  session_unset();
  header('Location: index.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex - Buy & Sell Digital Assets In The cryptex</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500&display=swap" rel="stylesheet">
  <style>
    h1 {
      font-size: 1.5em;
    }

    h2 {
      font-size: 1.25em;
    }

    h1,
    h2,
    p {
      font-family: "Red Hat Text", sans-serif;
      color: #303030;
    }

    .container {
      display: flex;
      justify-content: center;

    }

    .cards {
      width: 90%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* flex-wrap: wrap; */
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .btc,
    .cosmos,
    .ethereum {
      display: grid;
      /* max-width: 300px; */
      min-width: 250px;
      margin-bottom: 2rem;
      grid-template-columns: 1fr;
      grid-template-rows: minmax(50px, 60px) 1fr;
      grid-template: "info" "chart";
      border-radius: 30px;
      background-color: black;

    }

    .btc {
      box-shadow: 10px 10px 20px 1px rgba(247, 147, 26, 0.15);
    }

    .cosmos {
      box-shadow: 10px 10px 20px 1px rgba(46, 49, 72, 0.15);
    }

    .ethereum {
      box-shadow: 10px 10px 20px 1px rgba(78, 56, 216, 0.15);
    }

    .asset-info {
      grid-area: info;
      display: inline-flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 5% 0 5%;
      margin-top: 2.5rem;
    }

    .title {
      display: inline-flex;
    }

    .title h1 {
      color: white;
    }

    .card h1 {
      margin-left: 10px;
    }

    .buttons {
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 5rem;
      margin-bottom: 2rem;
    }

    .buttons button {
      color: white;
      border: 0.5px white solid;
      font-size: 1.2em;
      font-weight: bold;
      padding: 1rem;
      border-radius: 10px;
      transition: all 0.3s ease-in-out;
    }

    .btn1:hover {
      background-color: rgb(225, 134, 24);
      color: black;
      border: none;
    }

    .btn2:hover {
      background-color: rgb(46, 49, 72);
      color: black;
      border: none;
    }

    .btn3:hover {
      background-color: rgb(109, 98, 178);
      color: black;
      border: none;
    }

    #btcChart,
    #cosmosChart,
    #ethereumChart {
      grid-area: chart;
      border-radius: 0px 0px 30px 30px;
      margin-top: auto;
    }
  </style>
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
          <a class="btn btn-outline">Wallet</a>
        </button>
      </form>


    </div>
  </header>

  <main>
    <article>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $coin = $_POST['coinName'];
        $path = "./assets/images/" . $coin . ".svg";
      }
      ?>
      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content" style="display: flex; align-items : center">

            <figure class="hero-banner" style="margin-right: 2rem;">
              <img src="<?php echo $path ?>" width="570" height="448" alt="hero banner" class="w-100">
            </figure>
            <h1 class="h1 hero-title"><?php echo $coin; ?></h1>

            <p class="hero-text">

            </p>

            <!-- <a href="#" class="btn btn-primary">Get started now</a> -->

          </div>

        </div>
      </section>
      <div class="buttons">
        <button class="btn1" onclick="setChartView('daily')">Daily</button>
        <button class="btn2" onclick="setChartView('monthly')">Monthly</button>
        <button class="btn3" onclick="setChartView('annually')">Annually</button>
      </div>
      <container class="container">


        <cards class="cards">
          <div style="width: 100%" class="btc">
            <card class="asset-info">
              <div class="title">
                <!-- <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/btc.svg" width="15%">  -->
                <h1>Daily</h1>
              </div>
              <div class="details">
                <h2 class="asset-price" id="btcPrice"></h2>
              </div>
            </card>
            <canvas id="btcChart"></canvas>
          </div>

          <div style="width: 100%" class="cosmos">
            <card class="asset-info">
              <div class="title">
                <!-- <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/atm.svg" width="15%">  -->
                <h1>Monthly</h1>
              </div>
              <div class="details">
                <h2 class="asset-price" id="atomPrice"></h2>
              </div>
            </card>
            <canvas id="cosmosChart"></canvas>
          </div>

          <div style="width: 100%" class="ethereum">
            <card class="asset-info">
              <div class="title">
                <!-- <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/eth.svg" width="10%">  -->
                <h1>Annually</h1>
              </div>
              <div class="details">
                <h2 class="asset-price" id="ethPrice"></h2>
              </div>
            </card>
            <canvas id="ethereumChart"></canvas>
          </div>
        </cards>
      </container>

      <section class="section market" aria-label="market update" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title"></h2>
          </div>

          <div class="market-tab">

            <ul class="tab-nav">

            </ul>

            <table class="market-table">

              <tbody class="table-body" id="data_container">
                <tr class="table-row" style="display : none">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">4</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <h3>
                        <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-3.75%%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <button class="btn btn-outline">Buy</button>
                  </td>

                </tr>

                <tr class="table-row" style="display : none">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>

                    </button>
                  </td>

                  <th class="table-data rank" scope="row">5</th>

                  <td class="table-data">
                    <div class="wrapper">

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
  <script src="./assets/js/script.js" defer></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script>
    window.onload = () => {
      setChartView("daily")
    }

    function setChartView(current) {
      var daily = document.getElementsByClassName("btc")[0]
      var monthly = document.getElementsByClassName("cosmos")[0]
      var annually = document.getElementsByClassName("ethereum")[0]

      if (current === "daily") {
        daily.style.display = "block"
        monthly.style.display = "none"
        annually.style.display = "none"
      } else if (current == "monthly") {
        daily.style.display = "none"
        monthly.style.display = "block"
        annually.style.display = "none"
      } else {
        daily.style.display = "none"
        monthly.style.display = "none"
        annually.style.display = "block"
      }
    }

    const dailyData = async () => {
      var now = new Date();
      now = now.getTime().toString()
      current = now.substr(0, now.length - 3)
      var date = new Date();
      date.setDate(date.getDate() - 1);
      yesterday = date.getTime().toString()
      yesterday = yesterday.substr(0, yesterday.length - 3)
      var name = document.getElementsByClassName('hero-title')[0].innerHTML

      const response = await fetch(`https://api.coingecko.com/api/v3/coins/${name}/market_chart/range?vs_currency=usd&from=${yesterday}&to=${current}`);
      const json = await response.json();
      console.log(json);
      const data = json.prices
      var times = [];
      var prices = [];
      data.forEach(myFunction)

      function myFunction(dat) {
        times.push(dat[0])
        prices.push(dat[1])
      }
      return {
        times,
        prices
      }
    }


    const monthData = async () => {
      var now = new Date();
      now = now.getTime().toString()
      now = now.substr(0, now.length - 3)
      var date = new Date()
      date.setMonth(date.getMonth() - 1);
      lastMonth = date.getTime().toString()
      lastMonth = lastMonth.substr(0, lastMonth.length - 3)
      var name = document.getElementsByClassName('hero-title')[0].innerHTML
      const response = await fetch(`https://api.coingecko.com/api/v3/coins/${name}/market_chart/range?vs_currency=usd&from=${lastMonth}&to=${now}`);
      const json = await response.json();
      console.log(json);
      const data = json.prices
      var times = [];
      var prices = [];
      data.forEach(myFunction)

      function myFunction(dat) {
        times.push(dat[0])
        prices.push(dat[1])
      }
      return {
        times,
        prices
      }
    }


    const annualData = async () => {
      var now = new Date();
      var lastYear = new Date(now.getFullYear() - 1, now.getMonth(), now.getDay());
      lastYear = lastYear.getTime().toString()
      lastYear = lastYear.substr(0, lastYear.length - 3)
      now = now.getTime().toString()
      now = now.substr(0, now.length - 3)
      var name = document.getElementsByClassName('hero-title')[0].innerHTML
      const response = await fetch(`https://api.coingecko.com/api/v3/coins/${name}/market_chart/range?vs_currency=usd&from=${lastYear}&to=${now}`);
      const json = await response.json();
      console.log(json);
      const data = json.prices
      var times = [];
      var prices = [];
      data.forEach(myFunction)

      function myFunction(dat) {
        times.push(dat[0])
        prices.push(dat[1])
      }
      return {
        times,
        prices
      }
    }


    /// Error handling ///
    function checkStatus(response) {
      if (response.ok) {
        return Promise.resolve(response);
      } else {
        return Promise.reject(new Error(response.statusText));
      }
    }



    /// Charts ///
    let createBtcChart
    let createCosmosChart
    let createethereumChart

    async function printDailyChart() {
      let {
        times,
        prices
      } = await dailyData()

      let btcChart = document.getElementById('btcChart').getContext('2d');

      let gradient = btcChart.createLinearGradient(0, 0, 0, 400);

      gradient.addColorStop(0, 'rgba(247,147,26,.5)');
      gradient.addColorStop(.425, 'rgba(255,193,119,0)');

      Chart.defaults.global.defaultFontFamily = 'Red Hat Text';
      Chart.defaults.global.defaultFontSize = 12;

      createBtcChart = new Chart(btcChart, {
        type: 'line',
        data: {
          labels: times,
          datasets: [{
            label: '$',
            data: prices,
            backgroundColor: gradient,
            borderColor: 'rgba(247,147,26,1)',
            borderJoinStyle: 'round',
            borderCapStyle: 'round',
            borderWidth: 3,
            pointRadius: 0,
            pointHitRadius: 10,
            lineTension: .2,
          }]
        },

        options: {
          title: {
            display: false,
            text: 'Heckin Chart!',
            fontSize: 35
          },

          legend: {
            display: false
          },

          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0
            }
          },

          scales: {
            xAxes: [{
              display: false,
              gridLines: {}
            }],
            yAxes: [{
              display: false,
              gridLines: {}
            }]
          },

          tooltips: {
            callbacks: {
              title: function() {}
            },
            displayColors: false,
            yPadding: 10,
            xPadding: 10,
            position: 'nearest',
            caretSize: 10,
            backgroundColor: 'rgba(255,255,255,.9)',
            bodyFontSize: 15,
            bodyFontColor: '#303030'
          }
        }
      });
    }



    async function printMonthlyChart() {
      let {
        times,
        prices
      } = await monthData()

      let cosmosChart = document.getElementById('cosmosChart').getContext('2d');

      let gradient = cosmosChart.createLinearGradient(0, 0, 0, 400);

      gradient.addColorStop(0, 'rgba(27,30,54,.5)');
      gradient.addColorStop(.425, 'rgba(46,49,72,0)');

      Chart.defaults.global.defaultFontFamily = 'Red Hat Text';
      Chart.defaults.global.defaultFontSize = 12;

      createCosmosChart = new Chart(cosmosChart, {
        type: 'line',
        data: {
          labels: times,
          datasets: [{
            label: "",
            data: prices,
            backgroundColor: gradient,
            borderColor: 'rgba(46,49,72,1)',
            borderJoinStyle: 'round',
            borderCapStyle: 'round',
            borderWidth: 3,
            pointRadius: 0,
            pointHitRadius: 10,
            lineTension: .2,
          }]
        },

        options: {
          title: {
            display: false,
            text: 'Heckin Chart!',
            fontSize: 35
          },

          legend: {
            display: false
          },

          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0
            }
          },

          scales: {
            xAxes: [{
              display: false,
              gridLines: {}
            }],
            yAxes: [{
              display: false,
              gridLines: {}
            }]
          },

          tooltips: {
            callbacks: {
              //This removes the tooltip title
              title: function() {}
            },
            //this removes legend color
            displayColors: false,
            yPadding: 10,
            xPadding: 10,
            position: 'nearest',
            caretSize: 10,
            backgroundColor: 'rgba(255,255,255,.9)',
            bodyFontSize: 15,
            bodyFontColor: '#303030'
          }
        }
      });
    }


    async function printAnnuallyChart() {
      let {
        times,
        prices
      } = await annualData()

      let ethereumChart = document.getElementById('ethereumChart').getContext('2d');

      let gradient = ethereumChart.createLinearGradient(0, 0, 0, 400);

      gradient.addColorStop(0, 'rgba(78,56,216,.5)');
      gradient.addColorStop(.425, 'rgba(118,106,192,0)');

      Chart.defaults.global.defaultFontFamily = 'Red Hat Text';
      Chart.defaults.global.defaultFontSize = 12;

      createEthereumChart = new Chart(ethereumChart, {
        type: 'line',
        data: {
          labels: times,
          datasets: [{
            label: '$',
            data: prices,
            backgroundColor: gradient,
            borderColor: 'rgba(118,106,192,1)',
            borderJoinStyle: 'round',
            borderCapStyle: 'round',
            borderWidth: 3,
            pointRadius: 0,
            pointHitRadius: 10,
            lineTension: .2,
          }]
        },

        options: {
          title: {
            display: false,
            text: 'Heckin Chart!',
            fontSize: 35
          },

          legend: {
            display: false
          },

          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0
            }
          },

          scales: {
            xAxes: [{
              display: false,
              gridLines: {}
            }],
            yAxes: [{
              display: false,
              gridLines: {}
            }]
          },

          tooltips: {
            callbacks: {
              //This removes the tooltip title
              title: function() {}
            },
            //this removes legend color
            displayColors: false,
            yPadding: 10,
            xPadding: 10,
            position: 'nearest',
            caretSize: 10,
            backgroundColor: 'rgba(255,255,255,.9)',
            bodyFontSize: 15,
            bodyFontColor: '#303030'
          }
        }
      });
    }

    printDailyChart()
    printMonthlyChart()
    printAnnuallyChart()
  </script>


</body>

</html>