<?php

session_start();
if ($_SESSION['success'] === true) {
    $flag = file_get_contents('./65cffec5ff5a1ddb69b2d36b51a55686.txt');
    echo "腻害啦 (=￣ω￣=)";
    echo "<br />";
    echo $flag;
}
session_destroy();

?>