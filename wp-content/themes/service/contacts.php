<?php
/*
Template Name: Контакты
*/
get_header(); ?>

  <div class="content">
    <div class="in">
      <h1>Контакты</h1>

       <div class="content_wide">
         <div class="contact-block">
             <div class="line flex">
               <div class="b1">Москва, Маслова пр-т, д. 46, оф. 6</div>
               <div class="b2"><a href="mailto:info@rk-company.ru">info@rk-company.ru</a></div>
               <div class="b3">+7 975 758 98 89<span class="spacer"></span>+7 913 678 45 98</div>
               <div class="b4">
                 <ul class="social-links">
                   <li><a href="#" class="ico-vk"></a></li>
                   <li><a href="#" class="ico-fb"></a></li>
                   <li><a href="#" class="ico-wu"></a></li>
                   <li><a href="#" class="ico-tg"></a></li>
                 </ul>
               </div>
             </div>

           <div class="map">
             <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af1381e2cb3858b023e074cef51bacc13016003f77326471f72a39a70011fd006&amp;source=constructor" width="100%" height="555" frameborder="0"></iframe>
             <div class="in">
               <div class="form">
                 <div class="header">У вас есть вопросы?</div>
                 <?php echo do_shortcode('[contact-form-7 id="71" title="Получить консультацию"]'); ?>
               </div>
             </div>
           </div>
         </div>
       </div>

    </div>
  </div>


<?php
get_footer();




