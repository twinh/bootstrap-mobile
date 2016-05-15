(function ($) {
    var oldShow = $.fn.modal.Constructor.prototype.show;
    $.fn.modal.Constructor.prototype.show = function () {
        oldShow.call(this, arguments);
        if (this.$element.hasClass('modal-bottom')) {
            var height = this.$element.find('.modal-header').outerHeight() + this.$element.find('.modal-footer').outerHeight() - 1;
            this.$element.find('.modal-body').css('max-height', $(window).height() - height);
        }
    };
})(jQuery);