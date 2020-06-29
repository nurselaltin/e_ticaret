<?php



if(post('submit')){


        $color = post('color');
        $query = $db->prepare('INSERT INTO color SET  color_name = :color');
        $result = $query->execute([
            'color_name'  => $color
        ]);

        if($result){

            echo 'şöşf';
            exit;


        }



}

require admin_view('add-categories');