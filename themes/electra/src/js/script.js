(function ($, Drupal) {
  const $win = $(window);
  // set header color based on theme settings
  Drupal.behaviors.headerBGCOLOR = {
    attach: function (context, settings) { // eslint-disable-line no-unused-vars, object-shorthand
      const $el = $('.top-header');
      if ($el.hasClass('standard') || $('nav').hasClass('header-left') || ($el.hasClass('overlay') && $win.width() < 992)) {
        $el.css('background', $el.data('bgcolor'));
      }
    },
  };

  // convert hex color codes to rgba
  function hexToRgbA(hex, opacity) {
    hex = hex.replace('#', '');
    const r = parseInt(hex.substring(0, 2), 16);
    const g = parseInt(hex.substring(2, 4), 16);
    const b = parseInt(hex.substring(4, 6), 16);

    const result = 'rgba(' + r + ',' + g + ',' + b + ',' + (opacity / 100) + ')';
    return result;
  }

  // set fixed header based on theme setting sticky header
  if (!$('nav').hasClass('header-left')) {
    $win.on('load scroll', function () {
      const $el = $('.top-header');
      if ($win.width() >= 992) {
        const scroll = $win.scrollTop();
        if ($el.data('fixed')) {
          if (scroll) {
            $el.addClass('header-fixed');
            $el.css('background', hexToRgbA($el.data('bgcolor'), 90));
            // if theme setting sticky header resize enable
            if ($el.data('resize')) {
              $el.addClass('header-resize');
            }
          }
          else {
            $el.removeClass('header-fixed header-resize');
            if ($el.hasClass('overlay')) {
              $el.css('background', '');
            }
          }
        }
      }
    });
  }

  // Show submenu while click on multi dropdown links
  $('.dropdown-menu a.dropdown-item').on('click', function () {
    // If submenu available preventing href path navigation
    const $subMenu = $(this).next('.dropdown-menu');
    const $parentli = $(this).parent('li');
    if ($subMenu.length > 0) {
      $parentli.toggleClass('show');
      $subMenu.toggleClass('show');
      return false;
    }
  });

  // Tablet/Mobile: onClick toggle caret icon & to show sub-menu.
  if ($win.width() < 992) {
    $('.dropdown .dropdown-toggle + .fa').on('click', function () {
      if ($(this).hasClass('fa-caret-down')) {
        $(this).addClass('fa-caret-up').removeClass('fa-caret-down');
      }
      else {
        $(this).addClass('fa-caret-down').removeClass('fa-caret-up');
      }
      $(this).next('.dropdown-menu').toggleClass('open');
    });
  }

  // Parent menu item link make clickable if it's having href.
  $('.dropdown .dropdown-toggle').on('click', function () {
    const location = $(this).attr('href');
    window.location.href = location;
    return false;
  });
}(jQuery, Drupal, document));
