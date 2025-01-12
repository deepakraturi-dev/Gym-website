
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Website</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Royal Fitness</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#pricing">Plans</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php" class="login-btn">Login</a></li>
            <li><a href="#signup" class="signup-btn">Sign Up</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Royal Fitness</h1>
            <p>Your ultimate destination for strength, fitness, and health.</p>
            <a href="#pricing" class="join-btn">Join Us Now</a>
        </div>
    </header>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="about-container">
            <div class="about-image">
                <img src="images/about-banner.png" alt="About Royal Fitness">
            </div>
            <div class="about-content">
                <h2>About Royal Fitness</h2>
                <p>At Royal Fitness, we believe that fitness is more than just physical exercise—it's a lifestyle choice that empowers individuals to live healthier, stronger, and more balanced lives. Our state-of-the-art gym facilities are designed to help
                    you reach your full potential, whether you're a fitness enthusiast or just starting your journey. We provide a welcoming, inclusive environment where every member feels motivated and supported. With a team of experienced trainers and
                    a wide variety of classes, equipment, and services, we offer personalized fitness solutions to meet your unique goals. Whether you're looking to build muscle, lose weight, increase endurance, or improve flexibility, Royal Fitness is
                    the place for you. Our expert trainers work with you every step of the way to ensure your fitness journey is enjoyable and effective. Join us and experience a community that is committed to helping you become the best version of yourself.
                    Let Royal Fitness be your partner in transforming your body, mind, and lifestyle!</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="service-container">
            <div class="service">
                <img src="images/blog-1.jpg" alt="Service 1">
                <p>1. Personal Training Get personalized attention and a tailored workout plan with our expert personal trainers. Whether you're looking to build strength, improve flexibility, or lose weight, our trainers will guide you every step of the
                    way. With one-on-one sessions, you'll receive focused coaching, nutritional advice, and motivation to reach your fitness goals faster.</p>
            </div>
            <div class="service">
                <img src="images/blog-2.jpg" alt="Service 2">
                <p>2. Group Fitness Classes Join our energetic group fitness classes for a fun and motivating workout experience. From high-intensity interval training (HIIT) to yoga and Zumba, we offer a variety of classes to suit all fitness levels. Working
                    out with others provides accountability and support, helping you stay committed to your fitness journey while enjoying the camaraderie of a like-minded community.</p>
            </div>
            <div class="service">
                <img src="images/blog-3.jpg" alt="Service 3">
                <p>3. Cardio & Strength Training Our gym is fully equipped with the latest cardio and strength training machines to enhance your endurance and muscle building. Whether you're running on our state-of-the-art treadmills, cycling on stationary
                    bikes, or lifting weights, you can push your limits with the best equipment in the industry. Our cardio and strength zones are designed to give you a complete workout experience, ensuring all aspects of fitness are covered. These descriptions
                    are engaging and convey the value of each service clearly. You can customize them further to match your gym's offerings and tone!</p>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="pricing-container">
            <div class="plan">
                <img src="images/class-1.jpg" alt="Plane 1">
                <h3>Basic Plan</h3>
                <p class="price">₹10,000</p>
                <p class="description">Perfect for small trips and weekend getaways.</p>
            </div>
            <div class="plan">
                <img src="images/class-2.jpg" alt="Plane 2">
                <h3>Premium Plan</h3>
                <p class="price">₹25,000</p>
                <p class="description">Enjoy luxury services and additional benefits.</p>
            </div>
            <div class="plan">
                <img src="images/class-3.jpg" alt="Plane 3">
                <h3>VIP Plan</h3>
                <p class="price">₹50,000</p>
                <p class="description">Our most luxurious plan with first-class services.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <form id="contact-form" class="contact-form" method="POST" action="index.php">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Your Name">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Your Email">

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required placeholder="Your Message"></textarea>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>123 Gym Street, Fitness City</p>
                <p>Email: dr860776@gmail.com</p>
                <p>Phone: +91 123 456 7890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2022 Gym Website. All rights reserved.</p>
        </div>
    </footer>

    
</body>

</html>
