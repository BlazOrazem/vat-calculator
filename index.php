<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta name="description" content="Calculate VAT value based on your amount. You can add or subtract VAT."/>
    <meta name="keywords" content="vat, calculator">
    <meta name="author" content="Blaž Oražem">

    <title>VAT Calculator</title>

    <link rel="shortcut icon" href="data:image/png;base64,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">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-switch.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="color-overlay"></div>

<div class="container">
    <header>
        <h1>VAT Calculator</h1>
        <p class="lead">Enter the amount, VAT percentage and decimal places.</p>
    </header>
    <div id="vat" class="row">
        <div class="col col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
            <form class="form-horizontal">
                <div class="form-group">
                    <div class="col col-xs-4">
                        <label for="inputAmount" class="control-label">Amount (€)</label>
                        <input type="text" class="form-control deviate-top" id="inputAmount" v-model="amount" value="100">
                    </div>
                    <div class="col col-xs-4">
                        <label for="inputVat" class="control-label">VAT (%)</label>
                        <input type="text" class="form-control deviate-top" id="inputVat" v-model="vat" value="22">
                    </div>
                    <div class="col col-xs-4">
                        <label for="inputVat" class="control-label">Decimals</label>
                        <input type="text" class="form-control deviate-top" id="inputVat" v-model="round" value="2">
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="btn-group deviate-top operation">
                        <button type="button" data-switch-set="size" data-switch-value="add" data-operation="add" class="btn btn-default active">Add VAT</button>
                        <button type="button" data-switch-set="size" data-switch-value="subtract" data-operation="subtract" class="btn btn-default">Subtract VAT</button>
                    </div>
                    <div class="btn-group hidden">
                        <input type="radio" name="operation" v-model="operation" class="operation" value="add" checked>
                        <input type="radio" name="operation" v-model="operation" class="operation" value="subtract">
                    </div>
                    <div class="col-xs-12 deviate-top"><hr></div>
                </div>
                <div class="form-group results">
                    <label for="inputComputedVat" class="control-label col-md-6 col-sm-6 col-xs-12">VAT Value</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input type="text" class="form-control text-right" id="inputComputedVat" v-model="resultVat">
                    </div>
                    <label class="control-label text-left col-md-2 col-sm-2 col-xs-2">€</label>
                </div>
                <div class="form-group results">
                    <label for="inputComputedAmount" class="control-label col-md-6 col-sm-6 col-xs-12">Amount With VAT {{ state }}</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <input type="text" class="form-control text-right" id="inputComputedAmount" v-model="resultAmount">
                    </div>
                    <label class="control-label text-left col-md-2 col-sm-2 col-xs-2">€</label>
                </div>
                <div class="col-xs-12"><hr></div>
            </form>
        </div>
    </div>
    <footer>
        <p class="text-center">&copy; <a href="http://www.webarea.eu" target="_blank">Webarea.eu</a> 2016. All right reserved.</p>
    </footer>
</div>

<script src="js/vue.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/app.js"></script>

<script>
    new Vue({
        el: '#vat',

        data: {
            amount: '',
            vat: '',
            round: '',
            operation: '',
            resultVat: '',
            resultAmount: '',
            state: 'Added'
        },

        computed: {
            resultVat: function() {
                var amount = parseFloat(this.amount.replace(',','.'));
                var vat = parseFloat(this.vat.replace(',','.'));
                var price = 0;

                if (this.operation == 'add') {
                    this.state = 'Added';
                    price = amount * (vat / 100);
                }
                if (this.operation == 'subtract') {
                    this.state = 'Subtracted';
                    price = amount - (amount * (100 / (100 + vat)));
                }

                return parseFloat(price).toFixed(this.round);
            },
            resultAmount: function() {
                var result = 0;

                if (this.operation == 'add') {
                    result = parseFloat(this.amount) + parseFloat(this.resultVat);
                }
                if (this.operation == 'subtract') {
                    result = parseFloat(this.amount) - parseFloat(this.resultVat);
                }

                return parseFloat(result).toFixed(this.round);
            }
        }
    });
</script>

</body>
</html>