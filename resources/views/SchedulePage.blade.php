<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Shot Spotter | Schedule</title>

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

    <div class="datetime-container">
        <div class="date_time">
            <div class="date" id="date"></div>
            <div class="time" id="time"></div>
        </div>
    </div>

    <div class="schedule-container">
        <div class="schedule1">
            <h4>Regular 1</h4>
            <p>Available:</p>
        </div>
        <div class="schedule2">
            <h4>Regular 2</h4>
            <p>Available:</p>
        </div>
        <div class="schedule3">
            <h4>Regular 3</h4>
            <p>Available:</p>
        </div>
        <div class="schedule4">
            <h4>Regular 4</h4>
            <p>Available:</p>
        </div>
        <div class="schedule5">
            <h4>Regular 5</h4>
            <p>Available:</p>
        </div>
        <div class="schedule6">
            <h4>Regular 6</h4>
            <p>Available:</p>
        </div>
        <div class="schedule7">
            <h4>VIP 1</h4>
            <p>Available:</p>
        </div>
        <div class="schedule8">
            <h4>VIP 2</h4>
            <p>Available:</p>
        </div>
        <div class="schedule9">
            <h4>VIP 3</h4>
            <p>Available:</p>
        </div>
    </div>

    <footer>
        <p>Shot Spotter, The Best Place to Reserve a Pool Table.</p>
</footer>
</body>
</html>