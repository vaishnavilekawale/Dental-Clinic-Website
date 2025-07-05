<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date') ") or die('query failed');

    if($insert){
        $message[] = 'appointment made successfully!';
    }else{
        $message[] = 'appointment failed';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website Design Tutorial</title>
    <!-- font awesome cdn link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!-- header section starts -->


<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">dental<span>Care.</span></a>
            <!-- <img src="./images/dental clinic.jpg" class="w=100 mb-4 mb-md-0" alt=""> -->
            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>  
            <a href="#contact" class="link-btn">make appoinment</a>
            <div id="menu-btn" class="fas fa-bars"></div> 
    </div>
</header>

<!-- header section ends -->

<!-- home section start -->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
                <a href="#contact" class="link-btn">make appoinment</a>
            </div>
        </div>
    </div>
</section>
<!-- home section ends -->

<!-- about section start -->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">

                <img src="images/about.jpg" class="w=100 mb-4 mb-md-0" alt="">

            </div>
            
            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True HealthCare For Your Family</h3>
                <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore molltia cum nisi, sint, expedita rem error ispa, nesciunt ab provident. Aperiam, officiis!</p>
                <a href="#contact" class="link-btn">make appoinment</a>

            </div>

        </div>

    </div>

</section>

 <!-- about section ends -->
 

 <!-- services section start -->

 <section class="services" id="services">

    <h1 class="heading">our services</h1><br>

    <div class="box-container container">

        <div class="box">

            <img src="images/service-icon-1.png" alt="">
            <h3>Alignment specialist</h3>
            <p>Lorem ispum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>

        <div class="box">

            <img src="images/service-icon-2.png" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Lorem ispum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>

        <div class="box">

            <img src="images/service-icon-3.png" alt="">
            <h3>Oral hygiene expert</h3>
            <p>Lorem ispum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>

        <div class="box">

            <img src="images/service-icon-4.png" alt="">
            <h3>Root canel specialist</h3>
            <p>Lorem ispum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>

        <div class="box">

            <img src="images/service-icon-5.png" alt="">
            <h3>Live dental advisory</h3>
            <p>Lorem ispum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>

        <div class="box">

            <img src="images/service-icon-6.png" alt="">
            <h3>Cavity Inspection</h3>
            <p>Lorem ispum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
        </div>

    </div>

 </section>
 <!-- services section ends -->

 <!-- process section start -->

 <section class ="process">

    <h1 class="heading">work process</h1><br>

    <div class="box-container container">

        <div class="box">
            <img src="images/work1.png" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
        </div>

        <div class="box">
            <img src="images/work2.jpg" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
        </div>

        <div class="box">
            <img src="images/work3.jpg" alt="">
            <h3>Dental Implants</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
        </div>
    </div>
 </section>

 <!-- process section ends -->

 <!-- reviews section start -->
>
<section class="reviews" id="reviews">
    <h1 class="heading">Satisfied Clients</h1><br>

    <div class="box-container container">
        <!-- Review 1 -->
        <div class="box">
            <img src="images/review1.png" alt="Review Image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
            <span>Satisfied Client</span>
        </div>

        <!-- Review 2 -->
        <div class="box">
            <img src="images/review2.png" alt="Review Image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
            <span>Satisfied Client</span>
        </div>

        <!-- Review 3 -->
        <div class="box">
            <img src="images/review3.png" alt="Review Image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
            <span>Satisfied Client</span>
        </div>
    </div>
</section>


 <!-- reviews section ends -->

 <!-- contact section start -->

 <section class="contact" id="contact">

    <h1 class="heading"> make appoinment </h1><br>

    <form action="?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<p class="message">'.$message.'</p>';
                }
            }
        ?>
        <span>your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box" required>
        <span>your email :</span>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        <span>your number :</span>
        <input type="number" name="number" placeholder="enter your number" class="box" required>
        <span>appoinment :</span>
        <input type="datetime-local" name="date"  class="box" required>
        <input type="submit" value="make appoinment" name="submit" class="link-btn">
    </form>

 </section>
 <!-- contact section ends -->

 <!-- footer section start -->

 <section class="footer">

    <div class="box-container container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+808-091-9358</p>
            <p>+111-222-3333</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>Pune, india - 412046</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>07:00am to 10:00pm</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
           <p> <a href="mailto:lekawalevaishnavi@gmail.com" class="mail">lekawalwvaishnavi@gmail.com</a></p>
           <p> <a href="mailto:lekawalevaishnavi@gmail.com" class="mail">shrijayhande@gmail.com</a></p>
           
        </div>

    </div>

    <div class="credit"> &copy; copyright @<?php echo date('Y'); ?> by <span>Ms Vaishnavi & Mrs Shrijay</span></div>

 </section>

 <!-- footer section ends -->




<!-- custom js file link -->
 <script src="js/script.js"></script>

</body>
</html>