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
<body class="payment-page">
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="index.php" class="logo">
                    <img src="./assets/img/logo/logo-nav.png" alt="logo-nav">                     
                </a>
                <div class="navbar-wrapper">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="index.php#menu" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="index.php#featured" class="nav-link">Featured</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="index.php#shop" class="nav-link">Shop</a></li>
                    </ul>
                    <a href="contact.html" class="btn-contact">Contact Us</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="payment">
            <div class="payment-containers">
            <?php
                if (isset($_GET['data'])) {
                    $data = json_decode(urldecode($_GET['data']), true);
                }
            ?>
                <div class="slideshow-container">
                <?php foreach ($data as $index => $item) : ?>
                    <div class="mySlides fade">
                        <img src="<?php echo $item['image']; ?>" alt="">
                    </div>
                <?php endforeach; ?>

        
                    <div class="itemsDot">
                        <?php foreach ($data as $index => $item) : ?>
                            <span class="dot" onclick="currentSlide(<?php echo $index + 1; ?>)"></span>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="numbertext">Items 1 of <?php echo count($data); ?></div>
                    <div class="text"><?php echo $data[0]['name']; ?> - <?php echo $data[0]['quantity']; ?> items</div>
                    <div class="payment-price">Rp. <?php echo $data[0]['quantity'] * $data[0]['price']; ?></div>
                                
        
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <div class="payment-details">
                    <h1 class="payment-title">Payment Details</h1>
                    <form action="#">
                        <div class="payment-box">
                            <input type="text" name="metodePembayaran" required>
                            <label for="metodePembayaran">Metode Pembayaran</label>
                        </div>
                        <div class="payment-box">
                            <input type="tel" name="notelp" required>
                            <label for="notelp">No. Telp</label>
                        </div>
                        <div class="payment-box">
                            <input type="text" name="alamat" required>
                            <label for="alamat">Alamat Pengiriman</label>
                        </div>
                        <button type="submit" id="paymentSubmit">Submit</button>
                    </form>
                </div>
            </div>
        </section>

        <div class="success" id="Success">
            <div class="title-success">
                <i class='bx bxs-check-circle'></i>
                <h1>Pembayaran sudah berhasil!</h1>
            </div>
            <div class="step-containers">
                <div class="step-list">
                    <i class='bx bxs-check-circle'></i>
                    <div class="step-text">
                        <p>Metode Pembayaran</p>
                        <p>Bca- ******999</p>
                    </div>
                </div>
                <div class="vl"></div>
                <div class="step-list">
                    <i class='bx bxs-check-circle'></i>
                    <div class="step-text">
                        <p>Data Tanggal Pemesanan</p>
                        <p>19-10-2023</p>
                    </div>
                </div>
                <div class="vl"></div>
                <div class="step-list">
                    <i class='bx bxs-check-circle'></i>
                    <div class="step-text">
                        <p>Data Customer</p>
                        <p>No hp : 08122222222</p>
                    </div>
                </div>
                <div class="vl"></div>
                <div class="step-list">
                    <i class='bx bx-loader-circle'></i>
                    <div class="step-text">
                        <p>Pesanan Selesai</p>
                        <p>Sedang disiapkan</p>
                    </div>
                </div>
            </div>
        </div>


    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>