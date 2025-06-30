<?php
$page_title = "Products - WWonKHa's Chocolate Factory";
$current_page = "products";
include 'includes/header.php';

require_once 'database/db.php';

$category_sql = "SELECT * FROM MsProductCategory ORDER BY ProductCategoryName ASC";
$category_result = $conn->query($category_sql);
?>

<main>
    <div class="container">
        <?php if ($category_result && $category_result->num_rows > 0): ?>
            <?php while ($category = $category_result->fetch_assoc()): ?>
                <section class="product-category">
                    <h2><?php echo htmlspecialchars($category['ProductCategoryName']); ?></h2>
                    <div class="products-grid">
                        <?php
                        $category_id = $category['ProductCategoryID'];
                        $product_sql = "SELECT * FROM MsProduct WHERE ProductCategoryID = $category_id ORDER BY ProductName ASC";
                        $product_result = $conn->query($product_sql);
                        ?>
                        <?php if ($product_result && $product_result->num_rows > 0): ?>
                            <?php while ($item = $product_result->fetch_assoc()): ?>
                                <div class="product-card">
                                    <div class="product-info">
                                        <h3><?php echo htmlspecialchars($item['ProductName']); ?></h3>
                                        <p><?php echo htmlspecialchars($item['ProductDescription']); ?></p>
                                        <div class="product-price">
                                            <?php echo '$' . number_format($item['ProductPrice'], 2); ?>
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No products found in this category.</p>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No product categories found.</p>
        <?php endif; ?>

        <div class="products-note">
            <p><strong>Note:</strong> All products are made in a facility that processes nuts, dairy, and gluten. Custom orders available with advance notice.</p>
        </div>
    </div>
</main>

<?php
$conn->close();
include 'includes/footer.php';
?>
