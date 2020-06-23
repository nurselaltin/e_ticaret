<?php

if(post('submit')){


    $username= post('username');
    $fullname = post('fullname');
    $email = post('email');
    $phone = post('phone');
    $pass = post('pass');



    $query = $db->prepare('INSERT INTO user SET user_fullname= :fullname , user_username = :username , user_email = :email , user_phone = :phone , user_password = :pass, user_rank = :rank');
       $result= $query->execute([
          'fullname' => $fullname,
           'username' => $username,
           'email'  => $email,
           'phone' => $phone,
           'rank' => 2,
           'pass'   => password_hash($pass,PASSWORD_DEFAULT)
       ]);

       if($result){

           header('Location: '. admin_url('login'));
           exit;
       }

}

require admin_view('sign_up');
