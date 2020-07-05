<?php

$query= $db->prepare('SELECT*FROM orders  ORDER BY ordered_date DESC');
$query->execute();
$orders = $query->fetchAll(PDO::FETCH_ASSOC);
require admin_view('order');