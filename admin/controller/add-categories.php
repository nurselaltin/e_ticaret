<?php



if(post('submit')){



      if(post('color') != null){

          $query = $db->prepare('INSERT INTO color SET  color_name = :color');
          $color_result = $query->execute([
              'color'  => post('color')
          ]);
      }elseif (post('size') != null){

          $query = $db->prepare('INSERT INTO size SET  size_name = :size');
          $size_result = $query->execute([
              'size'  => post('size')
          ]);
      }


        /*if($size_result && $color_result){



        }*/




}

    $color_query = $db->prepare('SELECT*FROM color ');
    $color_query->execute();
    $colors = $color_query->fetchAll(PDO::FETCH_ASSOC);

    $size_query = $db->prepare('SELECT*FROM size ');
    $size_query->execute();
    $sizes = $size_query->fetchAll(PDO::FETCH_ASSOC);

require admin_view('add-categories');