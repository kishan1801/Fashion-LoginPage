<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion-World Login Page</title>
    <link rel="stylesheet" href="./CSS/styles.css" />
    <link rel="icon" href="./images/womenshop.png" type="Fashion icon">

</head>

<body>
    <div class="container">
        <img class="img1" src="./images/womenshop.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Sign up</h1>
        <form action="register_action.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>
            <div class="form-group">
                <input type="text" id="email" name="email" placeholder="Email Required" required>
            </div>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="username required" required>
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="User password" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign up</button>
            </div>
        </form>
    </div>
</body>

</html>