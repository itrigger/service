<?php
/*
Template Name: Все кейсы
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <h1>Кейсы</h1>

        <div class="content_wide entry-content">



          <?php
          $args = array( 'category' => 2, 'post_type' =>  'post' );
          $catPost = get_posts($args); //change this
          foreach ($catPost as $post) : setup_postdata($post); ?>
            <div class="case_w">
             <?php the_title(); ?>
              <div class="more_w"><a href="<?php the_permalink(); ?>" class="more"><span>Подробнее</span></a></div>
            </div>
          <?php  endforeach;?>


        </div>

    </div>
  </div>


<?php
get_footer();




