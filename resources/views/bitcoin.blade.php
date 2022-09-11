<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FantasyCrypto - Bitcoin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,700&family=Ubuntu:ital,wght@1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    .google {
        font-family: 'Roboto', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

</style>

<body class="bg-gradient-to-r from-sky-800 to-purple-700 text-white">
    <div>
        <a href="/">
            <h1
                class="google text-4xl font-extrabold text-transparent bg-clip-text bg-white text-center mt-4 animate__animated animate__zoomIn">
                FantasyCrypto</h1>
        </a>
    </div>
    <div class="border-2 border-white rounded-md mt-10 mx-24 bg-gradient-to-r from-yellow-400 to-orange-400">
        <div
            class="flex justify-center content-center mt-4 border-4 border-black rounded-md mx-96 bg-gradient-to-r from-white to-gray-100">
            <a class="mt-4 " href="/bitcoin">
                <button type="button"
                    class="bg-gradient-to-br google from-yellow-500 to-yellow-400 hover:bg-red-700 py-2 px-4 text-xl font-medium text-white border border-transparent rounded-lg focus:outline-none">Bitcoin</button></a>
            <img class=" ml-2 mt-4 pb-3" width="50" height="100"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1024px-Bitcoin.svg.png"
                alt="">
        </div>
        <div class="flex justify-center justify-content">
            <div class="inline-block mt-20">
                <h1 class="inline text-3xl google">Le prix du bitcoin est actuellement : </h1>
                <h1 class="text-white google text-2xl inline">{{ round($cryptos->data->priceUsd, 2) }}$</h1>
            </div>
        </div>
        <div class="flex justify-center content-center mt-8"><a href="https://coinmarketcap.com/fr/currencies/bitcoin/">
                <img width="150" height="100"
                    src="https://1000logos.net/wp-content/uploads/2022/03/CoinMarketCap-logo.png" alt=""></a></div>
        <h1 class="text-center google text-lg pb-28">Consulter la page Bitcoin CoinMarketCap</h1>
    </div>
    <div class="pb-48"></div>

    </div>
</body>

</html>
