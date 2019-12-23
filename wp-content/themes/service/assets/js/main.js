jQuery(document).ready(function($) {
  jQuery('.stellarnav').stellarNav({
    theme: 'light',
    breakpoint: 920,
    position: 'right',
  });
});

jQuery('.tooltip').tooltipster({
  arrow: false,
  side: 'bottom',
  maxWidth: 400,
  theme: 'tooltipster-shadow'
});
