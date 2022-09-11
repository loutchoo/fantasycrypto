<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,700&family=Ubuntu:ital,wght@1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>FantasyCrypto</title>
</head>
<style>
    .google {
        font-family: 'Roboto', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }

</style>

<body class="bg-gradient-to-r from-sky-800 to-purple-700 animate__animated">
    <div>
        <a href="/">
            <h1
                class="google text-4xl font-extrabold text-transparent bg-clip-text bg-white text-center mt-4 animate__animated animate__zoomIn">
                FantasyCrypto</h1>
        </a>
    </div>
    <div>
        <h1 class="google text-5xl text-white text-center mt-40">Une analyse des
            cryptomonaies à la pointe.</h1>
        <h1 class="text-2xl text-center mt-2 google text-transparent bg-clip-text bg-white">
            Restez au courant des derniers changements.</h1>
    </div>
    <div class="flex content-center justify-center mt-8">
        <div>
            <a href="/bitcoin">
                <div>

                    <button type="button"
                        class="bg-gradient-to-br google from-yellow-500 to-yellow-400 hover:bg-red-700 py-2 px-4 text-xl font-medium text-white border border-transparent rounded-lg focus:outline-none">Bitcoin</button>

            </a>
            <img class="mt-2 ml-6" width="50" height="100"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1024px-Bitcoin.svg.png"
                alt="">
        </div>
    </div>
    <div>
        <a href="/solana">
            <button type="button"
                class="bg-black google py-2 px-4 text-xl font-medium text-white border border-transparent rounded-lg focus:outline-none ml-20">Solona</button>
        </a>
        <div class="ml-2">
            <img class="mt-2 ml-24" width="50" height="100"
                src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Solana_logo.png" alt="">
        </div>
    </div>
    </div>
</body>

</html>
