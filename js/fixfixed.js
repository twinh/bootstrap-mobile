(function ($) {
    // http://stackoverflow.com/questions/9038625/detect-if-device-is-ios
    var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    if (!iOS) {
        return;
    }

    var $root = $('html, body');
    $(document)
        .on('focus', 'input', function (e) {
            $root.addClass('fixfixed');
        })
        .on('blur', 'input', function (e) {
            $root.removeClass('fixfixed');
        });
})(jQuery);