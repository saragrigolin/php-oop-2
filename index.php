<?php
    require_once __DIR__ .'/classes/Product.php';
    require_once __DIR__ .'/classes/User.php';
    require_once __DIR__ .'/classes/Subscription.php';

    $user = new User ("Sara", "Grigolin", "sara.grigolin@gmail.com", new Card("Sara Grigolin", 12345, "07/2023", 167));
    $product = new Product ("Spazzolino", "Oral-B", "150x", 15, "cura per la persona");

    // $total = $product->getPrice() - $user->getDiscount();
    // $total = $product->getPrice() * ((100 - $user->getDiscount()) / 100);
    // echo $total . '€';

    var_dump($user);
    echo $product->getName() . ' ' . $product->getBrand() . ' ' . $product->getModel() . '. ' . 'Il prezzo scontato è: ' . $product->getPrice(true, 25) . '€';

?>