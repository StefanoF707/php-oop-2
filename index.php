<?php
    require_once __DIR__ . "/subClasses/clothing.php";
    require_once __DIR__ . "/subClasses/tech.php";

    $prod1 = new Tech("Playstation 5", 550, "", "https://blog.it.playstation.com/tachyon/sites/12/2020/11/Featured-Image-PS5-preorder-update.jpg?resize=1088,612&crop_strategy=smart", "Gaming");

    $prod2 = new Tech("ASUS ROG Phone", 699, "", "https://images.eprice.it/nobrand/0/Lightbox/073/210660073/DAM210660073-0-dc64126b-a4d8-4e45-ae4b-0a6a112d1fbb.jpg", "Smartphones");

    $prod3 = new Clothing("Suit", 76, "", "https://images.eprice.it/nobrand/0/hres/606/205065606/2325132185PRDID.0.jpg", "Men");

    $prod4 = new Clothing("Dress", 125, "", "https://images-na.ssl-images-amazon.com/images/I/61CJTmKH4pL._AC_UY606_.jpg", "Women");

    $prod5 = new Clothing("Shorts", 55, "", "https://4.imimg.com/data4/RL/CC/MY-2049478/kids-shorts-500x500.jpg", "Kids");

    $techProds = [$prod1, $prod2];
    $clothesProds = [$prod3, $prod4, $prod5];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.css">
    <title>Shop</title>
</head>
<body>

    <section>
        <h2>Tech</h2>
        <div class="container">
            <?php foreach($techProds as $item) { ?>
                <div class="item">
                    <img src="<?php echo $item->pic ?>" alt="">
                    <h4><?php echo $item->name ?></h4>
                    <h4><?php echo $item->getPrice() ?> €</h4>
                    <h4><?php echo $item->utility ?></h4>
                </div>
            <?php } ?>
        </div>
    </section>

    <section>
        <h2>clothes</h2>
        <div class="container">
            <?php foreach($clothesProds as $item) { ?>
                <div class="item">
                    <img src="<?php echo $item->pic ?>" alt="">
                    <h4><?php echo $item->name ?></h4>
                    <h4><?php echo $item->getPrice() ?> €</h4>
                    <h4><?php echo $item->gender ?></h4>
                </div>
            <?php } ?>
        </div>
    </section>

</body>
</html>
