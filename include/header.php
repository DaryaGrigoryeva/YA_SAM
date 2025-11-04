<header class="_container header__container">
        <div id="headerMenu" class="header__menu-btn__nav">
          <!-- <a href="#" class="header__menu-btn__nav-link">заказчикам</a>
          <a href="#" class="header__menu-btn__nav-link">самозанятым</a> -->
          <a href="../pages/catalog.php" class="header__menu-btn__nav-link">объявления</a>
          <a href="../pages/infoblock.php" class="header__menu-btn__nav-link">инфоблок</a>
          <a href="#" class="header__menu-btn__nav-link">партнеры</a>
          <a href="#" class="header__menu-btn__nav-link">часто задаваемые вопросы</a>
          <a href="#" class="header__menu-btn__nav-link">связаться с нами</a>
          <a href="#" class="header__menu-btn__nav-link">блог - журнал</a>
        </div>
        <div class="header__menu-btn">
          <button onclick="showHeaderMenu()" class="header__menu-btn-burger">
            <span class="burger__stick"></span>
            <span class="burger__stick"></span>
            <span class="burger__stick"></span>
          </button>
          <a href="../index.php" class="header__menu-btn-logo">я.сам</a>
        </div>
        <div class="header__nav">
          <a href="#" class="header__nav-item">вакансии</a>
          <a href="#" class="header__nav-item">компании</a>
          <a href="#" class="header__nav-item">наши идеи</a>
          <a href="#" class="header__nav-item">студентам</a>
        </div>
        <div class="header__btns">

          <?php if (isset($_SESSION['id'])): ?>
            <!-- Надо стилизовать  -->
            <?php $fio = $_SESSION['username'];
                  $neededName = explode(" ", $fio);
            ?>
            <!-- <a href="../pages/office.php" class="header__btns-signup"><?php echo $_SESSION['username']; ?></a> -->
            <a href="../pages/office.php" class="header__btns-signup"><?php echo $neededName[1]; ?>
            <a href="<?php echo "../controllers/logout.php"; ?>" class="header__btns-login">выйти</a>

          <?php else: ?>

            <a href="../pages/login.php" class="header__btns-login">войти</a>
            <a href="../pages/signup.php" class="header__btns-signup">регистрация</a>

          <?php endif; ?>

        </div>
      </header>