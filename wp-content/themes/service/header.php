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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>

<body <?php body_class(); ?>>

<!--[if IE]>
<p class="browserupgrade">Вы используете <strong>старую</strong> версию браузера. Пожалуйста, <a href="https://browsehappy.com/">обновите Ваш браузер</a> для правильного отображения сайта.</p>
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
      <a data-fancybox data-src="#callmeback" href="javascript:;" class="btn btn-blue">Заказать звонок</a>
      <a href="#" class="btn btn-2-line">Коммерческое предложение</a>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="in">
    <div class="topmenu_w">
      <div class="pull-left">
        <div class="stellarnav">
          <ul>
            <li><a href="/about/">О нас</a></li>
            <li><a href="/prisvoenie-uslovnyh-nomerov-kleimenia">Услуги</a>
              <ul>
                <li><a href="/prisvoenie-uslovnyh-nomerov-kleimenia">Присвоение условных номеров клеймения</a></li>
                <li class="active"><a href="/attestacia-cehov-remontnyh-predpriyatii">Аттестация цехов ремонтных предприятий</a>
                  <ul>
                    <li><a href="/attestacia-telejechnyh-otdelenii">Аттестация тележечных отделений</a></li>
                    <li><a href="/attestacia-kolesno-rolikovyh-uchastkov">Аттестация колесно-роликовых участков</a></li>
                    <li class="active"><a href="/attestacia-kontrolnyh-punktov-avtotormozov">Аттестация контрольных пунктов автотормозов и автоматных отделений</a></li>
                    <li><a href="/attestacia-uchastkov-nerazrushauschego-kontrolya">Аттестация участков неразрущающего контроля</a></li>
                  </ul>
                </li>
                <li><a href="/sertifikacia-jd-produkcii">Сертификация железнодорожной продукции</a></li>
              </ul>
            </li>
            <li><a href="/people/">Команда</a></li>
            <li><a href="/category/cases/">Кейсы</a></li>
            <li><a href="/docs/">Документы</a></li>
            <li><a href="/contacts/">Контакты</a></li>
          </ul>
        </div>
      </div>
      <div class="pull-right">
        <div class="tel">+7 495 369 38 77</div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</header><!-- #site-header -->


<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
