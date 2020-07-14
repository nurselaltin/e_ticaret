<?php

if(get('id')){


    $query = $db->prepare('SELECT*FROM product WHERE id = :id');
    $query->execute([
        'id' => get('id')
    ]);

    $product= $query->fetch(PDO::FETCH_ASSOC);

}

require  view('product');