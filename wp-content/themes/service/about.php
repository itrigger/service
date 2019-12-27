<?php
/*
Template Name: О нас
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <h1>О нас</h1>

        <div class="content_wide entry-content">
          <?php

          if (have_posts()) {

            while (have_posts()) {
              the_post();

              get_template_part('template-parts/content', get_post_type());
            }
          }

          ?>


          <ol class="horizontal">
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
          </ol>


          <div class="pattern-block">
            <div class="pattern-block-in">
              <a href="/people">Все сотрудники</a> имеют высшее техническое образование в области транспорта и опыт работы
              в АО «ВНИИЖТ», ФБУ "РС ФЖТ", Департаменте технической политики (ЦТЕХ) ОАО "РЖД", Росжелдоре.
            </div>
          </div>

          <p>Знания нормативной базы в сочетании с солидным практическим опытом дают значительные результаты. Мы ценим
            каждого партнера и гордимся своим участием в процессе становления или модернизации предприятий.</p>

          <div class="benefits-block">
            <div class="in2">
              <div class="flex">
                <div class="flex2-3">
                  <div>
                    <div class="header">Преимущества работы с&nbsp;нами</div>
                  </div>
                </div>
                <div class="flex1-3 ico1">
                  <div>Команда профессионалов, заинтересованная в&nbsp;результате</div>
                </div>
                <div class="flex1-3 ico2">
                  <div>Консультирование по&nbsp;всем этапам работы</div>
                </div>
                <div class="flex1-3 ico3">
                  <div>База нормативной и&nbsp;технической документации</div>
                </div>
                <div class="flex1-3 ico4">
                  <div>Высокая скорость обработки заявки и&nbsp;получения результатов</div>
                </div>
                <div class="flex1-3 ico5">
                  <div>Оказание услуг по&nbsp;принципам «одного окна» <i class="tooltip maxonly" title="Специалисты компании оказывают услуги
по принципу «одного окна» и берут на себя
все необходимые согласования
с причастными структурами."></i></div>
                </div>
                <div class="flex-el">
                  <div class="flex-el-in">

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="center">
            <a data-fancybox data-src="#leave-req" href="javascript:;" class="btn btn-yellow">Оставить заявку</a>
          </div>



        </div>

    </div>
  </div>


<?php
get_footer();




