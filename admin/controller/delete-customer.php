<?php


if(get('id')){

    $query = $db->prepare('DELETE FROM user WHERE user_id= :id');
    $query->execute([
        'id' => get('id')
    ]);
  
    header('Location:'.admin_url('customers'));   
}