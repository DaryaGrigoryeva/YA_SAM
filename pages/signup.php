<?php 
include ("../controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Я.САМ | Регистрация</title> 
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../css/choices.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <div class="wrapper">

    <!-- HEADER -->
    <?php include("../include/header.php"); ?>
    <!-- HEADER -->

      <main class="_container signuplogin__container">
        <form method = "post" action = "signup.php">
          <section class="signuplogin__section1">
            <p class="signuplogin-title">Регистрация</p>

            <!-- Нужно стилизовать-->
            <p id="error-alert" class="error-alert"><?=$errMsg?></p> 

            <div class="signuplogin__forms">
                <div class="signuplogin__forms__form">
                  <input name="username" class="signuplogin__forms__form-input" id="signup__surname-field" type="text" placeholder=" " required>
                  <label for="signup__surname-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">ФИО</label>
                </div>
                <!-- <div class="signuplogin__forms__form">
                  <input name="first_name" class="signuplogin__forms__form-input" id="signup__name-field" type="text" placeholder=" " required>
                  <label for="signup__name-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">Имя</label>
                </div>
                <div class="signuplogin__forms__form">
                  <input name="patroname" class="signuplogin__forms__form-input" id="signup__patroname-field" type="text" placeholder=" " required>
                  <label for="signup__patroname-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">Отчество</label>
                </div> -->
                <select name="gender" id="gender" class="signuplogin__forms__form__select">
                  <option value="">Ваш пол</option>
                  <option value="Мужской">Мужской</option>
                  <option value="Женский">Женский</option>
                </select>
                <div class="signuplogin__forms__form">
                  <span class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke" id="birthday-placeholder">Дата рождения</span>
                  <input name="birthday" class="signuplogin__forms__form-input" id="signup__birthday-field" type="date" min="1900-01-01" max="2025-12-30" value="birthday" placeholder=" " required>
                </div>
                <select name="user_type" id="role" class="signuplogin__forms__form__select">
                  <option value="">Роль</option>
                  <option value="Самозанятый">Самозанятый</option>
                  <option value="Заказчик">Заказчик</option>
                </select>
                <!-- <div class="signuplogin__forms__form">
                  <input name="inn" class="signuplogin__forms__form-input" id="signup__inn-field" type="text" placeholder=" " required>
                  <label for="signup__inn-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">ИНН</label>
                </div> 
                <select name="edu" id="edu" class="signuplogin__forms__form__select">
                  <option value="">Образование</option>
                  <option value="sred">Среднее специальное (СПО)</option>
                  <option value="bakalavr">Бакалавриат</option>
                  <option value="magistrat">Магистратура</option>
                </select>
                <select name="sfera" id="sfera" class="signuplogin__forms__form__select">
                  <option value="">Сфера деятельности</option>
                  <option value="1">IT-сфера</option>
                  <option value="2">Авто</option>
                  <option value="3">Аренда</option>
                  <option value="4">Дом</option>
                  <option value="5">Животные</option>
                  <option value="6">Здоровье</option>
                  <option value="7">Информационные услуги</option>
                  <option value="8">Красота</option>
                  <option value="9">Обучение</option>
                  <option value="10">Одежда</option>
                  <option value="11">Природа</option>
                  <option value="13">Развлечения</option>
                  <option value="14">Ремонт</option>
                  <option value="15">Сделай сам</option>
                  <option value="16">Спорт</option>
                  <option value="17">Торговля самостоятльно произведённым товаром</option>
                  <option value="18">Финансы</option>
                  <option value="19">Фото, видео, печать</option>
                  <option value="20">Юристы</option>
                  <option value="12">Прочее</option>
                </select> -->
                <div class="signuplogin__forms__form">
                  <input name="phonenumber" class="signuplogin__forms__form-input" id="signup__phonenumber-field" type="tel" placeholder=" " required>
                  <label for="signup__phonenumber-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">Ваш номер телефона</label>
                </div>
                <div class="signuplogin__forms__form">
                  <input name="email" class="signuplogin__forms__form-input" id="signup__email-field" type="text" placeholder=" " required>
                  <label for="signup__email-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">Электронная почта</label>
                </div>
                <div class="signuplogin__forms__form">
                  <input name="password" class="signuplogin__forms__form-input" id="signup__password-field" type="password" placeholder=" " required>
                  <label for="signup__password-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">Пароль</label>
                  <button class="btn__pass signuplogin__forms__form__btn-pass" data-target="#signup__password-field"></button>
                </div>
                <!-- <div class="signuplogin__forms__form">
                  <input name="passwordcorrect" class="signuplogin__forms__form-input" id="signup__passwordcorrect-field" type="password" placeholder=" " required>
                  <label for="signup__passwordcorrect-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">Подтверждение пароля</label>
                  <button class="btn__pass signuplogin__forms__form__btn-pass" data-target="#signup__passwordcorrect-field"></button>
                </div> -->
            </div>
            <div class="signup__datacheck">
              <input type="checkbox" name="agree" id="signup__datacheck-checkbox">
              <p class="signup__datacheck__text">Я соглашаюсь на <a href="#" class="signup__datacheck__text-link">обработку персональных данных</a></p>
            </div>
            <button class="signup__btn" type="submit" name="button-reg">регистрация</button>
            <a href="login.php" class="signup__bnt-login">У меня уже есть аккаунт</a>
        </section>
      </form>
    </main>

      <!-- FOOTER -->
      <?php include("../include/footer.php"); ?>
      <!-- FOOTER -->

    </div>
    <script src="../js/choices.min.js"></script>
    <script src="../js/errorAlert.js"></script>
    <script src="../js/app.js"></script>
    
  </body>
</html>
