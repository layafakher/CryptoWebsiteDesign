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
    <?php 
      session_start();
    ?>
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
            <a href="#footer">
            <li class="list__item text text--small text--regular" > 
            Contact
            </li>
          
          </a>

            <?php
              if(isset($_SESSION['user'])){
                $user = unserialize($_SESSION["user"]);
                if(filter_var($user->isAdmin, FILTER_VALIDATE_BOOLEAN)){
                  echo 
                  '
                    <a href="admin.php">
                      <li class="list__item text text--small text--regular">Admin</li>
                    </a>
                  ';
                }
              }
            ?>

          </ul>
          <?php
              if(!isset($_SESSION['user'])){
                echo 
                '
                <form >
                <button class="btn btn--link text text--small text--medium" type="submit" formaction="login.php">Login</button>
                </form>
                
                <span class="vertical-line"></span>
                <form>
                <button type="submit" class="btn btn--accent text--small text--medium" formaction="register.php">Register</button>
                </form>
                ';
              }
              else{
                echo 
                '
                    <a href="home.php">
                      <li class="list__item text text--small text--regular">Home</li>
                    </a>
                ';
              }
            ?>

        </nav>

      </div>
      <div class="header__body">
        <div class="grid grid--1x2 grid--centered grid-gap--small">
          <div class="value-proposition">
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
    <section class="trade-securely">
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