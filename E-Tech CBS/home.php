<!-- <?php 
    include 'components/connection.php';
?> -->

<style type="text/css"> 
    <?php include 'style.css'; ?>        
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <title>Green Coffee - home page</title>
</head>
<body>
<?php include 'components/header.php'; ?>        
    <div class="main">
        <?php include 'components/footer.php'; ?>
       <section class="home-section">
       <div class="slider">
            <div class="slider__slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail"></div>
                <h1>Lorem, ipsum dolor. sit</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ipsum?</p>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>

        </div>  

        <!-- slide end -->
        <div class="slider__slider slide2">
                <div class="overlay"></div>
                <div class="slide-detail"></div>
                <h1>welcome to E-Tech </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ipsum?</p>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        <!-- slide end -->
        <div class="slider__slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail"></div>
                <h1>welcome to E-Tech </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ipsum?</p>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        <!-- slide end -->
        <div class="slider__slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail"></div>
                <h1>welcome to E-Tech </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ipsum?</p>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        <!-- slide end -->
        <div class="slider__slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail"></div>
                <h1>welcome to E-Tech </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ipsum?</p>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        <!-- slide end -->

        <div class="left-arrow"><i class="bx bx-left-arrow"></i></div>
        <div class="right-arrow"><i class="bx bx-right-arrow"></i></div>

    </div>

       </section>
    <!-- home slider end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>        
</body>
</html>