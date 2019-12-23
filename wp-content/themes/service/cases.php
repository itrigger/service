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

          if (have_posts()) {

            while (have_posts()) {
              the_post();

              get_template_part('template-parts/content', get_post_type());
            }
          }

          ?>


          <div class="pattern-block">
            <div class="pattern-block-in">
                <div class="flex-common-wrap">
                  <div class="flex-c-w-2-3">
                    Результат:

                    Реализована инвестиционная программа по открытию производства текущего ремонта грузовых вагонов.

                    Сокращены:
                    - затраты на ремонт собственных вагонов на 36%.
                    - сроки окупаемости вложенных средств за счет
                    ремонта вагонов сторонних собственников.
                    - сроки простоя вагонов в текущем ремонте.
                    - сроки подачи неисправных вагонов под погрузку.
                    - непредвиденные отцепки вагонов в груженом
                    состоянии при следовании под выгрузку, в связи
                    с внедрением контроля качества проведения
                    ремонтов.


                  </div>
                  <div class="flex-c-w-1-3">
                    4302
                  </div>
                </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


<?php
get_footer();




