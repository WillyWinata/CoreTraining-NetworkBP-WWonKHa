<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? "WillyWonKHa"; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One:wght@400&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1><a href="index.php">🍫 WillyWonKHa's</a></h1>
            </div>
            
            <nav class="navigation">
                <ul>
                    <li><a href="index.php" <?php echo ($current_page ?? '') === 'home' ? 'class="active"' : ''; ?>>Home</a></li>
                    <li><a href="products.php" <?php echo ($current_page ?? '') === 'products' ? 'class="active"' : ''; ?>>Products</a></li>
                    <li><a href="about.php" <?php echo ($current_page ?? '') === 'about' ? 'class="active"' : ''; ?>>About</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
