<?php
/*
Template Name: Услуги
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <div class="flex_w_col">
        <div class="content_left">
          <div class="header">Услуги</div>
          <ul class="left-menu">
            <li>
              Присвоение условных номеров клеймения
              <div class="more_w"><a href="/prisvoenie-uslovnyh-nomerov-kleimenia/" class="more"><span>Подробнее</span></a></div>
            </li>
            <li>
              Аттестация цехов ремонтных предприятий
              <div class="more_w"><a href="/attestacia-cehov-remontnyh-predpriyatii/" class="more"><span>Подробнее</span></a></div>
            </li>
            <li>
              Сертификация железнодорожной продукции
              <div class="more_w"><a href="/sertifikacia-jd-produkcii/" class="more"><span>Подробнее</span></a></div>
            </li>
          </ul>

        </div>
        <div class="content_right">
          <?php

          if (have_posts()) {

            while (have_posts()) {
              the_post();

              get_template_part('template-parts/content', get_post_type());
            }
          }

          ?>

          <div class="benefits-block">
            <div class="in2">
              <div class="flex">
                <div class="flex1-2 nopadding">
                  <div>
                    <div class="header">Преимущества работы с&nbsp;нами</div>
                  </div>
                </div>
                <div class="flex1-2 ico1">
                  <div>Команда профессионалов, заинтересованная в&nbsp;результате</div>
                </div>
                <div class="flex1-2 ico2">
                  <div>Консультирование по&nbsp;всем этапам работы</div>
                </div>
                <div class="flex1-2 ico3">
                  <div>База нормативной и&nbsp;технической документации</div>
                </div>
                <div class="flex1-2 ico4">
                  <div>Высокая скорость обработки заявки и&nbsp;получения результатов</div>
                </div>
                <div class="flex1-2 ico5">
                  <div>Оказание услуг по&nbsp;принципам «одного окна» <i class="tooltip maxonly" title="Специалисты компании оказывают услуги
по принципу «одного окна» и берут на себя
все необходимые согласования
с причастными структурами."></i></div>
                </div>
                <div class="flex1-2 ico6">
                  <div>Опыт проведения
                    сертификации с 2014 года
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="center">
            <a href="#" class="btn btn-yellow">Коммерческое предложение</a>
          </div>
          <div class="mt75"></div>

          <div class="pattern-block">
            <div class="pattern-block-in">
              <div class="header">Получите консультацию</div>
              <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="77" title="Получить консультацию 2"]'); ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


<?php
get_footer();




