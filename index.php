<?php include("db/db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Я.САМ</title>
  <link rel="stylesheet" href="css/fonts.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="wrapper">

    <!-- HEADER -->
    <?php include("include/header.php"); ?>
    <!-- HEADER -->

    <main class="_container main__container">
      <div class="main__main-image"></div>
      <section class="main__section1">
        <div class="main__section1__left">
          <p class="main__section__left-text1">Платформа для</p>
          <div class="main__section__left-text2">
            <span class="main__section__left-text2-back"></span>
            <p class="main__section__left-text2-text">занятых студентов</p>
          </div>
          <p class="main__section__left-text3">На платформе возможно осуществить про&shy;верку самозанятого в базе. Мы предоставля&shy;ем постоянный доступ к обучающему мате&shy;риалу, наш call-центр готов ответить на любой вопрос</p>
          <div class="main__section__left__btns">
            <a href="#" class="main__section__left__btns-zak">Ищу заказчика</a>
            <a href="#" class="main__section__left__btns-spec">Ищу специалиста</a>
          </div>
        </div>
        <div class="main__section1__right"></div>
      </section>
      <section class="main__section2">
        <p class="main__section2-text1">Только начали своё дело и не знаете, как собрать клиентскую базу?</p>
        <p class="main__section2-text2">Оформите самозанятость, зарегистрируйтесь<br>в "Я.САМ" и начните получать первые заказы</p>
        <div class="main__section2-img"></div>
        <a href="#" class="main__section2-btn">Хочу стать специалистом</a>
      </section>
      <section class="main__section3">
        <p class="main__section3-text">Популярные услуги на платформе</p>
        <div class="main__section3__lvl0">
          <div class="main__section3__lvl1">
            <div class="main__section3__lvl2-tall">
              <div class="main__section3__lvl__pic bluesquare">
                <div id="main-remont"></div>
              </div>
              <p class="main__section3__lvl-text1">Ремонт</p>
              <p class="main__section3__lvl-text2">Ремонт - это процесс восстановле&shy;ния или улучшения состояния че&shy;го-либо, включая здания, машины или электронику</p>
            </div>
            <div class="main__section3__lvl2-short">
              <div class="main__section3__lvl__pic greensquare">
                <div id="main-design"></div>
              </div>
              <p class="main__section3__lvl-text1">Дизайн</p>
              <p class="main__section3__lvl-text2">Креативный дизайн, который захва&shy;тывает взгляд и вдохновляет на новые идеи</p>
            </div>
          </div>
          <div class="main__section3__lvl1">
            <div class="main__section3__lvl2-short">
              <div class="main__section3__lvl__pic greensquare">
                <div id="main-conditer"></div>
              </div>
              <p class="main__section3__lvl-text1">Кондитерские услуги</p>
              <p class="main__section3__lvl-text2">От классических тортов до ориги&shy;нальных десертов - мы готовы пора&shy;довать даже самый взыскательный вкус</p>
            </div>
            <div class="main__section3__lvl2-tall">
              <div class="main__section3__lvl__pic bluesquare" id="tallersquare">
                <div id="main-education"></div>
              </div>
              <p class="main__section3__lvl-text1">Образование</p>
              <p class="main__section3__lvl-text2">Уроки проходят индивидуально и адаптируются под ваш уровень и по&shy;требности</p>
            </div>
          </div>
          <div class="main__section3__lvl1">
            <div class="main__section3__lvl2-tall">
              <div class="main__section3__lvl__pic greensquare">
                <div id="main-beauty"></div>
              </div>
              <p class="main__section3__lvl-text1">Красота</p>
              <p class="main__section3__lvl-text2">Красота - это не просто внешний облик, но и внутреннее состояние души, которое отражается на лице</p>
            </div>
            <div class="main__section3__lvl2-short">
              <div class="main__section3__lvl__pic bluesquare">
                <div id="main-househelp"></div>
              </div>
              <p class="main__section3__lvl-text1">Помощь на дому</p>
              <p class="main__section3__lvl-text2">Вы можете проводить время с семьей, заниматься своими любимы&shy;ми хобби, работать или учиться, а наши специалисты помогут по дому</p>
            </div>
          </div>
        </div>
      </section>
      <section class="main__section4">
        <div class="main__section4__left">
          <p class="main__section4__left-text">Частые вопросы</p>
          <form action="" class="main__section4__left__search">
            <input type="text" placeholder="Найти ответ">
            <button type="submit">
              <img src="images/search-icon.svg" alt="">
            </button>
          </form>
          <div class="main__section4__left__btnsbox">
            <div class="main__section4__left__btnsbox__btns">
              <a href="#" class="main__section4__left__btnsbox__btns-btn" id="main__section4__left__btnsbox__btns-btn-blubtn">Что такое НПД и как стать самозанятым</a>
            </div>
            <div class="main__section4__left__btnsbox__btns">
              <a href="#" class="main__section4__left__btnsbox__btns-btn">Договоры с самозанятыми</a>
              <a href="#" class="main__section4__left__btnsbox__btns-btn">С чего начать работу</a>
            </div>
            <div class="main__section4__left__btnsbox__btns">
              <a href="#" class="main__section4__left__btnsbox__btns-btn">Что может и не может самозанятый</a>
            </div>
            <div class="main__section4__left__btnsbox__btns">
              <a href="#" class="main__section4__left__btnsbox__btns-btn">Бонусы для самозанятых</a>
              <a href="#" class="main__section4__left__btnsbox__btns-btn">ИП на НПД</a>
            </div>
            <div class="main__section4__left__btnsbox__btns">
              <a href="#" class="main__section4__left__btnsbox__btns-btn">О ставке налога, правилах исчисления и уплаты</a>
            </div>
            <div class="main__section4__left__btnsbox__btns">
              <a href="#" class="main__section4__left__btnsbox__btns-btn">Ответственность и штрафы</a>
            </div>
          </div>
        </div>
        <div class="main__section4__right"></div>
      </section>
      <section class="main__section5">
        <p class="main__section5-text">Команда стартап проекта</p>
        <div class="main__section5__team">
          <div class="main__section5__team__member">
            <div class="main__section5__team__member-img" style="background-image: url('images/nastya.png');"></div>
            <p class="main__section5__team__member-text1">Анастасия Гут</p>
            <p class="main__section5__team__member-text2">Основатель проекта<br>Контент - менеджер</p>
          </div>
          <div class="main__section5__team__member">
            <div class="main__section5__team__member-img" style="background-image: url('images/katya.png');"></div>
            <p class="main__section5__team__member-text1">Екатерина Гарькова</p>
            <p class="main__section5__team__member-text2">Основатель проекта<br>Контент - менеджер</p>
          </div>
          <div class="main__section5__team__member">
            <div class="main__section5__team__member-img" style="background-image: url('images/dasha.png');"></div>
            <p class="main__section5__team__member-text1">Дарья Григорьева</p>
            <p class="main__section5__team__member-text2">Главный разработчик</p>
          </div>
          <div class="main__section5__team__member">
            <div class="main__section5__team__member-img" style="background-image: url('images/radmir.png');"></div>
            <p class="main__section5__team__member-text1">Радмир Юмагулов</p>
            <p class="main__section5__team__member-text2">Frontend - разработчик</p>
          </div>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <?php include("include/footer.php"); ?>
    <!-- FOOTER -->

  </div>
  <script src="js/app.js"></script>
</body>

</html>