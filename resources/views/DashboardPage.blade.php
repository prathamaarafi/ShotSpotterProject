<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Shot Spotter | Dashboard</title>

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

    <div class="data-container">

        <div class="data">
            <h4>Data</h4><br>
            <p>Username</p>
            <p>example@gmail.com</p>
            <p>08123456789</p>
            <button class="btn-logout">Logout</button>
        </div>

        <div class="status">
            <h4>Order Status</h4><br>  
            <p>You have booked table XX at 00.00</p>
        </div>
    </div>
    
</body>
</html>