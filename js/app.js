$(document).ready(function() {
    $('.btn-group-toggle > label').click(function() {
        $('.btn-group-toggle > label').removeClass('active');
        $(this).addClass('active');
    });
});

new Vue({
    el: '#vat',

    data: {
        amount: '100',
        vat: '22',
        decimals: '2',
        operation: 1,
        state: 'with'
    },

    computed: {
        resultVat: function() {
            let amount = parseFloat(this.amount.replace(',','.'));
            let vat = parseFloat(this.vat.replace(',','.'));
            let price = 0;

            if (this.operation == 1) {
                this.state = 'with';
                price = amount * (vat / 100);
            }
            if (this.operation == 0) {
                this.state = 'excluding';
                price = amount - (amount * (100 / (100 + vat)));
            }

            return parseFloat(price).toFixed(this.decimals);
        },
        resultAmount: function() {
            let result = 0;

            if (this.operation == 1) {
                result = parseFloat(this.amount) + parseFloat(this.resultVat);
            }

            if (this.operation == 0) {
                result = parseFloat(this.amount) - parseFloat(this.resultVat);
            }

            return parseFloat(result).toFixed(this.decimals);
        }
    }
});
