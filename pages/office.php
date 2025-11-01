<?php
//include ("../db/db.php"); 
include("../controllers/advert.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Я.САМ | Личный кабинет</title>
  <link rel="stylesheet" href="../css/fonts.css" />
  <link rel="stylesheet" href="../css/choices.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <div class="wrapper">

    <!-- HEADER -->
    <?php include("../include/header.php"); ?>
    <!-- HEADER -->

    <?php if (isset($_SESSION['id'])) : ?>



      <main class="_container office__container">
        <section class="office__section1">
          <div class="office__section1__topside">
            <p class="office__section1__topside-title">Личный кабинет</p>
            <a href="#office__edit-popup" class="office__section1__topside-btn">редактировать информацию</a>
          </div>
          <div class="office__section1__info1">
            <div class="office__section1__info1__left">
              <div class="office__section1__info1__left__top">
                <p class="office__section1__info1__left__top-title">Общая информация</p>
                <div class="office__section1__info1__left__top__texts">
                  <!-- <p class="office__section1__info1__left__top__texts-text">ФИО: Макаров Евгений Анатольевич</p> -->

                  <p class="office__section1__info1__left__top__texts-text">ФИО: <?php echo $_SESSION['username']; ?></p>

                  <?php $dateOfBirth = $_SESSION['birthday'];
                  $today = new DateTime();
                  $birthDate = new DateTime($dateOfBirth);
                  $age = $today->diff($birthDate)->y;
                  ?>

                  <!-- <p class="office__section1__info1__left__top__texts-text">Возраст: 20</p> -->
                  <p class="office__section1__info1__left__top__texts-text">Возраст: <?php echo $age ?></p>
                  <!--  <p class="office__section1__info1__left__top__texts-text">Роль: Самозанятый</p> -->
                  <p id="office-role" class="office__section1__info1__left__top__texts-text">Роль: <?php echo $_SESSION['user_type']; ?></p>
                </div>
              </div>
              <div class="office__section1__info1__left__bottom">
                <div class="office__section1__info1__left__bottom__left">
                  <div class="office__section1__info1__left__bottom__left-img" style="background-image: url('../images/office-star.svg')">1</div>
                  <p class="office__section1__info1__left__bottom__left-title">начинающий</p>
                  <p class="office__section1__info1__left__bottom__left-text1">4 из 9 заданий</p>
                  <p class="office__section1__info1__left__bottom__left-text2">6 успешных проектов до следующего уровня</p>
                </div>
                <div class="office__section1__info1__left__bottom__right">
                  <div class="office__section1__info1__left__bottom__right-img" style="background-image: url('../images/office-projects.svg')"></div>
                  <p class="office__section1__info1__left__bottom__right-title">4 проекта</p>
                  <p class="office__section1__info1__left__bottom__right-text1">4 проекта</p>
                  <p class="office__section1__info1__left__bottom__right-text2">Четыре заказчика ждут вашего ответа</p>
                </div>
              </div>
            </div>
            <!-- <div class="office__section1__info1__right" style="background-image: url('../images/4360835.png')"></div> 
            <div class="office__section1__info1__right" <img src="../otherImages/users_accounts/' .<?php echo $_SESSION['user_image']; ?>" alt="" srcset=""></div>-->
            <div class="office__section1__info1__right" style="background-image: url('../otherImages/users_accounts/<?php echo $_SESSION['user_image']; ?>')"></div>

          </div>
          <div class="office__section1__info2">
            <div class="office__section1__info2__left">
              <p class="office__section1__info2__left-title">Контактная информация</p>
              <div class="office__section1__info2__left__phonenumbers">
                <p class="office__section1__info2__left__phonenumbers-personalnum">Личный номер телефона: <?php echo $_SESSION['phonenumber'] ?></p>
                <!--  <p class="office__section1__info2__left__phonenumbers-worknum">Рабочий номер телефона: +7 (902) 785-44-67</p> -->
                <p class="office__section1__info2__left__phonenumbers-email">Электронная почта: <?php echo $_SESSION['email']; ?></p>
              </div>
            </div>
            <div class="office__section1__info2__right">
              <p class="office__section1__info2__right-title">Дополнительная информация</p>
              <div class="office__section1__info2__right__texts">
                <p class="office__section1__info2__right__texts-city">ИНН: <?php echo $_SESSION['inn']; ?></p>
                <p class="office__section1__info2__right__texts-education">Ваше образование: <?php echo $_SESSION['edu']; ?></p>
                <p class="office__section1__info2__right__texts-activity">Направление деятельности: <?php echo $_SESSION['sfera']; ?></p>
              </div>
            </div>
          </div>
          <!--<div class="office__section1__letter">
              <div class="office__section1__letter__topside">
                <p class="office__section1__letter__topside-title">Ваше сопроводительное письмо</p>
                <label for="office__section1__letter-text" class="office__section1__letter__topside-btn">редактировать</label>
              </div>
              <textarea id="office__section1__letter-text" class="office__section1__letter-text">
Уважаемый(ая) [Имя получателя],

Я бы хотел представить себя и выразить свой интерес к вакансии [название вакансии]. Я имею [количество лет] опыта работы в сфере IT, и я уверен, что мои навыки и знания могут быть полезны для вашей компании.

Мой профиль включает в себя широкий спектр знаний и навыков, таких как [указать ключевые технологии и языки программиро- вания]. Я также имею опыт работы с [указать типы проектов или промышленности], а также знание [указать специализированные тех-
              </textarea>
              <div class="office__section1__letter-text-darker"></div>
            </div>-->
          <a href="#office__section1__advertisement-popup" class="office__section1__advertisement-popup-btn popup-link">Добавить объявление</a>

        </section>
      </main>

    <?php endif; ?>

    <!-- FOOTER -->
    <?php include("../include/footer.php"); ?>
    <!-- FOOTER -->

  </div>
  <!-- Форма для добавления объявлений -->
  <form method="post" action="office.php" enctype="multipart/form-data">
    <div id="office__section1__advertisement-popup" class="office__section1__advertisement-popup">
      <a href="#header" class="office__section1__advertisement-popup-area"></a>
      <div class="office__section1__advertisement">
        <div class="office__section1__advertisement__topside">
          <p class="office__section1__advertisement__topside-title">Добавить объявление</p>
          <a href="#header" class="office__section1__advertisement__topside-btn">X</a>
        </div>
        <div class="office__section1__advertisement-title">
          <p class="office__section1__advertisement-title-title">Заголовок</p>
          <textarea name="title" class="office__section1__advertisement-title-text"></textarea>
        </div>
        <div class="office__section1__advertisement-text">
          <p class="office__section1__advertisement-text-title">Текст вашего объявления</p>
          <textarea name="description" class="office__section1__advertisement-text-text"></textarea>
        </div>
        <div class="office__section1__advertisement-price">
          <p class="office__section1__advertisement-price-title">Cтоимость</p>
          <input name="price" type="text" class="office__section1__advertisement-price-text" />
        </div>
        <p class="office__section1__advertisement-image-title">Фотография</p>
        <label for="office__section1__advertisement__imagecontainer-input" class="office__section1__advertisement__imagecontainer" id="office-section1-advertisement-imagecontainer">
          <span class="office__section1__advertisement__imagecontainer-title">Прикрепите фотографию</span>
          <input name="image" type="file" id="office__section1__advertisement__imagecontainer-input" accept="image/*" required multiple>
        </label>
        <button class="office__section1__advertisement-btn" type="submit" name="button-adv">Выставить объявление</button>
      </div>
    </div>
  </form>
  <!-- Форма для добавления объявлений конец -->
  <!-- Форма редактирования -->
  <div id="office__edit-popup" class="office__edit-popup">
    <a href="#header" class="office__edit-popup-area"></a>
    <div class="office__edit">
      <div class="office__edit__topside">
        <p class="office__edit__topside-title">Редактирование</p>
        <a href="#header" class="office__edit__topside-btn">X</a>
      </div>
      <div class="signuplogin__forms">
        <div class="signuplogin__forms__form">
          <input name="username" class="signuplogin__forms__form-input" id="signup__surname-field" type="text" placeholder=" " required>
          <label for="signup__surname-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">ФИО</label>
        </div>
        <select name="gender" id="gender" class="signuplogin__forms__form__select">
          <option value="">Ваш пол</option>
          <option value="Мужской">Мужской</option>
          <option value="Женский">Женский</option>
        </select>
        <div class="signuplogin__forms__form">
          <!-- <span class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke" id="birthday-placeholder">Дата рождения</span> -->
          <input name="birthday" class="signuplogin__forms__form-input" id="signup__birthday-field" type="date" min="1900-01-01" max="2025-12-30" value="birthday" placeholder=" " required>
        </div>
        <select name="user_type" id="role" class="signuplogin__forms__form__select">
          <option value="">Роль</option>
          <option value="Самозанятый">Самозанятый</option>
          <option value="Заказчик">Заказчик</option>
        </select>

        <div class="signuplogin__forms__form delete">
          <input name="inn" class="signuplogin__forms__form-input" id="signup__inn-field" type="text" placeholder=" " required>
          <label for="signup__inn-field" class="signuplogin__form__placeholder signuplogin__form__placeholder-onestroke">ИНН</label>
        </div>
        <div class="delete">
          <select name="edu" id="edu" class="signuplogin__forms__form__select">
            <option value="">Образование</option>
            <option value="sred">Среднее специальное (СПО)</option>
            <option value="bakalavr">Бакалавриат</option>
            <option value="magistrat">Магистратура</option>
          </select>
        </div>
        <div class="delete">
          <select name="sfera" id="sfera" class="signuplogin__forms__form__select delete">
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
          </select>
        </div>
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
      </div>
      <p class="office__section1__advertisement-image-title office__edit__photo">Ваша фотография:</p>
        <label for="office__edit__photo-container-input" class="office__section1__advertisement__imagecontainer office__edit__photo-container" id="office-section1-advertisement-imagecontainer">
          <input name="image" type="file" id="office__edit__photo-container-input" accept="image/*" required>
        </label>
      <div class="office__edit__btnbox">
        <button class="office__edit__btnbox-send" type="submit">сохранить</button>
        <a href="#header" class="office__edit__btnbox-cancel">отмена</a>
      </div>
    </div>
  </div>
  <!-- Форма редактирования конец -->

</body>
<script src="../js/adPopup.js"></script>
<script src="../js/choices.min.js"></script>
<script src="../js/deleteInn.js"></script>
<script src="../js/app.js"></script>

</html>