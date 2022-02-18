<?php
    require_once __DIR__ .'/classes/Product.php';
    require_once __DIR__ .'/classes/User.php';
    require_once __DIR__ .'/classes/Subscription.php';


        $product = new Product ("Spazzolino", "Oral-B", "Pro 3-3900", 13.45, "cura per la persona");
        $user = new Subscription ("Sara", "Grigolin", "sara.grigolin@gmail.com", new Card("Sara Grigolin", 12345, "07/2023", 167), false);

        echo "Nome: " . $user->getName() . ' ' . $user->getLastname();
        echo PHP_EOL;
        echo "Prodotto acquistato: " . $product->getName() . ' ' . $product->getBrand() . ' ' . $product->getModel() . '.';
        echo PHP_EOL;
        echo "Prezzo originale: " . $product->getPrice() . "€.";
        echo PHP_EOL;
        $product->setDiscount($user->getIsPremium());
        echo $user->getIsPremium() . ' ' . $product->getDiscount();
        echo PHP_EOL;
        echo 'Il prezzo finale è: ' . $product->getPrice() . '€.';

?>