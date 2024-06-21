<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Shot Spotter | Home</title>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('schedule') }}">Schedule</a></li>
                <li><a href="https://wa.me/6285156144986" target="_blank">Contact</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </nav>
    </header>
</head>

<body>

    <h1>Shot Spotter</h1>

    <figure class="animation">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
        <dotlottie-player src="https://lottie.host/61ed29b4-075d-4ce4-969c-ee49c7a53bb5/6irEZlyBRe.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></dotlottie-player>
    </figure>

    <h3>Scroll down to reserve your table</h3>

    <h2>Choose your table</h2>

    <!-- baris pertama -->
    <div class="wadahBlockBar1">
        <button class="BlockBarReguler1 img-container">
            <img src="res\MejaReguler.jpg" alt="Regular 1">
            <div class="overlay"><i>Regular 1</i></div>
        </button>
        

        <button class="BlockBarReguler2 img-container">
            <img src="res\MejaReguler.jpg" alt="Regular 2">
            <div class="overlay"><i>Regular 2</i></div>
        </button>

        <button class="BlockBarReguler3 img-container">
            <img src="res\MejaReguler.jpg" alt="Regular 3">
            <div class="overlay"><i>Regular 3</i></div>
        </button>
    </div>

    <!-- Baris kedua -->
    <div class="wadahBlockBar2">
        <button class="BlockBarReguler4 img-container">
            <img src="res\MejaReguler.jpg" alt="Regular 4">
            <div class="overlay"><i>Regular 4</i></div>
        </button>

        <button class="BlockBarReguler5 img-container">
            <img src="res\MejaReguler.jpg" alt="Regular 5">
            <div class="overlay"><i>Regular 5</i></div>
        </button>

        <button class="BlockBarReguler6 img-container">
            <img src="res\MejaReguler.jpg" alt="Regular 6">
            <div class="overlay"><i>Regular 6</i></div>
        </button>
    </div>

    <!-- baris ketiga -->
    <div class="wadahBlockBar3">
        <button class="BlockBarVIP1 img-container">
            <img src="res\MejaVIP.jpg" alt="VIP 1">
            <div class="overlay"><i>VIP 1</i></div>
        </button>

        <button class="BlockBarVIP2 img-container">
            <img src="res\MejaVIP.jpg" alt="VIP 2">
            <div class="overlay"><i>VIP 2</i></div>
        </button>

        <button class="BlockBarVIP3 img-container">
            <img src="res\MejaVIP.jpg" alt="VIP 3">
            <div class="overlay"><i>VIP 3</i></div>
        </button>
    </div>

    <footer>
            <p>Shot Spotter, The Best Place to Reserve a Pool Table.</p>
    </footer>

</body>
</html>