<?php
/*
Template Name: Документы
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <h1>Документы</h1>

        <div class="content_wide entry-content">
          <?php

          if (have_posts()) {

            while (have_posts()) {
              the_post();

              get_template_part('template-parts/content', get_post_type());
            }
          }

          ?>


          <div class="flex-common-wrap flex-flow-wrap docs">
            <div class="flex-c-w-1-3 cell1 bordered">
              <header class="ico-pdf">Регламент Федерального агентства железнодорожного Транспорта</header>
              <p>Утвержден приказом Минтранса России от 24 января 2018 г. N 28</p>
              <a href="/docs/doc6.pdf" target="_blank" class="btn">Скачать</a>
            </div>
            <div class="flex-c-w-1-3 cell2 bordered">
              <header class="ico-pdf">Приказ МИНТРАНСА «Об организации работы по осуществлению пономерного учета железнодорожного подвижного состава, контейнеров, эксплуатируемых на путях общего пользования»</header>
              <p>Утвержден приказом Минтранса России от 25 июля 2012 г. N 266</p>
              <a href="/docs/doc3.docx" target="_blank" class="btn">Скачать</a>
            </div>
            <div class="flex-c-w-1-3 cell3 bordered">
              <header class="ico-pdf">Правила приписки железнодорожного подвижного состава</header>
              <p>Утверждены приказом Минтранса России от 28 марта 2006 г. N 35</p>
              <a href="/docs/doc4.doc" target="_blank" class="btn">Скачать</a>
            </div>
            <div class="flex-c-w-1-3 cell4">
              <header class="ico-pdf">Правила учета собственных вагонов</header>
              <p>Утверждены Советом по железнодорожному транспорту 01.09.2001 г.</p>
              <a href="/docs/doc5.doc" target="_blank" class="btn">Скачать</a>
            </div>
            <div class="flex-c-w-1-3 cell5" >
              <header class="ico-pdf">Учет специального подвижного состава</header>
              <p>Утверждены 17 августа 2010 г.</p>
              <a href="/docs/doc8.doc" target="_blank" class="btn">Скачать</a>
            </div>
            <div class="flex-c-w-1-3 cell6" >
              <header class="ico-pdf">Учет специального подвижного состава</header>
              <p>Утверждены 17 августа 2010 г.</p>
              <a href="/docs/doc8.doc" target="_blank" class="btn">Скачать</a>
            </div>
          </div>


        </div>

    </div>
  </div>


<?php
get_footer();




