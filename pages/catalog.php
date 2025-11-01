<?php
//include ("../controllers/users.php");
include("../controllers/advert.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Я.САМ | Каталог</title>
  <link rel="stylesheet" href="../css/fonts.css" />
  <link rel="stylesheet" href="../css/nouislider.min.css" />
  <link rel="stylesheet" href="../css/choices.min.css" />
  <link rel="stylesheet" href="../css/swiper-bundle.min.css">
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <div class="wrapper">

    <!-- HEADER -->
    <?php include("../include/header.php"); ?>
    <!-- HEADER -->

    <main class="_container catalog__container">
      <section class="catalog__section1">
        <button class="catalog__section1__btn">каталог</button>
        <form action="" class="catalog__section1__search">
          <input type="text" placeholder="Найдите лучшее для себя">
          <button type="submit">
            <img src="../images/search-icon.svg" alt="">
          </button>
        </form>
      </section>
      <section class="catalog__section2">
        <aside class="catalog__section2__filter">
          <p class="catalog__section2__filter__title">Фильтр вакансий</p>
          <div class="catalog__section2__filter__filters">
            <ul class="catalog__section2__filter__filters__lvl1">
              <li class="catalog__section2__filter__filters__lvl1-item">
                <a href="#">
                  <div class="opener catalog__section2__filter__filters__lvl1-itemarrow"></div>
                  Все категории
                </a>
                <ul class="opened catalog__section2__filter__filters__lvl2">
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#" class="opener">
                      <div class="down catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      График работы
                    </a>
                    <ul class="catalog__section2__filter__filters__lvl3 opened">
                      <li class="catalog__section2__filter__filters__lvl3-item">
                        <a href="#">Гибкий график</a>
                      </li>
                      <li class="catalog__section2__filter__filters__lvl3-item">
                        <a href="#">Полный день</a>
                      </li>
                      <li class="catalog__section2__filter__filters__lvl3-item">
                        <a href="#">Частичная занятость</a>
                      </li>
                      <li class="catalog__section2__filter__filters__lvl3-item">
                        <a href="#">Вахтовый метод</a>
                      </li>
                    </ul>
                  </li>
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#">
                      <div class="catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      Опыт работы
                    </a>
                  </li>
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#">
                      <div class="catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      Услуги
                    </a>
                  </li>
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#">
                      <div class="catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      Образование
                    </a>
                  </li>
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#" class="opener">
                      <div class="down catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      Гражданство
                    </a>
                    <ul class="opened catalog__section2__filter__filters__lvl3">
                      <li class="catalog__section2__filter__filters__lvl3-item">
                        <a href="#">РФ</a>
                      </li>
                      <li class="catalog__section2__filter__filters__lvl3-item">
                        <a href="#">Иное</a>
                      </li>
                      <li class="catalog__section2__filter__filters__lvl3-item">
                        <a href="#">Двойное</a>
                      </li>
                    </ul>
                  </li>
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#" class="opener">
                      <div class="down catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      Возраст специалиста
                    </a>
                    <div id="slider" class="opened catalog__section2__filter__filters__lvl2-item__range"></div>

                    <!--
                      <div class="catalog__section2__filter__filters__lvl2-item__range">
                        <div class="catalog__section2__filter__filters__lvl2-item__rangeslider">
                          <div class="catalog__section2__filter__filters__lvl2-item__rangeslider-progress"></div>
                        </div>
                        <div class="catalog__section2__filter__filters__lvl2-item__rangeinput">
                          <input type="range" class="catalog__section2__filter__filters__lvl2-item__rangeinput-min" min="0" max="99" value="18">
                          <input type="range" class="catalog__section2__filter__filters__lvl2-item__rangeinput-max" min="0" max="99" value="99">
                        </div>
                      </div>
                    -->
                  </li>
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#">
                      <div class="catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      Пол
                    </a>
                  </li>
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#" class="opener">
                      <div class="down catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      Сфера деятельности
                    </a>
                    <select name="sfera" id="sfera" class="opened catalog__section2__filter__filters__lvl3-choices">
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
                      <option value="12">Прочее</option>
                      <option value="13">Развлечения</option>
                      <option value="14">Ремонт</option>
                      <option value="15">Сделай сам</option>
                      <option value="16">Спорт</option>
                      <option value="17">Торговля самостоятльно произведённыйм товаром</option>
                      <option value="18">Финансы</option>
                      <option value="19">Фото, видео, печать</option>
                      <option value="20">Юристы</option>
                    </select>
                  </li>
                  <li class="catalog__section2__filter__filters__lvl2-item">
                    <a href="#" class="opener">
                      <div class="down catalog__section2__filter__filters__lvl2-itemarrow"></div>
                      Зарплата
                    </a>
                    <div class="catalog__section2__filter__filters__lvl2-item__price">
                      <label for="min" class="catalog__section2__filter__filters__lvl2-item__price-span">От</label>
                      <input type="text" id="min">
                      <label for="max" class="catalog__section2__filter__filters__lvl2-item__price-span" id="price-span-last">До</label>
                      <input type="text" id="max">
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </aside>
        <div class="catalog__section2__adds">
          <p class="catalog__section2__adds__title">Часто просматриваемые вакансии</p>
          <div class="catalog__section2__adds__addcontainer">


            <?php

            $allAdverts = selectAll('advert');
            $_SESSION['allAdverts'] = [];

            $allAdvertsReversed = array_reverse($allAdverts);
            foreach ($allAdvertsReversed as $advert) {
              $_SESSION['allAdverts'][] = [
                'id' => $advert['id'],
                'title' => $advert['title'],
                'description' => $advert['description'],
                'price' => $advert['price'],
                'image' => $advert['image']
              ];


              echo '<div class="catalog__section2__adds__addcontainer__addcart">';
              echo '<div class="catalog__section2__adds__addcontainer__addcart__leftpart">';
              echo '<div class="swiper catalog__section2__adds__addcontainer__addcart__leftpart__img">';
              echo '<div class="swiper-wrapper">';
              echo '<div class="swiper-slide"><img src="../otherImages/users_adverts/' . $advert['image'] . '" alt="" srcset=""></div>';
              echo '<div class="swiper-slide">Slide 2</div>';
              echo '<div class="swiper-slide">Slide 3</div>';
              echo '</div>';
              echo '<div class="swiper-pagination"></div>';
              echo '<div class="swiper-button-prev"></div>';
              echo '<div class="swiper-button-next"></div>';
              echo '</div>';
              echo '<div class="catalog__section2__adds__addcontainer__addcart__leftpart__texts">';
              echo '<p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__title">' . $advert['title'] . '</p>';
              echo '<p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__text">' . $advert['description'] . '</p>';
              echo '</div>';
              echo '</div>';
              echo '<div class="catalog__section2__adds__addcontainer__addcart__rightpart">';
              echo '<p class="catalog__section2__adds__addcontainer__addcart__rightpart__price">' . $advert['price'] . '</p>';
              echo '<a href="#catalog__appeal-popup" class="catalog__section2__adds__addcontainer__addcart__rightpart__btn">обратиться</a>';
              echo '</div>';
              echo '</div>';




              /*echo '<div class="catalog__section2__adds__addcontainer__addcart">';
                echo '<div class="catalog__section2__adds__addcontainer__addcart__leftpart">';
                echo '<div class="catalog__section2__adds__addcontainer__addcart__leftpart__img" style="background-image: url(\'../images/catalog-img1.png\')"></div>';
                echo '<div class="catalog__section2__adds__addcontainer__addcart__leftpart__texts">';
                echo '<p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__title">Кухонный гарнитур на заказ</p>';
                echo '<p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__text">Собственное производство. Сделаем замеры кухни, цвета фасадов на ваш выбор. Работаем без посредников - самое выгодное предложение на рынке. Найдете дешевле - сделаем скидку! Дизайн проект бесплатный. Срок изготовления 20-30 дней. Как нас найти? ул. Индустриальная 46 стр. 1</p>';
                echo '</div>';
                echo '</div>';
                echo '<div class="catalog__section2__adds__addcontainer__addcart__rightpart">';
                echo '<p class="catalog__section2__adds__addcontainer__addcart__rightpart__price">От 80000 р.</p>';
                echo '<a href="" class="catalog__section2__adds__addcontainer__addcart__rightpart__btn">обратиться</a>';
                echo '</div>';
                echo '</div>';*/
            }
            ?>

            <div class="catalog__section2__adds__addcontainer__addcart">
              <div class="catalog__section2__adds__addcontainer__addcart__leftpart">
                <div class="swiper catalog__section2__adds__addcontainer__addcart__leftpart__img">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="../images/catalog-img1.png" alt="" srcset=""></div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
                <div class="catalog__section2__adds__addcontainer__addcart__leftpart__texts">
                  <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__title">Кухонный гарнитур на заказ</p>
                  <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__text">Собственное производство. Сделаем замеры кухни, цвета фасадов на ваш выбор. Работаем без посредников - самое выгодное предложение на рынке. Найдете дешевле - сделаем скидку! Дизайн проект бесплатный. Срок изготовления 20-30 дней. Как нас найти? ул. Индустриальная 46 стр. 1</p>
                </div>
              </div>
              <div class="catalog__section2__adds__addcontainer__addcart__rightpart">
                <p class="catalog__section2__adds__addcontainer__addcart__rightpart__price">От 80000 р.</p>
                <a href="#catalog__appeal-popup" class="catalog__section2__adds__addcontainer__addcart__rightpart__btn">обратиться</a>
              </div>
            </div>
            <div class="catalog__section2__adds__addcontainer__addcart">
              <div class="catalog__section2__adds__addcontainer__addcart__leftpart">
                <div class="swiper catalog__section2__adds__addcontainer__addcart__leftpart__img">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="../images/catalog-img2.png" alt="" srcset=""></div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
                <div class="catalog__section2__adds__addcontainer__addcart__leftpart__texts">
                  <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__title">Ремонтные работы</p>
                  <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__text">Ремонт квартир, офисов, частных домов. Ремонт любой сложности. В сроки! Оплата поэтапно. Мы бригада из 6 человек. Частные мастера по ремонту. Здравствуйте меня зовут Джонибек, мы бригада из 6 человек. Частные мастера по ремонту. Опыт работы более 10 лет, выполнено уже более 100 объектов.</p>
                </div>
              </div>
              <div class="catalog__section2__adds__addcontainer__addcart__rightpart">
                <p class="catalog__section2__adds__addcontainer__addcart__rightpart__price">1500 р.<br>за услугу</p>
                <a href="#catalog__appeal-popup" class="catalog__section2__adds__addcontainer__addcart__rightpart__btn">обратиться</a>
              </div>
            </div>
            <div class="catalog__section2__adds__addcontainer__addcart">
              <div class="catalog__section2__adds__addcontainer__addcart__leftpart">
                <div class="swiper catalog__section2__adds__addcontainer__addcart__leftpart__img">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="../images/catalog-img3.png" alt="" srcset=""></div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
                <div class="catalog__section2__adds__addcontainer__addcart__leftpart__texts">
                  <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__title">Личный водитель</p>
                  <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__text">Водитель категории В. Стаж 5 лет. График работы - полный день.</p>
                </div>
              </div>
              <div class="catalog__section2__adds__addcontainer__addcart__rightpart">
                <p class="catalog__section2__adds__addcontainer__addcart__rightpart__price">100000 р.</p>
                <a href="#catalog__appeal-popup" class="catalog__section2__adds__addcontainer__addcart__rightpart__btn">обратиться</a>
              </div>
            </div>
            <div class="catalog__section2__adds__addcontainer__addcart">
              <div class="catalog__section2__adds__addcontainer__addcart__leftpart">
                <div class="swiper catalog__section2__adds__addcontainer__addcart__leftpart__img">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="../images/catalog-img4.png" alt="" srcset=""></div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
                <div class="catalog__section2__adds__addcontainer__addcart__leftpart__texts">
                  <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__title">Графический дизайнер</p>
                  <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__text">Предлагаю услуги по дизайну. Создам уникальный дизайн для вашего проекта. Свяжитесь со мной для получения более подробной информации.</p>
                </div>
              </div>
              <div class="catalog__section2__adds__addcontainer__addcart__rightpart">
                <p class="catalog__section2__adds__addcontainer__addcart__rightpart__price">Сдельная</p>
                <a href="#catalog__appeal-popup" class="catalog__section2__adds__addcontainer__addcart__rightpart__btn">обратиться</a>
              </div>
            </div><!--
              <div class="catalog__section2__adds__addcontainer__addcart">
                <div class="catalog__section2__adds__addcontainer__addcart__leftpart">
                  <div class="catalog__section2__adds__addcontainer__addcart__leftpart__img"></div>
                  <div class="catalog__section2__adds__addcontainer__addcart__leftpart__texts">
                    <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__title">Пример 1</p>
                    <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__text">Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 Пример1 </p>
                  </div>
                </div>
                <div class="catalog__section2__adds__addcontainer__addcart__rightpart">
                  <p class="catalog__section2__adds__addcontainer__addcart__rightpart__price">20500 р.</p>
                  <a href="" class="catalog__section2__adds__addcontainer__addcart__rightpart__btn">обратиться</a>
                </div>
              </div>
              <div class="catalog__section2__adds__addcontainer__addcart">
                <div class="catalog__section2__adds__addcontainer__addcart__leftpart">
                  <div class="catalog__section2__adds__addcontainer__addcart__leftpart__img"></div>
                  <div class="catalog__section2__adds__addcontainer__addcart__leftpart__texts">
                    <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__title">Пример 2</p>
                    <p class="catalog__section2__adds__addcontainer__addcart__leftpart__texts__text">Пример2 Пример2 Пример2 Пример2 Пример2 Пример2 Пример2 Пример2 Пример2 Пример2 Пример2 Пример2 Пример2 </p>
                  </div>
                </div>
                <div class="catalog__section2__adds__addcontainer__addcart__rightpart">
                  <p class="catalog__section2__adds__addcontainer__addcart__rightpart__price">800 р.</p>
                  <a href="" class="catalog__section2__adds__addcontainer__addcart__rightpart__btn">обратиться</a>
                </div>
              </div>
              -->
          </div>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <?php include("../include/footer.php"); ?>
    <!-- FOOTER -->

  </div>
  <!-- Форма обращения -->
  <div id="catalog__appeal-popup" class="catalog__appeal-popup">
    <a href="#header" class="catalog__appeal-popup-area"></a>
    <div class="catalog__appeal">
      <div class="catalog__appeal__topside">
        <p class="catalog__appeal__topside-title">Здесь будет заголовок объявления</p>
        <a href="#header" class="catalog__appeal__topside-btn">X</a>
      </div>
      <div class="catalog__appeal__message">
        <p class="catalog__appeal__message-title">Ваш комментарий:</p>
        <textarea name="message" class="catalog__appeal__message-text"></textarea>
      </div>
      <div class="catalog__appeal__downside">
        <div class="catalog__appeal__downside__namepart">
          <p class="catalog__appeal__downside-title">Ваше имя:</p>
          <input type="text" class="catalog__appeal__downside-input">
        </div>
        <div class="catalog__appeal__downside__connectpart">
          <p class="catalog__appeal__downside-title">Телефон/эл. почта:</p>
          <input type="text" class="catalog__appeal__downside-input">
        </div>
      </div>
      <div class="catalog__appeal__btnbox">
        <button class="catalog__appeal__btnbox-send" type="submit">отправить</button>
        <a href="#header" class="catalog__appeal__btnbox-cancel">отмена</a>
      </div>
    </div>
  </div>
  <!-- Форма обращения конец -->
  <script src="../js/wNumb.min.js"></script>
  <script src="../js/nouislider.min.js"></script>
  <script src="../js/choices.min.js"></script>
  <script src="../js/swiper-bundle.min.js"></script>
  <script src="../js/app.js"></script>
</body>

</html>