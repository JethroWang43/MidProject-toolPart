<?php include '../../handlers/dataHandler.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greek Tools</title>
    <link rel="stylesheet" href="../../page/page1/assets/css/style.css">
    <script src="../../page/page1/assets/js/script.js" defer></script>
</head>
<body>
    <div class="container">
        <header>
    <h1>⚒️ Greek Tools</h1>
    <nav>
        <ul>
            <li><a href="../../page/page1/index.php">Home</a></li>
            <li><a href="../../page/page1/about.php">About</a></li>
            <li><a href="../../page/page1/contact.php">Contact</a></li>
            <li><a href="../../page/page1/cart.php">Cart</a></li>
        </ul>
    </nav>
</header>
     <main>
        <div class="image" style="position: relative; display: inline-block;">
            <img src="assets/img/Anvil.png" alt="Greek Tools" style="width:100%;">
            <span class ="innertext">
            Greek Tools
            <br>
            Discover the finest selection of traditional Greek tools, crafted for durability and performance.
            </span>
        </div>
    <div class="main-box">
        <nav>
            <button onclick="filterType('all')">All</button>
            <button onclick="filterType('pickaxes')">Pickaxes</button>
            <button onclick="filterType('shovels')">Shovels</button>
            <button onclick="filterType('drills')">Drills</button>
            <button onclick="filterType('helmets')">Helmet</button>
            <button onclick="filterType('tnt')">TNT</button>
        </nav>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product" data-type="<?= $product['type'] ?>">
                    <img src="assets/img/default.png" alt="<?= $product['name'] ?>" style="width:100%">
                    <h3><?= $product['name'] ?></h3>
                    <p>Type: <?= $product['type'] ?></p>
                    <p>Price: <?= $product['price'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

    </div>
</body>
</html>
