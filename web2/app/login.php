<?php

$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
if ($conn->connect_errno) {
    die('Connect failed: ' . $conn->connect_error);
}
$sql = "SELECT * FROM `user` WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "';";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    $conn->close();
    session_start();
    $_SESSION['success'] = true;
    header('Location: /admin.php');
} else {
    $conn->close();
    echo '用户名或密码错误 (￣_￣ )';
}

?>