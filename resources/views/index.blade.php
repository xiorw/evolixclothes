<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Evolix, Welcome!</title> 
    <link rel="icon" href="{{ asset('assets/Evolix Logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

      <!-- Navbar -->
  <nav class="navbar" id="navbar">
    <div class="logo">
      <a href="#home" onclick="location.reload();">
        <img src="{{ asset('assets/Evolix Logo.png') }}" alt="Logo">
      </a>
    </div>
    <button class="navbar-toggler">
      <span class="hamburger-icon"></span>
    </button>
    <ul class="navbar-menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="javascript:void(0)" id="logout">Logout</a></li>
    </ul>
  </nav>

  <!-- Logout Pop-up -->
  <div id="logoutPopup" class="popup-overlay">
    <div class="popup-content">
      <p>Are you sure want to log out?</p>
      <button id="logoutYes">Yes</button>
      <button id="logoutNo">No</button>
    </div>
  </div>

  <!-- Home Section -->
  <section id="home">
    <div class="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('assets/model1.jpg') }}');"></div>
        <div class="carousel-item" style="background-image: url('{{ asset('assets/model2.jpg') }}');"></div>
        <div class="carousel-item" style="background-image: url('{{ asset('assets/model3.jpg') }}');"></div>
        <div class="carousel-item" style="background-image: url('{{ asset('assets/model4.jpg') }}');"></div>
        <div class="carousel-item" style="background-image: url('{{ asset('assets/model5.jpg') }}');"></div>
      </div>
    </div>
  </section>  
  <script src="{{ asset('js/script.js') }}"></script>
    
  <!-- Auto-Changed Text Header/Slogan -->
  <header>
    <h1 id="changing-text">Elegance in Every Stitch.</h1>
  </header>
    
  <!-- About Section -->
  <section id="about">
    <div class="about-container">
      <div class="about-header">
        <h1>ABOUT EVOLIX</h1>
      </div>
      <div class="about-text">
        <img src="{{ asset('assets/Evolix Logo.png') }}" alt="Logo">
        <p>
          Evolix is an innovative fashion brand committed to empowering individuals through bold designs that blend contemporary 
          trends with timeless elegance. We create clothing that not only follows fashion but also expresses personality and the 
          courage to stand out. Each of our collections is crafted with meticulous attention to detail, using high-quality materials 
          to ensure comfort and durability, while delivering a striking sense of style. At Evolix, we believe fashion is a powerful 
          form of self-expression, capable of inspiring, transforming, and enhancing confidence. We offer more than just clothing; 
          we provide a statement that reflects who you are and who you aspire to be, making each piece more than just an outfit, 
          but a reflection of your identity and ever-evolving spirit.
        </p>
      </div>
    </div>
  </section>

  <!-- Video Cinematic -->
  <video autoplay muted loop id="cinematic">
    <source src="{{ asset('assets/y2mate.com - CINEMATIC PORTRAIT STREET STYLE  Sony A7C  Batis 25mm f2  BROLL_720pFHR.mp4') }}" alt="video">
  </video>
  
  <!-- Products Section -->
  <section id="products">
    <h3>OUR PRODUCTS</h3>
    <div class="product-section">

          <!-- Men Products -->
          <div class="product-category">
            <h4>
              MEN
            </h4>
            <div class="product-grid">
              <div class="product-item">
                <img src="{{ asset('assets/code001.png') }}" alt="Product 001">
                <p>Collar Cotton Jacket White Shirt</p>
                <p>$25.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code002.png') }}" alt="Product 002">
                <p>Brown Cardigan</p>
                <p>$15.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code003.png') }}" alt="Product 003">
                <p>Corduroy Denim Jacket</p>
                <p>$23.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code004.png') }}" alt="Product 004">
                <p>Maroon T-Shirt</p>
                <p>$16.99</p>
              </div>
              </div>

            <div class="product-grid">
              <div class="product-item">
                <img src="{{ asset('assets/code009.png') }}" alt="Product 009">
                <p>Green Hiking Shirt</p>
                <p>$20.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code010.png') }}" alt="Product 010">
                <p>Blue Sport Hoodie</p>
                <p>$22.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code011.png') }}" alt="Product 011">
                <p>Green Vintage Shirt</p>
                <p>$20.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code012.png') }}" alt="Product 012">
                <p>Gray Cotton Shirt</p>
                <p>$17.99</p>
              </div>
            </div>
          </div>

          <!-- Women Products -->
          <div class="product-category">
            <h4>
              WOMEN
            </h4>
            <div class="product-grid">
              <div class="product-item">
                <img src="{{ asset('assets/code005.png') }}" alt="Product 005">
                <p>Pink Stripped T-Shirt</p>
                <p>$15.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code006.png') }}" alt="Product 006">
                <p>Red Sweater Vest</p>
                <p>$19.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code007.png') }}" alt="Product 007">
                <p>Cropped Denim Jacket</p>
                <p>$22.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code008.png') }}" alt="Product 008">
                <p>Pink and White Cardigan</p>
                <p>$17.99</p>
              </div>
            </div>

            <div class="product-grid">
              <div class="product-item">
                <img src="{{ asset('assets/code013.png') }}" alt="Product 013">
                <p>Black Cropped Leather Jacket</p>
                <p>$22.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code014.png') }}" alt="Product 014">
                <p>Yellow T-Shirt</p>
                <p>$13.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code015.png') }}" alt="Product 015">
                <p>Yellow Cotton Shirt</p>
                <p>$24.99</p>
              </div>
              <div class="product-item">
                <img src="{{ asset('assets/code016.png') }}" alt="Product 016">
                <p>White Oversized T-Shirt</p>
                <p>$16.99</p>
              </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="footer-container">
      <div class="footer-logo">
        <img src="{{ asset('assets/Evolix Logo.png') }}" alt="Logo">
      </div>
      <div class="contact-info">
        <h3>Contact</h3>
        <p>+62 815 7527 9212</p>
        <p><a href="mailto:Booking@evolix.com">Booking@evolix.com</a></p>
        <p>Jalan Pasuruan, RT 09, RW 04, Jatilawang, Banyumas, Jawa Tengah, 53174</p>
      </div>
      <div class="social">
        <h3>Social</h3>
        <p>Instagram: @evolixid</p>
        <p>Youtube: Evolix Clothes</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Copyright © 2024 Evolix</p>
    </div>
  </footer>

</body>
</html>

  
  