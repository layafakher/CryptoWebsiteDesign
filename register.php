<?php session_start();
include "database.php";

if (
  isset($_POST["email"]) && isset($_POST["password"]) &&
  isset($_POST["passRepeat"]) && isset($_POST["phoneNumber"])
) {

  $email = $_POST["email"];
  $pass = $_POST["password"];

  if ($_POST["password"] == $_POST["passRepeat"]) {
    $sql = "INSERT INTO `user`(`first_name`, `last_name`, `phoneNumber`, `email`, `password`, `is_admin`) 
      VALUES ('" . $_POST["firstName"] . "','" . $_POST["lastName"] . "','" . $_POST["phoneNumber"] . "',
              '" . $_POST["email"] . "','" . $_POST["password"] . "',0)";

    $result = $conn->query($sql);

    $user = createUserObject($_POST["firstName"], $_POST["lastName"], $_POST["phoneNumber"], $_POST["email"], 0, false, $pass);

    $_SESSION['user'] = serialize($user);
    header('Location: home.php');
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="nofollow" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <style>
    input {
      font-size: small;
    }

    .gradient-custom {
      /* fallback for old browsers */
      /* Created with https://www.css-gradient.com */
      background: #4ACFEF;
      /* background: -webkit-linear-gradient(top left, #4ACFEF, #0D638C);
            background: -moz-linear-gradient(top left, #4ACFEF, #0D638C);
            background: linear-gradient(to bottom right, #4ACFEF, #0D638C); */
      background: url(images/bg.webp);
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }
  </style>
</head>

<body>

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              <form method="post" action="register.php">

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label mb-2" for="lastName">First Name</label>
                      <input type="text" name="lastName" id="lastName" class="form-control form-control-lg" />

                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label mb-2" for="lastName">Last Name</label>
                      <input type="text" name="firstName" id="firstName" class="form-control form-control-lg" />

                    </div>

                  </div>

                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label mb-2" for="e">Email</label>
                      <input type="email" id="e" name="email" class="form-control form-control-lg" placeholder="someone@example.com" />

                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label mb-2" for="lastName">Phone Number</label>
                      <input type="text" name="phoneNumber" id="lastName" class="form-control form-control-lg" />
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label mb-2" for="p">Password</label>
                      <input type="password" name="password" id="p" class="form-control form-control-lg" placeholder="" />
                      <input type="checkbox" id="showpass" style="margin-top: 1rem;">Show Password

                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <label class="form-label mb-2" for="cp">Confirm Password</label>
                      <input type="password" id="cp" name="passRepeat" class="form-control form-control-lg" />

                    </div>

                  </div>
                </div>

                <div class="mt-4 pt-2" style="text-align: center;">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.getElementById('showpass').addEventListener('click', (e) => {
      var x = document.getElementById('p')

      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    })
  </script>

</body>

</html>