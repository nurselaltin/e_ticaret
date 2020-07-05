<?php


$color_query = $db->prepare('SELECT*FROM color ');
$color_query->execute();
$colors = $color_query->fetchAll(PDO::FETCH_ASSOC);

$size_query = $db->prepare('SELECT*FROM size ');
$size_query->execute();
$sizes = $size_query->fetchAll(PDO::FETCH_ASSOC);


if(post('submit')){



    $query = $db->prepare('INSERT INTO product SET product_title = :title , product_description = :description,product_img = :img ,product_count = :product_count ,product_color = :product_color,   product_size = :product_size');
    $result = $query->execute([
        'title' => post('title'),
        'description' => post('description'),
        'img' => post('img'),
        'product_count' => post('count'),
        'product_color' => post('color'),
        'product_size' => post('size')

    ]);

    if($result){

        header('Location:'.admin_url('products'));
    }


}


require admin_view('add-product');