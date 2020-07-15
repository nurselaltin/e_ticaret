<?php


     $query= $db->prepare('SELECT*FROM product ORDER BY createdAt DESC ');
     $query->execute();
     $products = $query->fetchAll(PDO::FETCH_ASSOC);
     require admin_view('product/index');