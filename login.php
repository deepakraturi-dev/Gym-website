<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Royal Fitness</div>
        <ul class="nav-links">
            <li><a href="home">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="plans">Plans</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="login" class="login-btn">Login</a></li>
            <li><a href="signup" class="signup-btn">Sign Up</a></li>
        </ul>
    </nav>

    <div class="login-container">
        <form id="login-form" class="login-form">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
    <script src="login.js"></script>


</body>

</html>