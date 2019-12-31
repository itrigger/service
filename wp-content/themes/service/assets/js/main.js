jQuery(document).ready(function($) {
  jQuery('.stellarnav').stellarNav({
    theme: 'light',
    breakpoint: 920,
    position: 'right',
  });

  var counterNext = 2;
  var counterPrev = 3;

  jQuery('.cases-block .more_w.next a').on('click', function (e) {
    e.preventDefault();
    if (counterNext === 2) {
      jQuery('.cases-block .title').html("<div class=\"header\">ООО «ЖД ПРОФИ»</div>\n" +
        "Деятельность: ремонт и формирование колесных пар грузовых вагонов Дислокация: г. Омск");
      jQuery('.cases-block .pull-right').html("Спроектировать и запустить вагонно-колесную мастерскую для капитального ремонта и формирования колесных пар");
      jQuery('.cases-block .btn-yellow').attr('href', "/ооо-жд-профи/");
      counterNext = 3;
      counterPrev = 1;
    } else if (counterNext === 3){
      jQuery('.cases-block .title').html("<div class=\"header\">ПАО «Химпром»</div> Производство продукции крупнотоннажной химии г. Новочебоксарск Чувашская Республика");
      jQuery('.cases-block .pull-right').html("В ходе реализации инвестиционной программы, стояла задача на территории ПАО «Химпром» в оптимально короткие сроки открыть пункт текущего ремонта собственных и сторонних грузовых вагонов, прибывающих под погрузку.");
      jQuery('.cases-block .btn-yellow').attr('href', "/открытие-пункта-текущего-ремонта-соб/");
      counterNext = 4;
      counterPrev = 2;
    } else if (counterNext === 4){
      jQuery('.cases-block .title').html("<div class=\"header\">ООО \"НТРК\"</div> Деятельность: техническое обслуживание, капитальный ремонт и модернизация тепловозов Дислокация: г. Нижний Новгород");
      jQuery('.cases-block .pull-right').html("Открыть пункт ремонта локомотивов серии ТГМ и ТЭМ в объеме ТО-3, ТР-1, ТР-2, ТР-3");
      jQuery('.cases-block .btn-yellow').attr('href', "/открытие-пункта-ремонта-локомотивов/");
      counterNext = 1;
      counterPrev = 3;
    } else if (counterNext === 1){
      jQuery('.cases-block .title').html("<div class=\"header\">ООО «ВРК «СИБИРЬ»</div> Деятельность: комплексный ремонт грузовых вагонов и колесных пар. Дислокация: г. Новосибирск.");
      jQuery('.cases-block .pull-right').html("Создать пункт текущего отцепочного ремонта грузовых вагонов с нуля на площадке Топкинского цементного завода.");
      jQuery('.cases-block .btn-yellow').attr('href', "/создание-пункта-текущего-отцепочног/");
      counterNext = 2;
      counterPrev = 4;
    }
  })
  jQuery('.cases-block .more_w.prev a').on('click', function (e) {
    e.preventDefault();
    if (counterPrev === 2) {
      jQuery('.cases-block .title').html("<div class=\"header\">ООО «ЖД ПРОФИ»</div>\n" +
        "Деятельность: ремонт и формирование колесных пар грузовых вагонов Дислокация: г. Омск");
      jQuery('.cases-block .pull-right').html("Спроектировать и запустить вагонно-колесную мастерскую для капитального ремонта и формирования колесных пар");
      jQuery('.cases-block .btn-yellow').attr('href', "/ооо-жд-профи/");
      counterNext = 3;
      counterPrev = 1;
    } else if (counterPrev === 3){
      jQuery('.cases-block .title').html("<div class=\"header\">ПАО «Химпром»</div> Производство продукции крупнотоннажной химии г. Новочебоксарск Чувашская Республика");
      jQuery('.cases-block .pull-right').html("В ходе реализации инвестиционной программы, стояла задача на территории ПАО «Химпром» в оптимально короткие сроки открыть пункт текущего ремонта собственных и сторонних грузовых вагонов, прибывающих под погрузку.");
      jQuery('.cases-block .btn-yellow').attr('href', "/открытие-пункта-текущего-ремонта-соб/");
      counterNext = 4;
      counterPrev = 2;
    } else if (counterPrev === 4){
      jQuery('.cases-block .title').html("<div class=\"header\">ООО \"НТРК\"</div> Деятельность: техническое обслуживание, капитальный ремонт и модернизация тепловозов Дислокация: г. Нижний Новгород");
      jQuery('.cases-block .pull-right').html("Открыть пункт ремонта локомотивов серии ТГМ и ТЭМ в объеме ТО-3, ТР-1, ТР-2, ТР-3");
      jQuery('.cases-block .btn-yellow').attr('href', "/открытие-пункта-ремонта-локомотивов/");
      counterNext = 1;
      counterPrev = 3;
    } else if (counterPrev === 1){
      jQuery('.cases-block .title').html("<div class=\"header\">ООО «ВРК «СИБИРЬ»</div> Деятельность: комплексный ремонт грузовых вагонов и колесных пар. Дислокация: г. Новосибирск.");
      jQuery('.cases-block .pull-right').html("Создать пункт текущего отцепочного ремонта грузовых вагонов с нуля на площадке Топкинского цементного завода.");
      jQuery('.cases-block .btn-yellow').attr('href', "/создание-пункта-текущего-отцепочног/");
      counterNext = 2;
      counterPrev = 4;
    }
  })


  active_menu();

});

function active_menu() {
  var url = window.location.href;
  jQuery('.topmenu_w a').filter(function() {
    return this.href == url;
  }).parents("li").addClass('active');
  var active = jQuery('.topmenu_w .stellarnav>ul>li.has-sub>ul>li.active>a').attr('href');
  console.log(active);
  jQuery('.left-menu li').each(function () {
    console.log(jQuery(this).find('a').attr('href'));
    if(jQuery(this).find('a').attr('href') == active){
      jQuery(this).addClass('active');
    }
  })
}

jQuery('.tooltip').tooltipster({
  arrow: false,
  side: 'bottom',
  maxWidth: 400,
  theme: 'tooltipster-shadow'
});

