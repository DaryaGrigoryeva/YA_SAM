<?php
include("../db/db.php");

$errMsg = '';

// КОД ДЛЯ РЕГИСТРАЦИИ START
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {

    if (!isset($_POST['agree'])) {
        $errMsg = "Для регистрации необходимо принять пользовательское соглашение!";
        //echo $errMsg;
    } else {
        $admin = 0;
        $username = trim($_POST['username']);
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $user_type = $_POST['user_type'];
        $phonenumber = trim($_POST['phonenumber']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if ($username === '' || $gender === '' || $birthday === '' || $user_type === '' || $phonenumber === '' || $email === '' || $password === '') {
            $errMsg = "Не все поля заполнены!";
        } else {

            $existence = selectOne('users', ['email' => $email]);
            if ($existence['email'] === $email) {
                $errMsg = "Пользователь с такой почтой уже есть!";
                //echo $errMsg;
            } else {
                $pass = password_hash($password, PASSWORD_DEFAULT);
                $post = [
                    'admin' => $admin,
                    'username' => $username,
                    'gender' => $gender,
                    'birthday' => $birthday,
                    'user_type' => $user_type,
                    'phonenumber' => $phonenumber,
                    'email' => $email,
                    'password' => $pass

                ];
                $id = insert('users', $post);

                $user = selectOne('users', ['id' => $id]);
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['birthday'] = $user['birthday'];
                $_SESSION['user_type'] = $user['user_type'];
                $_SESSION['phonenumber'] = $user['phonenumber'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['admin'] = $user['admin'];

                if ($_SESSION['admin']) {
                    header('location: ' . 'https://ya-sam.com.ru/' . "pages/admin.php");
                } else {
                    header('location: ' . 'https://ya-sam.com.ru/');
                }
            }
        }
    }
} else {
    $username = '';
    $email = '';
}
// КОД ДЛЯ РЕГИСТРАЦИИ END


// КОД ДЛЯ АВТОРИЗАЦИИ START
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if ($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";
    } else {
        $existence = selectOne('users', ['email' => $email]);

        if ($existence && password_verify($pass, $existence['password'])) {
            $_SESSION['id'] = $existence['id'];
            $_SESSION['username'] = $existence['username'];
            $_SESSION['birthday'] = $existence['birthday'];
            $_SESSION['user_type'] = $existence['user_type'];
            $_SESSION['phonenumber'] = $existence['phonenumber'];
            $_SESSION['email'] = $existence['email'];
            $_SESSION['admin'] = $existence['admin'];
            $_SESSION['inn'] = $existence['inn'];
            $_SESSION['edu'] = $existence['edu'];
            $_SESSION['sfera'] = $existence['sfera'];
            $_SESSION['user_image'] = $existence['user_image'];

            if ($_SESSION['admin']) {
                header('location: ' . 'https://ya-sam.com.ru/' . "pages/admin.php");
            } else {
                header('location: ' . 'https://ya-sam.com.ru/');
            }
        } else {
            $errMsg = 'Почта или пароль введены неверно!';
        }
    }
} else {
    $email = '';
}
// КОД ДЛЯ АВТОРИЗАЦИИ END
