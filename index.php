<?php
$page_title = "Home - WWonKHa's Chocolate Factory";
$current_page = "home";
include 'includes/header.php';

require_once 'database/db.php';


?>

<main>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to WWonKHa's Chocolate Factory</h1>
            <p>Creating magical chocolate experiences since 1971</p>
            <a href="products.php" class="cta-button">Explore Our Chocolates</a>
        </div>
        <div class="hero-image">
            <img src="assets/ChocolateFactory.jpg" alt="Delicious chocolate products">
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>Pure Imagination, Pure Chocolate</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>At WWonKHa's Chocolate Factory, we believe that chocolate is more than just a treat—it's a moment of pure joy. Our master chocolatiers craft each piece with the finest ingredients and a touch of magic.</p>
                    <p>From our signature chocolate bars to our artisanal truffles, every product is made with love and the highest quality cocoa beans sourced from around the world.</p>
                </div>
                <div class="about-image">
                    <img src="assets/ChocolateMaking.jpg" alt="Chocolate making process">
                </div>
            </div>
        </div>
    </section>

    <section class="featured">
        <div class="container">
            <h2>Our Bestsellers</h2>
            <div class="featured-grid">
                <?php
                $sql = "SELECT * FROM MsProduct ORDER BY RAND() LIMIT 4";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0):
                    while ($product = $result->fetch_assoc()):
                ?>
                <div class="featured-item">
                    <h3><?php echo htmlspecialchars($product['ProductName']); ?></h3>
                    <p><?php echo htmlspecialchars($product['ProductDescription']); ?></p>
                    <span class="price">$<?php echo number_format($product['ProductPrice'], 2); ?></span>
                </div>
                <?php
                    endwhile;
                else:
                ?>
                <p>No featured products found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="offers">
        <div class="container">
            <h2>Sweet Deals</h2>
            <div class="offers-grid">
                <div class="offer-card">
                    <h3>Factory Tour Special</h3>
                    <p>Book a factory tour and get 20% off your chocolate purchase!</p>
                    <a class="offer-button">Book Now</a>
                </div>
                <div class="offer-card">
                    <h3>Bulk Orders</h3>
                    <p>Order 50+ items and receive free shipping plus 15% discount</p>
                    <a class="offer-button">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
