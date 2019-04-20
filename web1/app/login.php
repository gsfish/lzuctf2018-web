<?php

$username = 'admin';
$password = 'admin123';

if ($_POST['username'] === $username && $_POST['password'] === $password) {
    session_start();
    $_SESSION['success'] = true;
    header('Location: /admin.php');
} else {
    echo '用户名或密码错误 (￣_￣ )';
}

?>