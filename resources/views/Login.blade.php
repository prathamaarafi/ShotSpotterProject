<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign in | Sign up Page</title>
</head>
<body>
    <!-- jangan lupa add method di tag form pas implementasi -->
    <form action="#">
        <div class="login-container">      
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Enter Email" pattern=".+@gmail\.com" size="30" required><br>
    
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter Password" size="30" required><br>
            
            <input type="radio" id="User" name="role" value="User">
            <label for="User">User</label>
    
            <input type="radio" id="Admin" name="role" value="Admin">
            <label for="Admin">Admin</label>

            <div class="btn-container">
                <a class="btn-login" href="/Home">Login</a>
                <a class="btn-signup" href="/Home">Sign Up</a>
            </div>
        </div>
    </form>
    
</body>
</html>