<?php
ini_set('display_errors', 1);

session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$name = validate($_POST['username']);
$pass = validate($_POST["password"]);
$email = validate($_POST["email"]);

if (empty($name)) {
    header("Location: register.php?error=User Name Is Required.");
    exit();
} else if (empty($pass)) {
    header("Location: register.php?error=User Password Is Required.");
    exit();
} else if (empty($email)) {
    header("Location: register.php?error=User Password Is Required.");
    exit();
}
$sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass');";

try {
    if (mysqli_query($conn, $sql)) {
        echo "Successfully Registered.";
        header("Location: index.php?success=Successfully registered, login now");
        exit();
    }
} catch (Exception $e) {
    echo $e;
    if (mysqli_errno($conn) == 1062) {
        header("Location: register.php?error=Email already registered");
    } else {

        header("Location: register.php?error=Could not register, try again");
        exit();
    }
}
