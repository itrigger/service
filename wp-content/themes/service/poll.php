<?php
/*
Template Name: Анкета
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <h1>Анкета</h1>

        <div class="content_wide entry-content">
          <div class="form">
          <?php

          if (have_posts()) {

            while (have_posts()) {
              the_post();

              get_template_part('template-parts/content', get_post_type());
            }
          }

          ?>
          </div>
        </div>

    </div>
  </div>


<?php
get_footer();




