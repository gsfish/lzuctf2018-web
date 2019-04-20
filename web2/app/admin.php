<?php

session_start();
if ($_SESSION['success'] === true) {
    $flag = file_get_contents('./3136b38330ee8dba21ca5a95aa2cd8b1.txt');
    echo '腻害啦 (=￣ω￣=)';
    echo '<br />';
    echo $flag;
}
session_destroy();

?>