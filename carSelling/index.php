<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>car</span>selling </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#contact">contact</a>
        <!-- <a href="#createaccount">create one</a> -->
    </nav>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

    <!-- <div id="createaccount-btn">
        <button class="btn">create account</button>
        <i class="far fa-user"></i>
    </div> -->

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>user login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <button type="submit" class="btn btn-block btn-primary">Login</button>
        <p> don't have an account <a href="#" id="register">create one</a> </p>
    </form>

</div>
<div class="register-form-container">

    <span id="close-login-form1" class="fas fa-times"></span>

    <form action="">
        <h3>Register now</h3>
        <input type="text" name="full_name" placeholder="Full Name" class="box">
        <input type="number" name="phone" placeholder="Phone Number" class="box">
        <input type="email" name="email" placeholder="Email" class="box">
        <input type="password" name="password" placeholder="Password" class="box">
        <br>
            <span><strong>I'm a</strong></span>
            <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> 
            <label for="gender-male">
                <strong>
                    Male
                    </strong>
            </label>
            <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
            <label for="gender-female"><strong>
                Female
                </strong>
            </label>
        
        <button type="submit" class="btn btn-block btn-primary">Register</button>
        
        <p>Already have an account?<a href="#" id="login">Login</a></p>
    </form>

</div>


<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">cars</h3>

    <img data-speed="5" class="home-parallax" src="image/car2.jpg" alt="">


</section>


<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3442.0336244430177!2d77.82325931505072!3d30.378403081762055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1665678253806!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
            <h3>your information</h3>
            <input type="text" name="full_name" placeholder="your name" class="box">
            <input type="email" name="email" placeholder="your email" class="box">
            <input type="tel" name="subject" placeholder="subject" class="box">
            <textarea placeholder="your message" name="msg" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91-8954473017 </a>
            <!-- <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a> -->
            <a href="#"> <i class="fas fa-envelope"></i> bishtvaibhav.029@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> dehradun, india - 248197 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created.by.vebb </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>