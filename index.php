<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion-World Login Page</title>
    <link rel="stylesheet" href="./CSS/styles.css" />
    <link rel="icon" href="./images/womenshop.png" type="Fashion icon">
    <style>
       
    </style>

</head>

<body>
    <div class="container">
        <img class="img1" src="./images/womenshop.png" alt="" width="72" height="57">
        <h1 class="loginhead">Please login</h1>
        <form action="login.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>

            <?php } ?>
            <div class="form-group">
                <input type="text" id="email" name="email" placeholder="User Email" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="User password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <a href="register.php">Register</a>
        </form>
    </div>
</body>

</html>