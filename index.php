<?php
    require_once __DIR__ .'/classes/Product.php';
    require_once __DIR__ .'/classes/User.php';
    require_once __DIR__ .'/classes/Subscription.php';

    $user = new Subscription ("Sara", "Grigolin", "sara.grigolin@gmail.com", new Card("Sara Grigolin", 12345, "07/2023", 167), true);
    $product = new Product ("Spazzolino", "Oral-B", "150x", 15, "cura per la persona");

    // $total = $product->getPrice() - $user->getDiscount();
    $total = $product->getPrice() * ((100 - $user->getDiscount()) / 100);
    var_dump($user);
    echo $total . '€';
?>