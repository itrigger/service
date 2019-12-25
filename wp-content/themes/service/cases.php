<?php
/*
 * Template Name: Запись - кейс
 * Template Post Type: post
 */

get_header(); ?>

  <div class="content">
    <div class="in">
      <div class="flex_w_col">
        <div class="content_left">
          <div class="header"><?php echo get_field('title_head'); ?></div>

          <?php echo get_field('title_desc'); ?>

        </div>
        <div class="content_right">
          <?php
          if (have_posts()) { while (have_posts()) { the_post(); get_template_part('template-parts/content', get_post_type()); } } ?>


          <div class="pattern-block">
            <div class="pattern-block-in">
              <div class="flex-common-wrap">
                <div class="flex-c-w-2-3">
                  <div class="result_l">
                    <div class="result_text">Результат:</div>
                    <?php echo get_field('result_left'); ?>
                  </div>
                </div>
                <div class="flex-c-w-1-3">
                  <div class="result_r">
                    <div class="num"> <?php echo get_field('result_right_kleimo'); ?>
                      <span>Присвоенное клеймо</span></div>
                    <div class="date"><?php echo get_field('result_right_kleimo_dates'); ?>8</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="review_block">
            <div class="review_head">Отзыв</div>
            <blockquote>
              <?php echo get_field('review'); ?>
            </blockquote>
            <div class="review_original">Оригинал отзыва
              <div class="more_w"><a class="more" href="<?php echo get_field('original_link'); ?>" target="_blank" rel="noopener noreferrer">Смотреть</a></div>
            </div>
          </div>






        </div>
      </div>
    </div>
  </div>


<?php
get_footer();




