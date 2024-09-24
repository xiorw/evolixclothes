<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolix Login</title>
    <link rel="icon" href="{{ asset('assets/Evolix Logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <!-- Error Login Pop Up -->
    <div id="errorLogin" class="error">
        <div class="error-content">
            <span class="close">&times;</span>
            <p>Username or password is incorrect!</p>
        </div>
    </div>

    <!-- Carousel Background -->
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{ asset('assets/model1.jpg') }}');"></div>
            <div class="carousel-item" style="background-image: url('{{ asset('assets/model2.jpg') }}');"></div>
            <div class="carousel-item" style="background-image: url('{{ asset('assets/model3.jpg') }}');"></div>
            <div class="carousel-item" style="background-image: url('{{ asset('assets/model4.jpg') }}');"></div>
            <div class="carousel-item" style="background-image: url('{{ asset('assets/model5.jpg') }}');"></div>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>

    <!-- Login Form -->
    <div class="login-container">
        <div class="login-box">
            <h1>Welcome!</h1>
            <img src="{{ asset('assets/Evolix Logo.png') }}" alt="Logo">
            <form id="loginForm">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="button" id="button">Login</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>