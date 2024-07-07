<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>

    <!-- External Css -->
    <link rel="stylesheet" href="CSS/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu&display=swap" rel="stylesheet">

</head>

<body>

        <?php

        include('navbar.php');

        ?>

    <!-- Slideshow Start-->

        <?php

        include('slideshow.php');

        ?>

    <!-- Slideshow End-->

    <!-- About Section Start -->
   
        <?php

        include('About.php');

        ?>

    <!-- About Section End -->

    <!-- Gallery Start -->

        <?php

        include('Gallery.php');

        ?>

    <!-- Gallery End -->

    <!-- Contact Start -->

        <?php

        include('Contact.php');

        ?>

    <!-- Contact End -->

    <!-- Footer Start -->

        <?php

        include('Footer.php');

        ?>

    <!-- Footer End -->


    <!-- Script -->
        <script src="Javascript/app.js"></script>

</body>

</html>