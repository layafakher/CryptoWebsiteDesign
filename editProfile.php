<?php session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
} else {
    $user = unserialize($_SESSION["user"]);
    // echo var_dump($user);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js" integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="nofollow" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        body {
            margin-top: 20px;
            /* background:#F0F8FF; */
            background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('images/bg.webp');

        }

        .card {
            margin-bottom: 1.5rem;
            box-shadow: 0 1px 15px 1px rgba(52, 40, 104, .08);
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e5e9f2;
            border-radius: .2rem;
        }

        .card-header:first-child {
            border-radius: calc(.2rem - 1px) calc(.2rem - 1px) 0 0;
        }

        .card-header {
            border-bottom-width: 1px;
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            color: inherit;
            background-color: #fff;
            border-bottom: 1px solid #e5e9f2;
        }
    </style>
</head>

<body>

    <div class="container p-0">
        <h1 class="h3 mb-3" style="color:white;">Settings</h1>
        <div class="row">
            <div class="col-md-5 col-xl-4">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Settings</h5>
                    </div>

                    <div class="list-group list-group-flush" role="tablist">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
                            Account
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#p" role="tab">
                            Password
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="wallet.php" role="tab">
                            Wallet
                        </a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="index.php" role="tab">
                            Exit
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-xl-8">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account" role="tabpanel">

                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions float-right">
                                    <div class="dropdown show">
                                        <a href="#" data-toggle="dropdown" data-display="static">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">Public info</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="editProfile.php">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputUsername">Email</label>
                                                <input type="text" class="form-control mt-2" id="inputUsername" name="email" value="<?php echo $user->email; ?>">
                                            </div>

                                        </div>

                                    </div>


                                    <button type="submit" class="btn btn-primary mt-2 btn-sm">Save changes</button>
                                </form>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions float-right">
                                    <div class="dropdown show">
                                        <a href="#" data-toggle="dropdown" data-display="static">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">Private info</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="editProfile.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName">First name</label>
                                            <input type="text" class="form-control mb-4" id="inputFirstName" name="firstName" value="<?php echo $user->firstName; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLastName">Last name</label>
                                            <input type="text" class="form-control mb-4" id="inputLastName" name="lastName" value="<?php echo $user->lastName; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPhoneNumber">Phone Number</label>
                                            <input type="text" class="form-control mb-4" id="inputPhoneNumber" name="phone" value="<?php echo $user->phoneNumber; ?>">
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                </form>

                            </div>
                        </div>
                        <div class="card" id="p">
                            <div class="card-header">Change Password</div>
                            <div class="card-body">
                                <form method="post" action="editProfile.php">
                                    <!-- Form Group (current password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="currentPassword">Current Password</label>
                                        <input class="form-control" id="currentPassword" type="password" name="currentPass" placeholder="Enter current password">
                                    </div>
                                    <!-- Form Group (new password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="newPassword">New Password</label>
                                        <input class="form-control" id="newPassword" type="password" name="newPass" placeholder="Enter new password">
                                    </div>
                                    <!-- Form Group (confirm password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                        <input class="form-control" id="confirmPassword" type="password" name="newRepeatedPass" placeholder="Confirm new password">
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit">Save Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        include "database.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["email"])) {
            $email = $_POST['email'];
            if (empty($email)) {
                echo "Email is empty";
            } else {
                $command = "UPDATE user SET 
    `email` = '$email'
    WHERE email = '$user->email'; ";
                $result = $conn->query($command);
                if ($result === TRUE) {
                    $user->email = $email;
                    $_SESSION['user'] = serialize($user);
                    echo "Edited: ";
                } else {
                    echo "No";
                }
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" and (isset($_POST["firstName"]) || isset($_POST["lastName"]) || isset($_POST["phone"]))) {
            $firstName = $user->firstName;
            $lastName = $user->lastName;
            $phone = $user->phoneNumber;
            if (!empty($_POST["firstName"])) {
                $firstName = $_POST["firstName"];
            }
            if (!empty($_POST["lastName"])) {
                $lastName = $_POST["lastName"];
            }
            if (!empty($_POST["phone"])) {
                $phone = $_POST["phone"];
            }
            $command = "UPDATE user SET 
    first_name = '$firstName',
    last_name = '$lastName',
    phoneNumber = '$phone'
      WHERE email = '$user->email'; ";
            $result = $conn->query($command);
            if ($result === TRUE) {
                $user->firstName = $firstName;
                $user->lastName = $lastName;
                $user->phoneNumber = $phone;
                $_SESSION['user'] = serialize($user);
                echo "Edited: ";
            } else {
                echo "No";
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["newPass"])) {
            $CuPassR = $user->password;
            $CuPass = $_POST["currentPass"];
            if ($CuPassR == $CuPass) {
                $new = $_POST["newPass"];
                $newR = $_POST["newRepeatedPass"];

                if ($new == $newR) {
                    $command = "UPDATE user SET 
            `password` = '$new'
            WHERE email = '$user->email'; ";
                    $result = $conn->query($command);
                    if ($result === TRUE) {
                        $user->password = $new;
                        $_SESSION['user'] = serialize($user);
                        echo "Edited: ";
                    } else {
                        echo "No";
                    }
                }
            }
        }
        ?>
</body>

</html>