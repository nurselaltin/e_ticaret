<?php
if(get('id')){
    $id =get('id');
    //İd ye ait ürünü getir.
    $query = $db->prepare('SELECT*FROM product WHERE id = :id');
    $query->execute([
        'id' => $id
    ]);
    $product = $query->fetch(PDO::FETCH_ASSOC);


    //shopping_card tablosuna aynı ürün var mı?
    $query = $db->prepare('SELECT*FROM shopping_card WHERE id = :id');
    $query->execute([
        'id' => $id
    ]);
    $shopping_card = $query->fetch(PDO::FETCH_ASSOC);

    //Varsa count değerini güncelle  
    if($shopping_card){

        $query = $db->prepare('UPDATE shopping_card SET product_count = :product_count WHERE id = :id');
        $query->execute([
            'id' => $id,
            'product_count' => $shopping_card['product_count'] + 1,
        ]);
    }
    //yoksa  ürünü ekle
    else{
        $query = $db->prepare('INSERT INTO shopping_card SET id = :id,product_title = :product_title, product_price = :product_price ,product_count = :product_count,product_order_no = :product_order_no');
        $query->execute([
            'id'  => $product['id'],
            'product_title' => $product['product_title'],
            'product_price' => $product['product_price'],
            'product_count' => 1,
            'product_order_no' => $product['order_no'],
        ]);
    }


}

$query = $db->prepare('SELECT*FROM product WHERE is_public=1');
$query->execute();

$products = $query->fetchAll(PDO::FETCH_ASSOC);
require  view('index');