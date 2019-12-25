<?php
/*
Template Name: Команда
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <h1>Команда</h1>

        <div class="content_wide entry-content">
          <?php

          if (have_posts()) {

            while (have_posts()) {
              the_post();

              get_template_part('template-parts/content', get_post_type());
            }
          }

          ?>



          <div class="pattern-block">
            <div class="pattern-block-in">
              <a href="/people">Все сотрудники</a> имеют высшее техническое образование в области транспорта и опыт работы
              в АО «ВНИИЖТ», ФБУ "РС ФЖТ", Департаменте технической политики (ЦТЕХ) ОАО "РЖД", Росжелдоре.
            </div>
          </div>

          <blockquote>Все сотрудники имеют высшее профессиональное образование и неоценимый опыт при реализации задач комплексной подготовки предприятий железнодорожного транспорта к ведению новой деятельности и приведению в соответствие действующих участков и процессов</blockquote>



        </div>

    </div>
  </div>


<?php
get_footer();




