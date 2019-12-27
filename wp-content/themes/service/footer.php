<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
</div>
<footer id="site-footer" role="contentinfo" class="header-footer-group">

  <div class="line1">
    <div class="in">
      <div class="flex">
        <div class="b1">
          <ul class="foot-menu">
            <li><a href="/about">О нас</a></li>
            <li><a href="/prisvoenie-uslovnyh-nomerov-kleimenia">Услуги</a></li>
            <li><a href="/people/">Команда</a></li>
            <li><a href="/category/cases/">Кейсы</a></li>
            <li><a href="/docs/">Документы</a></li>
            <li><a href="/contacts/">Контакты</a></li>
          </ul>
        </div>
        <div class="b2">+7 495 369 38 77</div>
        <div class="b3">
          <a data-fancybox data-src="#callmeback" href="javascript:;" class="btn btn-grey">Заказать звонок</a>
        </div>
        <div class="b4">
          <ul class="social-links">
            <li><a href="#" class="ico-vk"></a></li>
            <li><a href="#" class="ico-fb"></a></li>
            <li><a href="#" class="ico-wu"></a></li>
            <li><a href="#" class="ico-tg"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="line2">
    <div class="in">
      <div class="flex">
        <div class="copy">© <?php echo date('Y'); ?> ООО «Ремонтная компания». Все права защищены.</div>
        <div class="developer"><a href="http://masshtab.kz" target="_blank"><span>Разработка сайта</span> </a></div>
      </div>
    </div>
  </div>

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

<script src="/wp-content/themes/service/assets/js/vendor/modernizr-3.7.1.min.js"></script>
<script>window.jQuery || document.write('<script src="/wp-content/themes/service/assets/js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
<script src="/wp-content/themes/service/assets/js/plugins.js"></script>
<script src="/wp-content/themes/service/assets/js/vendor/stellarnav.min.js"></script>
<script src="/wp-content/themes/service/assets/js/vendor/tooltipster.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="/wp-content/themes/service/assets/js/main.js"></script>

<div style="display: none;" id="hidden-content">
  <div class="form">
    <div class="header">Получить консультацию</div>
    <?php echo do_shortcode('[contact-form-7 id="71" title="Получить консультацию"]'); ?>
  </div>
</div>
<div style="display: none;" id="leave-req">
  <div class="form">
    <div class="header">Оставить заявку</div>
    <?php echo do_shortcode('[contact-form-7 id="73" title="Оставить заявку"]'); ?>
  </div>
</div>
<div style="display: none;" id="callmeback">
  <div class="form">
    <div class="header">Заказать звонок</div>
    <?php echo do_shortcode('[contact-form-7 id="72" title="Заказать звонок"]'); ?>
  </div>
</div>
<div style="display: none;" id="poll">
  <div class="form">
    <div class="header">Анкета</div>
    <?php echo do_shortcode('[contact-form-7 id="74" title="Анкета"]'); ?>
  </div>
</div>

</body>
</html>
