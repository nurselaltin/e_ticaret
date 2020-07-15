<?php
if(get('id')){

   $query = $db->prepare('DELETE FROM product WHERE id= :id');
   $query->execute([
       'id' => get('id')
   ]);
 
   header('Location:'.admin_url('products'));   


}

