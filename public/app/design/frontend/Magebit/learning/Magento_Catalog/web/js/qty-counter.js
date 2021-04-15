'use strict';

define([
    'ko',
    'uiComponent'
], function (ko, Element) {
    return Element.extend({
        defaults: {
            template: 'Magento_Catalog/input-counter'
        },


        initialize: function (config) {
            this._super();
            this.qty = ko.observable(config.qty);
            this.maxQuantity = config.stockLeft;
            this.qty.subscribe(function(value) {
                if (parseInt(value) < 1){
                    this.qty(1);
                } else if (parseInt(value) > this.maxQuantity){
                    this.qty(this.maxQuantity)
                }
            }.bind(this));
        },

        decreaseQty: function () {
            var qty;
            if (this.qty() > 1) {
                qty = this.qty() - 1;
            } else {
                qty = 1;
            }
            this.qty(qty);
        },

        increaseQty: function () {
            if (this.qty() >= this.maxQuantity) {
                return;
            }
            this.qty(parseInt(this.qty()) + 1);
        }
    });
});

