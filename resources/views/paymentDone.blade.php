<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>
    <div class="bg">

        <div class="card">

            <span class="card__success">
                <div>
                    <?xml version="1.0"?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;margin-top: 20px;" xml:space="preserve" width="60px"
                        height="60px" class="">
                        <g>
                            <polygon
                                points="202.624,478.016 0,291.36 70.512,214.8 191.968,326.656 431.44,33.984 512,99.904 "
                                data-original="#0BA4E0" class="active-path" data-old_color="#0BA4E0" fill="#FFFFFF" />
                        </g>
                    </svg>
                </div>
            </span>

            <h1 class="card__msg">Payment Complete</h1>
            <h2 class="card__submsg">Thank you for your transfer</h2>

            <div class="card__body">

                <img src="images/teamBingo.png" class="card__avatar">
                <div class="card__recipient-info">
                    <p class="card__recipient">Bingo Team</p>
                    <p class="card__email">bingo.team@gmail.com</p>
                </div>

                <p class="card__method">Payment method</p>
                <div class="card__payment">
                    <div class="card__card-details">
                        <a href="/" class="btn-view-orders" style=" margin-top: 30px;">Continue Shopping</a>
                    </div>
                </div>
            </div>
            <div class="card__tags">
                <span class="card__tag">completed</span>
                <span class="card__tag">#123456789</span>
            </div>

        </div>

    </div>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>

</html>

<style>
    .btn-view-orders {
        display: block;
        border: 1px solid #47c7c5;
        width: 160px;
        height: 30px;
        margin-top: 20px;
        padding-top: 15px;
        margin: auto auto;
        margin-top: 45px;
        padding: 10px;
        color: #fff;
        background-color: #47c7c5;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .bg {
        background-color: #6c7bee;
        width: 480px;
        overflow: hidden;
        margin: 0 auto;
        box-sizing: border-box;
        padding: 40px;
        font-family: 'Roboto';
        margin-top: 40px;
    }

    .card {
        background-color: #fff;
        width: 100%;
        float: left;
        margin-top: 40px;
        border-radius: 5px;
        box-sizing: border-box;
        padding: 80px 30px 25px 30px;
        text-align: center;
        position: relative;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .card__success {
        position: absolute;
        top: -50px;
        left: 145px;
        width: 100px;
        height: 100px;
        border-radius: 100%;
        background-color: #60c878;
        border: 5px solid #fff;
    }

    .card__success i {
        color: #fff;
        line-height: 100px;
        font-size: 45px;
    }

    .card__msg {
        text-transform: uppercase;
        color: #55585b;
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .card__submsg {
        color: #959a9e;
        font-size: 16px;
        font-weight: 400;
        margin-top: 0px;
    }

    .card__body {
        background-color: #f8f6f6;
        border-radius: 4px;
        width: 100%;
        margin-top: 30px;
        float: left;
        box-sizing: border-box;
        padding: 30px;
    }

    .card__avatar {
        width: 50px;
        height: 50px;
        border-radius: 100%;
        display: inline-block;
        margin-right: 10px;
        position: relative;
        top: 7px;
    }

    .card__recipient-info {
        display: inline-block;
    }

    .card__recipient {
        color: #232528;
        text-align: left;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .card__email {
        color: #838890;
        text-align: left;
        margin-top: 0px;
    }

    .card__price {
        color: #232528;
        font-size: 70px;
        margin-top: 25px;
        margin-bottom: 30px;
    }

    .card__price span {
        font-size: 60%;
    }

    .card__method {
        color: #d3cece;
        text-transform: uppercase;
        text-align: left;
        font-size: 11px;
        margin-bottom: 5px;
    }

    .card__payment {
        background-color: #fff;
        border-radius: 4px;
        width: 100%;
        height: 100px;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card__credit-card {
        width: 50px;
        display: inline-block;
        margin-right: 15px;
    }

    .card__card-details {
        display: inline-block;
        text-align: left;
    }

    .card__card-type {
        text-transform: uppercase;
        color: #232528;
        font-weight: 600;
        font-size: 12px;
        margin-bottom: 3px;
    }

    .card__card-number {
        color: #838890;
        font-size: 12px;
        margin-top: 0px;
    }

    .card__tags {
        clear: both;
        padding-top: 15px;
    }

    .card__tag {
        text-transform: uppercase;
        background-color: #f8f6f6;
        box-sizing: border-box;
        padding: 3px 5px;
        border-radius: 3px;
        font-size: 10px;
        color: #d3cece;
    }
</style>
