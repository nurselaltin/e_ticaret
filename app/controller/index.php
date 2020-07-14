<?php


$query = $db->prepare('SELECT*FROM product WHERE is_public=1');
$query->execute();

$products = $query->fetchAll(PDO::FETCH_ASSOC);
require  view('index');