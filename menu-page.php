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
                                <input type="radio" id="radio-<?php echo $row_varian['id']; ?>-small" name="switch-<?php echo $row_varian['id']; ?>" value="Small" checked/>
                                <label for="radio-<?php echo $row_varian['id']; ?>-small">Small</label>

                                <input type="radio" id="radio-<?php echo $row_varian['id']; ?>-large" name="switch-<?php echo $row_varian['id']; ?>" value="Large" />
                                <label for="radio-<?php echo $row_varian['id']; ?>-large">Large</label>
                            </div>
                        </div>
                    </div>
                    <div class="variants-price">
                        <p class="price">Rp. <?php echo $row_varian['harga']; ?></p>
                        <a href="#" class="btn-price" onclick="addToCart(<?php echo $row_varian['id']; ?>, '<?php echo $row_varian['nama']; ?>', '<?php echo $row_varian['harga']; ?>', '<?php echo $row_varian['gambar']; ?>')">Added To Cart</a>
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
                    
                </div>
                <div class="price-cart">
                    <div class="subtotal">
                        <p>Subtotal</p>
                        <span id="subtotalAmount">Rp. 0</span>
                    </div>
                    <div class="total-discount">
                        <p>Total Discount</p>
                        <span id="totalDiscountAmount">10%</span>
                    </div>
                    <div class="total">
                        <p>Total</p>
                        <span id="totalAmount">Rp. 0</span>
                    </div>
                </div>
                <button type="submit" onclick="halamanLogin()">Continue to payment</button>
            </div>
        </aside>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>