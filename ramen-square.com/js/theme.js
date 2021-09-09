


/*トップへ戻るボタンを右下に固定*/
      $(function() {
          var topBtn = $('#page-top');
          topBtn.hide();
          //スクロールが100に達したらボタン表示
          $(window).scroll(function () {
              if ($(this).scrollTop() > 50) {
                  topBtn.fadeIn();
              } else {
                  topBtn.fadeOut();
              }
          });
          //スクロールしてトップ
          topBtn.click(function () {
              $('body,html').animate({
                  scrollTop: 0
              }, 500);
              return false;
          });
      });
    /*ヘッダーを上部に固定する*/
    (function($) {
        $(window).on('load resize', function(){
            // masthead scroll
            var header   = $('.main_menu_area'); // fixed DOM
            var addclass = 'scrolled'; // add css class
            var offset   = header.offset();
            var scrollY  = offset.top; // scroll

            $(window).scroll(function() {
            if ($(window).scrollTop() > scrollY) {
                header.addClass(addclass);
            } else {
                header.removeClass(addclass);
            }
        });
    })(jQuery);
})(jQuery)
