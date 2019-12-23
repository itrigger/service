<?php
/*
Template Name: Услуги
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <div class="content_left">
        <h1>Услуги</h1>
        <ul>
          <li>
            Присвоение условных номеров клеймения
            <div class="more_w"><a href="#" class="more"><span>Подробнее</span></a></div>
          </li>
          <li>
            Аттестация цехов ремонтных предприятий
            <div class="more_w"><a href="#" class="more"><span>Подробнее</span></a></div>
          </li>
          <li>
            Сертификация железнодорожной продукции
            <div class="more_w"><a href="#" class="more"><span>Подробнее</span></a></div>
          </li>
        </ul>
      </div>
      <div class="content_right">
        <?php

        if ( have_posts() ) {

          while ( have_posts() ) {
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );
          }
        }

        ?>
      </div>
    </div>
  </div>


<?php
get_footer();




