<?php


$id = get('id');
$color_query = $db->prepare('SELECT*FROM color ');
$color_query->execute();
$colors = $color_query->fetchAll(PDO::FETCH_ASSOC);

$size_query = $db->prepare('SELECT*FROM size ');
$size_query->execute();
$sizes = $size_query->fetchAll(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT*FROM product WHERE id= :id ');
$query->execute([
    'id'  => $id
]);
$product = $query->fetch(PDO::FETCH_ASSOC);


if(post('submit')){

 
    $query = $db->prepare('UPDATE product SET product_title = :title , product_description = :product_description, product_img = :img ,product_count = :product_count ,product_color = :product_color,   product_size = :product_size  WHERE id= :id');
    $result = $query->execute([
        'id'   => $id, 
        'title' => post('title'),
        'product_description' => post('description'),
        'img' => post('img'),
        'product_count' => post('count'),
        'product_color' => post('color'),
        'product_size' => post('size')
    
    ]);

    if($result){

        header('Location:'.admin_url('products'));
    }


}


require admin_view('product/update-product');