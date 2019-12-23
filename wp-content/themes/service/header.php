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
<div class="body_wrapper">

<header id="site-header" class="header-footer-group" role="banner">

  <div class="in">
    <div class="pull-left">
      <a href="/" class="logo pull-left"></a>
      <div class="slogan pull-left">Специалист в области железнодорожного транспорта</div>
    </div>
    <div class="pull-right btn-group">
      <a href="#" class="btn btn-blue">Заказать звонок</a>
      <a href="#" class="btn btn-2-line">Коммерческое предложение</a>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="in">
    <div class="topmenu_w">
      <div class="pull-left">
        <div class="stellarnav">
          <ul>
            <li><a href="#">О нас</a></li>
            <li><a href="/service">Услуги</a>
              <ul>
                <li><a href="#">Присвоение условных номеров клеймения</a></li>
                <li class="active"><a href="#">Аттестация цехов ремонтных предприятий</a>
                  <ul>
                    <li><a href="#">Аттестация тележечных отделений</a></li>
                    <li><a href="#">Аттестация колесно-роликовых участков</a></li>
                    <li class="active"><a href="#">Аттестация контрольных пунктов автотормозов и автоматных отделений</a></li>
                    <li><a href="#">Аттестация участков неразрущающего контроля</a></li>
                  </ul>
                </li>
                <li><a href="#">Сертификация железнодорожной продукции</a></li>
              </ul>
            </li>
            <li><a href="#">Команда</a></li>
            <li><a href="#">Кейсы</a></li>
            <li><a href="#">Документы</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
      </div>
      <div class="pull-right">
        <div class="tel">+7 975 758 98 89</div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</header><!-- #site-header -->


<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
