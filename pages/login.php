<?php 
include ("../controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Я.САМ | Авторизация</title> 
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <div class="wrapper">

    <!-- HEADER -->
    <?php include("../include/header.php"); ?>
    <!-- HEADER -->

      <main class="_container signuplogin__container">
        <form method="post" action="login.php">
        <section class="signuplogin__section1">
            <p class="signuplogin-title">Вход</p>

            <!-- Нужно стилизовать -->
            <p id="error-alert" class="error-alert"><?=$errMsg?></p> 

            <div class="signuplogin__forms" id="login__form">
                <div class="signuplogin__forms__form">
                  <input name="email" value="" class="signuplogin__forms__form-input" id="signup__email-field" type="text" placeholder=" " required>
                  <label for="signup__email-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">Электронная почта</label>
                </div>
                <div class="signuplogin__forms__form">
                  <input name="password" class="signuplogin__forms__form-input" id="signup__password-field" type="password" placeholder=" " required>
                  <label for="signup__password-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">Пароль</label>
                  <button class="btn__pass signuplogin__forms__form__btn-pass" data-target="#signup__password-field"></button>
                </div>
            </div>
            <button class="login__btn" type="submit" name="button-log">войти</button>
        </section>
        </form>
      </main>

      <!-- FOOTER -->
      <?php include("../include/footer.php"); ?>
      <!-- FOOTER -->

    </div>
    <script src="../js/errorAlert.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
