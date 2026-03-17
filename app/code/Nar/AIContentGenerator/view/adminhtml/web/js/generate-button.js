define([
    'uiComponent',
    'jquery'
], function (Component, $) {
    'use strict';

    return Component.extend({
        initialize: function () {
            this._super();
        },

        initObservable: function () {
            this._super();

            setTimeout(() => {
                let button = $('<button>', {
                    text: 'Generate with AI',
                    class: 'action-default'
                });

                button.on('click', function () {
                    alert('Custom button clicked!');
                    // You can add logic here (AJAX, auto-generate meta title, etc.)
                });

                $('[name="product[meta_title]"]').closest('.admin__field-control').append(button);
            }, 1000);

            return this;
        }
    });
});
