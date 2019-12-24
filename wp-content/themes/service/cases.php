<?php
/*
Template Name: Кейсы
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <div class="flex_w_col">
        <div class="content_left">
          <div class="header">ПАО «Химпром»</div>

          <p>Производство продукции
            крупнотоннажной химии</p>

          <p>г. Новочебоксарск
            Чувашская Республика</p>

          <p>Новочебоксарск
            Горьковская ж.д.</p>

          <p>www.himprom.com</p>

        </div>
        <div class="content_right">
          <?php
          if (have_posts()) { while (have_posts()) { the_post(); get_template_part('template-parts/content', get_post_type()); } } ?>
        </div>
      </div>
    </div>
  </div>


<?php
get_footer();




