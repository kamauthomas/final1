<?php

@include 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $car_type = mysqli_real_escape_string($conn, $_POST['car_type']);
   $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
   $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
   $end_date = mysqli_real_escape_string($conn, $_POST['end_date']);

   // Check if the car is available for the selected dates
   $check_availability = "SELECT * FROM bookings WHERE car_type = '$car_type' AND ((start_date <= '$end_date' AND end_date >= '$start_date'))";

   $result = mysqli_query($conn, $check_availability);

   if (mysqli_num_rows($result) > 0) {
       // Car is not available
       echo "The car is not available for the selected dates. Please choose different dates or another car type.";
   } else {
       // Car is available, proceed with booking
       $book_car = "INSERT INTO bookings (car_type, user_email, start_date, end_date) VALUES ('$car_type', '$user_email', '$start_date', '$end_date')";

       if (mysqli_query($conn, $book_car)) {
           echo "Car booked successfully!";
       } else {
           echo "Booking failed. Please try again.";
       }
   }
} else {
   echo "Invalid request.";
}
?>
