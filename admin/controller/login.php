<?php

if(post('submit'))
{
     $username = post('user_name');
     $pass = post('pass');

     $user = $db->prepare('SELECT*FROM user WHERE user_username = :username');
      $user->execute([
        'username' => $username
     ]);
    $result= $user->fetch(PDO::FETCH_ASSOC);


     if($result['user_rank'] == 1){

         header('Location:'.admin_url());
         exit;

     }elseif($result['user_rank'] == 2){

         header('Location:'.admin_url('customer'));
         exit;
     }


}

require  admin_view('login');
