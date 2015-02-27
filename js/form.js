(function ($) {
    $(document).on('click', '.has-clear .form-control-feedback', function () {
        $(this).prev().val('');
    });
})(jQuery);