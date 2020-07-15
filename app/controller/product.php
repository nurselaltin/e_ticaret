<?php

if(get('id')){


    $color_query = $db->prepare('SELECT*FROM color ');
    $color_query->execute();
    $colors = $color_query->fetchAll(PDO::FETCH_ASSOC);

    $size_query = $db->prepare('SELECT*FROM size ');
    $size_query->execute();
    $sizes = $size_query->fetchAll(PDO::FETCH_ASSOC);

    
    $query = $db->prepare('SELECT*FROM product WHERE id = :id');
    $query->execute([
        'id' => get('id')
    ]);

    $product= $query->fetch(PDO::FETCH_ASSOC);

}

require  view('product');