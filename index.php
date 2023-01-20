<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRYPTODALAYA</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styless.css" />

    <style>
      a{
        color: white;
      }
      a {
        text-decoration: none;
      }

      .mail::after {
        content: " 📨";
      }

    </style>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
      integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
      crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Header-->
    <header class="header" id="header">
      <!-- Top Header -->
      <div class="header__top">
        <div class="logo">
          <img src="images/logo.svg" alt="Croppo brand logo" />
          <span class="text text--medium">DALIYA CRYPTO</span>
        </div>
        <nav display="inline">
          
          <ul class="list list--inline">
            <!-- <li class="list__item text text--small text--regular">Products</li>
            <li class="list__item text text--small text--regular">Features</li> -->
            <!-- <li class="list__item text text--small text--regular">About</li> -->
            <a href="#footer">
            <li class="list__item text text--small text--regular" > 
            Contact
            </li>
          
          </a>
            <a href="admin.php">
            <li class="list__item text text--small text--regular">Admin</li>
            </a>

          </ul>
          <form >
          <button class="btn btn--link text text--small text--medium" type="submit" formaction="login.php">Login</button>
          </form>
          
          <span class="vertical-line"></span>
          <form>
          <button type="submit" class="btn btn--accent text--small text--medium" formaction="register.php">Register</button>
          </form>
          
          

        </nav>

      </div>
      <!-- Header Body -->
      <div class="header__body">
        <div class="grid grid--1x2 grid--centered grid-gap--small">
          <div class="value-proposition">
            <!-- <div class="badge-container">
              <span class="badge badge--dark text--small">75% Save</span>
              <span class="text text--small text--regular text--white">For the Black Friday weekend</span>
            </div> -->
            <h1 class="value-proposition__title">Fastest & secure platform to invest in crypto</h1>
            <p class="value-proposition__text text text--small text--regular">Buy and sell cryptocurrencies, trusted by 10M wallets with over $30 billion in transactions.</p>
            <form action="login.php">
            <button class="value-proposition__button btn btn--flex btn--accent">
              <span class="text--standart text--medium">
                Try for FREE
              </span>
              <div class="chiron-icon-container">
                <img src="images/chevron-right.svg" alt="Right Icon" />
              </div>
            </button>
            </form>

          </div>
          <img src="images/btc-illustration.svg" alt="Bitcoin illustration" class="btc-illustration" data-rellax-horizontal-speed="-2" data-rellax-vertical-scroll-axis="x"/>
        </div>
      </div>
      <img class="background-item-1" src="images/background-item-1.svg" alt="" />
      <img class="background-item-2" src="images/background-item-2.svg" alt="" />
    </header>

    <!-- Why Crappo -->
    <!-- <section class="why-crappo"> -->
      <!-- Media Objects -->
      <!-- <div class="media-container">
        <div class="media">
          <div class="icon-container">
            <svg class="media-icon">
              <use xlink:href="images/media-icons-sprite.svg#person"></use>
            </svg>
          </div>
          <div>
            <h2>10M+</h2>
            <p class="text text--small text--regular text--muted">Trusted Wallets Investor</p>
          </div>
        </div>
        <div class="media">
          <div class="icon-container">
            <svg class="media-icon">
              <use xlink:href="images/media-icons-sprite.svg#bar-chart"></use>
            </svg>
          </div>
          <div>
            <h2>$30B</h2>
            <p class="text text--small text--regular text--muted">Digital Currency Exchanged</p>
          </div>
        </div>
        <div class="media">
          <div class="icon-container">
            <svg class="media-icon">
              <use xlink:href="images/media-icons-sprite.svg#earth"></use>
            </svg>
          </div>
          <div>
            <h2>195</h2>
            <p class="text text--small text--regular text--muted">Countries Supported</p>
          </div>
        </div>
      </div> -->
      <!-- Why you should choose? -->
      <!-- <div class="grid grid--1x2 grid--centered">
        <img id="gpu-illustration" src="images/gpu-illustration.svg" alt="Illustration of gpu"  data-rellax-speed="3" data-rellax-percentage="0.5" />
        <div class="banner">
          <h2 class="banner__title">Why you should choose CRAPPO</h2>
          <p class="banner__text text text--small text--regular text--muted">Experience the next generation cryptocurrency platform. No financial borders, extra fees, and fake reviews.</p>
          <button class="btn btn--accent">
            <span class="text--standart text--medium">Learn More</span>
          </button>
        </div>
      </div>
      <img class="background-item-3" src="images/background-item-3.svg" alt="" />
      <img class="background-item-4" src="images/background-item-4.svg" alt="" />
      <img class="background-item-5" src="images/background-item-5.svg" alt="" />
    </section> -->

    <!-- Trade securely -->
    <section class="trade-securely">
      <!-- <h2>Check how much you can earn</h2>
      <p class="text text--standart text--regular text--muted">Let’s check your hash rate to see how much you will earn today, Exercitation veniam consequat sunt nostrud amet.</p>
      <div class="calculate">
        <div class="calculate__header">
          <input type="text" placeholder="Enter your hash rate" />
          <input list="rates" name="rate" id="rate" value="TH/s" />
          <datalist id="rates">
            <option value="TH/s" selected></option>
          </datalist>

          <button class="btn btn--accent">Calculate</button>
        </div>
        <div class="calculate__body">
          <p class="text text--small text--medium text--accent text--uppercase">Estimated 24 Hour Revenue:</p>
          <h3>0.055 130 59 ETH <span class="text--accent">($1275)</span></h3>
          <p class="text text--small text--regular text--grey">Revenue will change based on mining difficulty and Ethereum price.</p>
        </div>
      </div> -->
      <!-- <h2 class="text--primary">Trade securely and market the high growth cryptocurrencies.</h2> -->
      <div class="currencies">
        <div class="card card--secondary">
          <svg class="currency-icon">
            <use xlink:href="images/currencies-sprite.svg#btc"></use>
          </svg>
          <div class="card__header">
            <h3>Bitcoin</h3>
            <span class="text text--standart text--medium">BTC</span>
          </div>
          <p class="text text-small text--regular card__text">Digital currency in which a record of transactions is maintained.</p>
          <form action="login.php">
          <button class="btn btn--flex btn--accent" type="submit">
            <span class="text--standart text--medium">Start Investing</span>
            <div class="chiron-icon-container">
              <img src="images/chevron-right.svg" alt="Right Icon" />
            </div>
          </button>
          </form>

        </div>
        <div class="card card--white">
          <svg class="currency-icon">
            <use xlink:href="images/currencies-sprite.svg#eth"></use>
          </svg>
          <div class="card__header">
            <h3>Ethereum</h3>
            <span class="text text--standart text--medium">ETH</span>
          </div>
          <p class="text text-small text--regular card__text">Blockchain technology to create and run decentralized digital applications.</p>
        </div>
        <div class="card card--white">
          <svg class="currency-icon">
            <use xlink:href="images/currencies-sprite.svg#ltc"></use>
          </svg>
          <div class="card__header">
            <h3>Litecoin</h3>
            <span class="text text--standart text--medium">LTC</span>
          </div>
          <p class="text text-small text--regular card__text">Cryptocurrency that enables instant payments to anyone in the world.</p>
        </div>
      </div>
    </section>

    <!-- Features -->
    <!-- <section class="features">
      <h2>Market sentiments, portfolio, and run the infrastructure of your choice</h2>

      <div class="grid grid--1x2 grid--centered banner-bottom-margin">
        <div class="banner banner--left">
          <h2 class="banner__title">Invest Smart</h2>
          <p class="banner__text text text--small text--regular text--muted">Get full statistic information about the behaviour of buyers and sellers will help you to make the decision.</p>
          <button class="btn btn--accent">
            <span class="text--standart text--medium">Learn More</span>
          </button>
        </div>
        <img src="images/bitcoin-graph.svg" alt="Bitcoin graph" />
      </div>

      <div class="grid grid--1x2 grid--centered banner-bottom-margin">
        <img src="images/statistics.svg" alt="Currency statistics" />
        <div class="banner">
          <h2 class="banner__title">Detailed Statistics</h2>
          <p class="banner__text text text--small text--regular text--muted">View all mining related information in realtime, at any point at any location and decide which polls you want to mine in.</p>
          <button class="btn btn--accent">
            <span class="text--standart text--medium">Learn More</span>
          </button>
        </div>
      </div>

      <div class="grid grid--1x2 grid--centered">
        <div class="banner banner--left">
          <h2 class="banner__title">Grow your profit and track your investments</h2>
          <p class="banner__text text text--small text--regular text--muted">Use advanced analytical tools. Clear TradingView charts let you track current and historical profit investments.</p>
          <button class="btn btn--accent">
            <span class="text--standart text--medium">Learn More</span>
          </button>
        </div>
        <img src="images/coin-table.svg" alt="Coin tables" />
      </div>

      <img class="background-item-6" src="images/background-item-6.svg" alt="" />
      <img class="background-item-7" src="images/background-item-7.svg" alt="" />
    </section> -->

    <!-- Start mining -->
    <!-- <section class="start-mining">
      <div class="mining-container"> -->
        <!-- <div class="mining-container__header">
          <h3 class="mining-container__header__title">Start mining now</h3>
          <p class="mining-container__header__description text text--small text--regular">Join now with CRAPPO to get the latest news and start mining now</p>
        </div> -->
        <!-- <div class="mining-container__subscribe">
          <input type="text" placeholder="Enter your email" />
          <button class="btn btn--white">Subscribe</button>
        </div>
        <img class="background-item-8" src="images/background-item-8.svg" alt="" />
        <img class="background-item-9" src="images/background-item-9.svg" alt="" />
      </div>
      <img class="background-item-10" src="images/background-item-10.svg" alt="" />
      <img class="background-item-11" src="images/background-item-11.svg" alt="" />
    </section> -->

    <!-- Footer -->
    <footer class="footer" id="footer" style="padding: 2rem 0.5 2rem 0.5;">
      <div class="footer__top" style="margin-bottom: 2rem;">
        <div class="footer__top__logo">
          <img src="images/logo.svg" alt="Croppo brand logo" />
          <span class="text text--medium">DALIYA CRYPTO</span>
        </div>
        <div class="footer__top__menu">
          <nav class="nav">
            <p class="nav__title text text--medium">Quick Link</p>
            <ul class="nav__list">
              <li class="nav__list__item text text--small text--regular"><a href="#header">Home</a></li>
              <!-- <li class="nav__list__item text text--small text--regular">Products</li>
              <li class="nav__list__item text text--small text--regular">About</li>
              <li class="nav__list__item text text--small text--regular">Features</li> -->
              <li class="nav__list__item text text--small text--regular">Contact</li>
            </ul>
          </nav>
        </div>
        <div class="footer__top__menu">
          <nav class="nav">
            <p class="nav__title text text--medium">Contact Us</p>
            <ul class="nav__list">
              <li class="nav__list__item text text--small text--regular"><a  class="mail" href="mailto:laya.fakher@gmail.com">Laya </a></li>
              <li class="nav__list__item text text--small text--regular"><a   class="mail" href="mailto:danialcheckani2000@gmail.com">Danial</a></li>
            </ul>
          </nav>
        </div>
        <!-- <div class="footer__top__payment-systems">
          <p class="payment-systems__title">We accept following payment systems</p>
          <div class="payment-systems__payments">
            <div class="payment-icon-container">
              <img src="images/visa.svg" alt="Visa Card" />
            </div>
            <div class="payment-icon-container">
              <img src="images/mastercard.svg" alt="Master Card" />
            </div>
            <div class="payment-icon-container">
              <img src="images/bitcoin.svg" alt="Bitcoin" />
            </div>
          </div>
        </div> -->
      </div>
      <div class="footer__bottom">
        <div class="footer__bottom__copyright text text--small text--regular">&copy;2023 DALIYA CRYPTO. All rights reserved.</div>

      </div>
    </footer>
    <script>
      new Rellax(".btc-illustration", {
        horizontal: true,
      });
      new Rellax("#gpu-illustration", {
        horizontal: true,
      });
    </script>
  </body>
</html>