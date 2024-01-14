<?php
    if (isset($_GET['id'])) {
        $id_kategori = $_GET['id'];
        require_once 'db_conn.php';

        $sql_varian = "SELECT id, nama, harga, deskripsi, gambar FROM eskrim WHERE kategori_id = $id_kategori";
        $result_varian = $conn->query($sql_varian);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robbins'Fresh</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="index.html" class="logo">
                    <img src="./assets/img/logo/logo-nav.png" alt="logo-nav">                     
                </a>
                <div class="navbar-wrapper">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="home.php#menu" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="home.php#featured" class="nav-link">Featured</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="home.php#shop" class="nav-link">Shop</a></li>
                    </ul>
                    <a href="contact.html" class="btn-contact">Contact Us</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="variants">
            <h1 class="variants-title"><span>Ice Cream</span> Variants</h1>
            <div class="shop-cart">
                <i class='bx bx-cart'></i>
            </div>
            <div class="variants-containers">
                <?php 
                         if ($result_varian->num_rows > 0) {
                            while($row_varian = $result_varian->fetch_assoc()) {

                ?>
                <div class="variants-box">
                    <div class="variants-details">
                        <div class="variants-pic">
                            <img src="<?php echo $row_varian['gambar']; ?>" alt="Menu pic <?php echo $row_varian['id']; ?>">
                        </div>
                        <div class="variants-info">
                            <h1 class="variants-name"><?php echo $row_varian['nama']; ?></h1>
                            <p class="variants-text"><?php echo $row_varian['deskripsi']; ?></p>
                            <div class="switch-field">
                                <input type="radio" id="radio-one" name="switch-one" value="small" checked/>
                                <label for="radio-one">Small</label>
                                <input type="radio" id="radio-two" name="switch-one" value="large" />
                                <label for="radio-two">Large</label>
                            </div>
                        </div>
                    </div>
                    <div class="variants-price">
                        <p class="price">Rp. <?php echo $row_varian['harga']; ?></p>
                        <a href="#" class="btn-price">Added To Cart</a>
                    </div>
                </div>
                <?php 
                            }
                        }
                    }

                ?>
            </div>
        </section>

        <aside>
            <div class="cartTab">
                <div class="title-cart">
                    <i class='bx bxs-x-circle' onclick="hideCart()"></i>
                    <h1><span>Your </span>Cart</h1>
                </div>
                <div class="list-cart">
                    <div class="item-cart">
                        <div class="img-item">
                            <img src="./assets/img/featured-box3.png" alt="cart image">
                        </div>
                        <div class="item-info">
                            <p>eskrim Caramel Swirl</p>
                            <p>Small</p>
                            <p class="item-price">Rp - 25.000</p>
                        </div>
                        <div class="quantity">
                            <span class="minus"><i class='bx bxs-minus-square'></i></span>
                            <span class="quantity-value">1</span>
                            <span class="plus"><i class='bx bxs-plus-square'></i></span>
                        </div>
                    </div>
                    <div class="item-cart">
                        <div class="img-item">
                            <img src="./assets/img/featured-box3.png" alt="cart image">
                        </div>
                        <div class="item-info">
                            <p>eskrim Caramel Swirl</p>
                            <p>Large</p>
                            <p class="item-price">Rp - 25.000</p>
                        </div>
                        <div class="quantity">
                            <span class="minus"><i class='bx bxs-minus-square'></i></span>
                            <span class="quantity-value">1</span>
                            <span class="plus"><i class='bx bxs-plus-square'></i></span>
                        </div>
                    </div>
                    <div class="item-cart">
                        <div class="img-item">
                            <img src="./assets/img/featured-box3.png" alt="cart image">
                        </div>
                        <div class="item-info">
                            <p>eskrim Caramel Swirl</p>
                            <p>Large</p>
                            <p class="item-price">Rp - 25.000</p>
                        </div>
                        <div class="quantity">
                            <span class="minus"><i class='bx bxs-minus-square'></i></span>
                            <span class="quantity-value">1</span>
                            <span class="plus"><i class='bx bxs-plus-square'></i></span>
                        </div>
                    </div>
                </div>
                <div class="price-cart">
                    <div class="subtotal">
                        <p>Subtotal</p>
                        <span>Rp - 25.000</span>
                    </div>
                    <div class="total-sales-tax">
                        <p>Total sales tax</p>
                        <span>Rp - 25.000</span>
                    </div>
                    <div class="total">
                        <p>Total</p>
                        <span>Rp - 25.000</span>
                    </div>
                </div>
                <button type="submit" onclick="halamanLogin()">Continue to payment</button>
            </div>
        </aside>
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>