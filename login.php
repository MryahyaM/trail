<?php
    include('../conn.php');
    if (isset($_POST['loginA'])) {
        loginA();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="style/reg.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="form">
                    <?php include('../errors.php'); ?>

                    <div class="input_field">
                        <input type="text" placeholder="Username" class="input" name="username">
                    </div>
                    <div class="input_field">
                        <input type="password" placeholder="Password" class="input" name="passward">
                    </div>
                    <button class="btn" type="submit" name="loginA">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>