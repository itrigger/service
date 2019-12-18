<?php ?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="/wp-content/themes/service/assets/css/normalize.css">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="/wp-content/themes/service/assets/css/main.css">
</head>

<body <?php body_class(); ?>>

<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
  your browser</a> to improve your experience and security.</p>
<![endif]-->
<?php
wp_body_open();
?>

<header id="site-header" class="header-footer-group" role="banner">

  <div class="in">
    <div class="logo"></div>
    <div class="slogan"></div>
    <div class="right">
      <a href="#" class="btn btn-blue">Заказать звонок</a>
      <a href="#" class="btn">Коммерческое предложение</a>
    </div>
  </div>

  <div class="in">
    <div class="topmenu_w">
      <div class="menu">
        <ul>
          <li><a href="#">О нас</a></li>
          <li><a href="#">Услуги</a>
            <ul>
              <li><a href="#">Вложенный пункт 1</a></li>
              <li><a href="#">Вложенный пункт 2</a>
                <ul>
                  <li><a href="#">Вложенный сабпункт 1</a></li>
                  <li><a href="#">Вложенный сабпункт 2</a></li>
                  <li><a href="#">Вложенный сабпункт 3</a></li>
                </ul>
              </li>
              <li><a href="#">Вложенный пункт 3</a></li>
            </ul>
          </li>
          <li><a href="#">Команда</a></li>
          <li><a href="#">Кейсы</a></li>
          <li><a href="#">Документы</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </div>
      <div class="right">
        <div class="tel">+7 975 758 98 89</div>
      </div>
    </div>
  </div>
</header><!-- #site-header -->


<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
