<?php
    require_once 'db_conn.php';

    $sql_kategori = "SELECT id, nama FROM kategori";
    $result_kategori = $conn->query($sql_kategori);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robbins'Fresh</title>

    <!-- My Css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="#" class="logo">
                    <img src="./assets/img/logo/logo-nav.png" alt="logo-nav">                     
                </a>
                <div class="navbar-wrapper">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="#featured" class="nav-link">Featured</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="#shop" class="nav-link">Shop</a></li>
                    </ul>
                    <a href="contact.html" class="btn-contact">Contact Us</a>
                </div>
                <div class="nav-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- home section -->
        <section id="home">
            <div class="home-text">
                <h1 class="home-title"><span>Robbins</span>’fresh</h1>
                <h2 class="home-title2">Ice Cream Shop</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                <a href="#menu" class="btn-home">Try It Now</a>
            </div>
            <div class="img-box">
                <div class="home-pic1">
                    <img src="./assets/img/img-home1.png" alt="home-img1">
                </div>
                <div class="home-pic2">
                    <img src="./assets/img/img-home2.png" alt="home-img2">
                </div>
                <div class="home-pic3">
                    <img src="./assets/img/img-home3.png" alt="home-pic3">
                </div>
            </div>
        </section>

        <!-- menu section -->
        <section id="menu">
            <h1 class="menu-title">Ice Cream <span>Menu</span></h1>
            <div class="box-containers">
                <?php
                    if ($result_kategori->num_rows > 0) {
                        while($row_kategori = $result_kategori->fetch_assoc()) {

                ?>
                <div class="menu-box" onclick="halamanMenu(<?php echo $row_kategori['id']; ?>)">
                    <img src="" alt="">
                    <h1><?php echo $row_kategori["nama"]; ?></h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
        
                <?php
                        }
                    }
                ?>
            </div>
        </section>

        <!-- why section -->
        <section id="why">
            <div class="why-detail">
                <h1 class="why-title">Why Choose our <span><br>Ice Cream</span></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="why-list">
                    <div class="list-content">
                        <img src="./assets/img/list-why-pic.png" alt="list why pic">
                        <div class="text-list">
                            <h1>Modern Inovation</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="list-content">
                        <img src="./assets/img/list-why-pic.png" alt="list why pic">
                        <div class="text-list">
                            <h1>Modern Inovation</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="list-content">
                        <img src="./assets/img/list-why-pic.png" alt="list why pic">
                        <div class="text-list">
                            <h1>Modern Inovation</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-box">
                <div class="why-pic">
                    <img src="./assets/img/why-pic.png" alt="why ice cream image">
                </div>
            </div>
        </section>

        <!-- Featured section -->
        <section id="featured">
            <h1 class="featured-title">Our Featured <span>Products</span></h1>
            <div class="box-containers">
                <div class="featured-box">
                    <div class="featured-content">
                        <img src="./assets/img/featured-box1.png" alt="featured box 1">
                    </div>
                </div>
                <div class="featured-box">
                    <div class="featured-content">
                        <img src="./assets/img/featured-box2.png" alt="featured box 2">
                    </div>
                </div>
                <div class="featured-box">
                    <div class="featured-content">
                        <img src="./assets/img/featured-box3.png" alt="featured box 3">
                    </div>
                </div>
            </div>
        </section>

        <!-- shop section -->
        <section id="shop">
            <h1 class="shop-title">Our Shop <span>Location</span></h1>
            <div class="shop-details">
                <div class="img-box">
                    <div class="shop-pic">
                        <img src="./assets/img/shop-pic.png" alt="shop pic">
                    </div>
                </div>
                <div class="shop-box">
                    <div class="shop-text">
                        <h3 class="location">Ambon</h3>
                        <hr>
                        <h1 class="open">Open hours :</h1>
                        <p class="day">Monday - Friday</p>
                        <p class="time">10:00 AM - 07:00PM</p>
                        <p class="day">Saturday - Sunday</p>
                        <p class="time">10:00 AM - 15:00PM</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="row">
            <div class="column">
                <div class="footer-logo">
                    <a href="#">
                        <img src="./assets/img/logo/logo-nav.png" alt="logo-nav">                     
                    </a>
                </div>
            </div>

            <div class="column-content">
                <div class="footer-content">
                    <div class="socials">
                      <a href="#"><i class='bx bxl-instagram'></i></a>
                      <a href="#"><i class='bx bxl-facebook'></i></a>
                      <a href="#"><i class='bx bxl-twitter'></i></a>
                    </div>
              
                    <div class="links">
                      <a href="#home">Home</a>
                      <a href="#menu">Menu</a>
                      <a href="#featured">Featured</a>
                      <a href="about.html">About us</a>
                      <a href="#shop">Shop</a>
                    </div>
              
                    <div class="credit">
                      <p>Created by Kelompok2. | &copy; 2023.</p>
                    </div>
                </div>
            </div>

            <div class="column">

            </div>
        </div>
       
    </footer>




    <!-- Script JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>