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
              <div class="flex-common-wrap flex-flow-wrap flex-justify-sb">
                <div class="flex-c-w-1-6">
                  <div class="header">Крачков Константин Александрович</div>
                  Руководитель проекта
                </div>
                <div class="flex-c-w-1-6">
                  <div class="header">Давыденко
                    Михаил
                    Петрович</div>
                  Руководитель
                  отдела
                  сертификацион-
                  ных испытаний,
                  к.т.н.
                </div>
                <div class="flex-c-w-1-6">
                  <div class="header">Крылова
                    Светлана
                    Олеговна </div>
                  Специалист
                  по взаимодей-
                  ствию
                  с Регистром
                  сертификации
                  на железно-
                  дорожном
                  транспорте
                </div>
                <div class="flex-c-w-1-6">
                  <div class="header">Миронова
                    Виктория
                    Борисовна </div>
                  Советник
                  по работе
                  с Федеральным
                  агентством
                  железнодорож-
                  ного
                  транспорта
                </div>
                <div class="flex-c-w-1-6">
                  <div class="header">Котов
                    Олег
                    Сергеевич </div>
                  Руководитель
                  отдела
                  внедрения
                  новых
                  технических
                  средств
                  и технологий
                  в инфраструк-
                  туру
                </div>
                <div class="flex-c-w-1-6">
                  <div class="header">
                    Сафонов
                    Станислав
                    Эдуардович
                  </div>
                  Методическое
                  руководство
                  в вопросах
                  лицензирования,
                  сертификации
                  и стандартизации
                </div>
              </div>
            </div>
          </div>

          <p>Все сотрудники имеют высшее профессиональное образование и неоценимый опыт при реализации задач комплексной подготовки предприятий железнодорожного транспорта к ведению новой деятельности и приведению в соответствие действующих участков и процессов</p>



        </div>

    </div>
  </div>


<?php
get_footer();




