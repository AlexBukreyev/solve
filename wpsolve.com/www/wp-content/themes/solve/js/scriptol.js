(function ($) {

    $.fn.accordion = function (options) {

        var settings = $.extend({
            'wrap_item_class': 'faqs-item',
            'wrap_click_class': 'open-btn',
            'active_class': 'active',
        }, options);

        var btn = this.find('.' + settings.wrap_click_class);

        btn.click(function (e) {

            e.preventDefault();
            $(this).parents('.' + settings.wrap_item_class).toggleClass(settings.active_class);
        });

    };

    $(document).ready(function () {
        $("#faqs").accordion();
    });


})(jQuery);










