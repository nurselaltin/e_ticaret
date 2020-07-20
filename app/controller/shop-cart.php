<?php

$query = $db->prepare('SELECT*FROM shopping_card');
$query->execute();
$shopping_products= $query->fetchAll(PDO::FETCH_ASSOC);



require  view('sales/shop-cart');