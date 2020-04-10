<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Add or deduct VAT percentage value on a given amount.">
    <meta name="keywords" content="vat, calculator, vat calculator">
    <meta name="author" content="Blaž Oražem">

    <title>VAT Calculator - Calculate value of VAT based on given amount</title>

    <link rel="shortcut icon" href="data:image/png;base64,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">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="color-overlay"></div>

<div class="container">
    <header>
        <h1 class="font-weight-bold">VAT Calculator</h1>
        <p class="lead pt-2">Enter the amount, VAT percentage and decimal places.</p>
    </header>
</div>

<div id="vat" class="container">
    <div class="row justify-content-lg-center pt-2">
        <div class="col col-lg-2">
            <label for="inputAmount" class="control-label font-weight-bold">Amount (€)</label>
            <input type="text" class="form-control" id="inputAmount" v-model="amount">
        </div>
        <div class="col col-lg-2">
            <label for="inputVat" class="control-label font-weight-bold">VAT (%)</label>
            <input type="text" class="form-control" id="inputVat" v-model="vat">
        </div>
        <div class="col col-lg-2">
            <label for="inputDecimals" class="control-label font-weight-bold">Decimals</label>
            <input type="number" class="form-control" id="inputDecimals" v-model="decimals">
        </div>
    </div>
    <div class="row row-center justify-content-lg-center pt-4 toggle">
        <div class="btn-group btn-group-toggle">
            <label class="btn btn-success active" data-operation="1">
                <input type="radio" name="operation" autocomplete="off" value="1" v-model="operation" checked> Add VAT
            </label>
            <label class="btn btn-success" data-operation="0">
                <input type="radio" name="operation" autocomplete="off" value="0" v-model="operation"> Deduct VAT
            </label>
        </div>
    </div>
    <div class="row justify-content-lg-center pt-3">
        <div class="col col-lg-6">
            <hr>
        </div>
    </div>
    <div class="row justify-content-lg-center pt-3">
        <div class="col col-lg-6">
            <div class="form-group row">
                <label for="inputCalculatedVat" class="col-6 col-form-label text-right font-weight-bold">
                    VAT value
                </label>
                <div class="col-4">
                    <input type="text" class="form-control text-right" id="inputCalculatedVat" v-model="resultVat" readonly>
                </div>
                <label class="col-2 col-form-label font-weight-bold">€</label>
            </div>
            <div class="form-group row mb-3">
                <label for="inputCalculatedAmount" class="col-6 col-form-label text-right font-weight-bold">
                    Amount {{ state }} VAT
                </label>
                <div class="col-4">
                    <input type="text" class="form-control text-right" id="inputCalculatedAmount" v-model="resultAmount" readonly>
                </div>
                <label class="col-2 col-form-label font-weight-bold">€</label>
            </div>
        </div>
    </div>
    <div class="row justify-content-lg-center">
        <div class="col col-lg-6">
            <hr>
        </div>
    </div>
</div>

<footer>
    <p class="text-center">
        &copy; <a href="https://www.orazem.si" target="_blank">Orazem.si</a> <?= date('Y') ?>. All rights reserved.
    </p>
    <p class="text-center">
        <i class="github-icon"></i>
        <a href="https://github.com/BlazOrazem/vat-calculator" target="_blank">
            VAT Calculator on Github.
        </a>
    </p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>
