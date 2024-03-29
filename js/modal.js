/* global jQuery */
(function ($) {
  // 解决iOS底部弹窗后可以继续往下滚动的问题
  // https://github.com/twbs/bootstrap/issues/14839
  var scrollTop = 0;
  var $doc = $(document);
  var $root = $('html, body');
  var $body = $('body');
  $doc.on('show.bs.modal', '.modal-bottom', function () {
    scrollTop = $body.scrollTop();
    $root.addClass('modal-fixfixed');
  });

  $doc.on('hide.bs.modal', '.modal-bottom', function () {
    $root.removeClass('modal-fixfixed');
    $body.scrollTop(scrollTop);
  });
})(jQuery);
