<?php session_start();
include "database.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {
  $email = $_POST["email"];
  $pass = $_POST["password"];

  $sql = "SELECT * FROM user";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row['email'] == $email && $row['password'] == $pass) {

        $user = createUserObject($row["first_name"], $row["last_name"], $row["phoneNumber"], $row["email"], $row["balance"], $row["is_admin"], $row["password"]);

        $_SESSION['user'] = serialize($user);
        header('Location: home.php');
        exit();
      }
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Untitled</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
  <style>
    html {
      height: 100%;
      width: 100%;
    }

    body {
      height: 100%;
      /* Created with https://www.css-gradient.com */
      background: url(images/bg.webp);
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;
      /* background: -webkit-linear-gradient(top left, #5B5BC1, #00437A);
        background: -moz-linear-gradient(top left, #5B5BC1, #00437A);
        background: linear-gradient(to bottom right, #5B5BC1, #00437A); */
      display: flex;
      justify-content: center;
      align-items: center;

    }

    .card-img-left {
      width: 45%;
      /* Link to your background image using in the property below! */
      background: scroll center url('images/crypto.jpg');
      background-size: cover;
    }

    .btn-login {
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      padding: 0.75rem 1rem;
    }

    .btn-google {
      color: white !important;
      background-color: #ea4335;
    }

    .btn-facebook {
      color: white !important;
      background-color: #3b5998;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <form method="post" action="login.php">


              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>


              <div class="d-grid mb-2">
                <form>
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Login</button>
                </form>

              </div>

              <a class="d-block text-center mt-2 small" href="register.php">Don't have an account yet? Sign Up</a>

              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>