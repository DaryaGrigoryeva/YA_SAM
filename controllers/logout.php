<?php
session_start();

/*unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['birthday']);
unset($_SESSION['user_type']);
unset($_SESSION['email']);*/

session_unset();
session_destroy();

header('location: '. 'https://ya-sam.com.ru/');
exit();
?>