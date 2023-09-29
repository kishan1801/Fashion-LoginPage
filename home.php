<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['email'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
    </head>

    <body>
        <h1>Hello,<?php echo $_SESSION['name']; ?></h1>
        <div>
            <a href="logout.php">Logout </a>
        </div>

    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
