<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

<style>
   .booking-form {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    padding: 20px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.booking-form form {
    text-align: center;
}

.booking-form form h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.booking-form form input,
.booking-form form label {
    width: 100%;
    margin: 10px 0;
}

.booking-form form input[type="submit"] {
    background: #333;
    color: #fff;
    cursor: pointer;
}

.booking-form form input[type="submit"]:hover {
    background: blue;
}

</style>

</head>
<body>
   


<nav class="navbar">

<div class="logo">
    <span class="logo-text">
        <i class="fa fa-book" style="margin-right: 0.1em;"></i> super
        <span style="color: #f095d1; font-size: 1.12m;">tomaso</span>
    </span>
</div>
<div class="menubar">
    <ul class="list">
        <li class="list-items"><a href="#">Home</a></li>
        <li class="list-items"><a href="#">about us</a></li>
        <li class="list-items"><a href="#">pricing</a></li>
        <li class="list-items"><a href="#">about</a></li>
    </ul>
</div>

    <ul>
    <a href="logout.php" class="btn">logout</a>
    </ul>

</nav>


<div class="hero-content">
<div class="texts">
    <h2 class="hero-h2">
        find, book and  rent a car <span style="font-size: 45px; color: blue;">Easily</span>
    </h2>

    <p class="hero-p">
        get a car wherever and whenever you need it by using your phone only.
    </p>
</div>

<div class="image">
    <img src="assets/profile2-Photoroom.png" alt="">
</div>
</div>

<div class="low-Header">
<p class="location">
    <i class="fa-solid fa-location-pin"> Location</i><br>
    <br>
    let us know of your location <br>for  better assistance
</p>

<p class="pick-up">
    <i class="fa-solid fa-calendar-days"> date to collect</i><br>
    <br>
    book a day to get the car and <br> we shall be there
</p>

<p>
    <i class="fa-solid fa-calendar-days"> date to return</i>
    <br>
    <br>
    stick to the allocated date to <br>return the vehicle
</p>
</div>

<div class="aboutUs">

<div class="about-img">
    <img src="assets/profile3-Photoroom.png" alt="" srcset="">
</div>

<div class="about-text">
    <p class="about-p">
        why choose us?
    </p>
    <h2>
        we offer the best experience with our rental deals
    </h2>

    <h3>
        <i style="color: blue; padding:10px 5px;" class="fa-solid fa-sack-dollar"></i>  best prices guaranteed
    </h3>
    <p style="padding:0 40px ; ">
        find a lower price? We'll refund you 100% of the difference
    </p>

    <h3>
        <i style="color: blue; padding:15px 5px;" class="fa-solid fa-taxi"></i>    experience driver
    </h3>

    <p style="padding:0 40px ; ">
        Don't have a driver? we have many experienced drivers for you.
    </p>

    <h3>
        <i style="color: blue; padding:15px 5px;" class="fa-regular fa-clock"></i>  24 hour car delivery
    </h3>

    <p style="padding:0 40px ; ">
        book your car anytime and we will deliver it directly to you
    </p>

    <h3>
        <i style="color: blue; padding:15px 5px;" class="fa-solid fa-phone"></i>   24/7 technical support
    </h3>
    <p style="padding:0 40px ; ">
        have a question? Contact support anytime when you have a problem
    </p>
</div>


</div>

<h2 class="deals">Our deals</h2>

<div class="container">
<div class="card">
    <img src="assets/profile2-Photoroom.png" alt="Compact Car">
    <h2>🚗 Compact Cars</h2>
    <p>Rent for 3 days, get the 4th day free!</p>
    <p>Starting at $29/day</p>
    <p class="rating">Rating: ⭐⭐⭐⭐</p>
    <!-- booking button -->
    <a href="#" class="btn" onclick="showBookingForm('compact car')">Book Now</a>
</div>
<div class="card">
    <img src="assets/profile2-Photoroom.png" alt="SUV">
    <h2>🚙 SUVs & Crossovers</h2>
    <p>10% off on weekly rentals!</p>
    <p>Starting at $49/day</p>
    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
    <!-- booking button -->
    <a href="#" class="btn" onclick="showBookingForm('suv')">Book Now</a>
</div>
<div class="card">
    <img src="assets/profile2-Photoroom.png" alt="Luxury Car">
    <h2>🏎️ Luxury Vehicles</h2>
    <p>Weekend special: Rent for 2 days, get the 3rd day half off!</p>
    <p>Starting at $99/day</p>
    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
    <!-- booking button -->
    <a href="#" class="btn" onclick="showBookingForm('luxury car')">Book Now</a>
</div>
<div class="card">
    <img src="assets/profile2-Photoroom.png" alt="Sports Car">
    <h2>🏎️ Sports Cars</h2>
    <p>Special offer: Rent for 1 day, get the 2nd day 50% off!</p>
    <p>Starting at $79/day</p>
    <p class="rating">Rating: ⭐⭐⭐⭐⭐</p>
    <!-- booking button -->
    <a href="#" class="btn" onclick="showBookingForm('sports car')">Book Now</a>
</div>

</div>

<div class="testimonials">
<h1>testimonials</h1>

<div class="border"></div>

<div class="row">
<div class="col">
    <div class="testimonial">
        <img src="" alt="">
            <div class="name">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos doloribus dolores.
                </p>
            </div>
        </img>
    </div>
</div>
</div>
</div>



<!-- Booking Form -->
<div id="bookingForm" class="booking-form">
    <form id="bookCarForm">
        <h3>Book Car</h3>
        <input type="hidden" id="carType" name="car_type">
        <input type="email" name="user_email" required placeholder="Enter your email">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" required>
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" required>
        <input type="button" value="Book Now" class="form-btn" onclick="submitBookingForm()">
    </form>
</div>

<!-- JavaScript to show booking form and handle AJAX submission -->
<script>
function showBookingForm(carType) {
    document.getElementById('carType').value = carType;
    document.getElementById('bookingForm').style.display = 'block';
    document.getElementById('bookingForm').scrollIntoView({behavior: 'smooth'});
}

function submitBookingForm() {
    var form = document.getElementById('bookCarForm');
    var formData = new FormData(form);

    fetch('book_car.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        document.getElementById('bookingForm').style.display = 'none';
    })
    .catch(error => console.error('Error:', error));
}
</script>






<script src="https://kit.fontawesome.com/8b985dae8f.js" crossorigin="anonymous"></script>

</body>
</html>


