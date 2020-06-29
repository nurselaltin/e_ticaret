<?php


     $query= $db->prepare('SELECT*FROM user WHERE user_rank = 2');
     $query->execute();
     $customers = $query->fetchAll(PDO::FETCH_ASSOC);

     require admin_view('customer');