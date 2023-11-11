<?php
    require_once "open_close_DB.php";

     function getRatioFD($user_id, $dishe_id){
     global $mysqli;
     openDB();
     $where = "WHERE `dishe_id`= ".$dishe_id." AND `user_id` = ".$user_id;
     if($user_id != -1){
          $result = $mysqli->query("SELECT * FROM `rates`$where ORDER BY `id`");
          closeDB();
          return resultToArray($result);
     }
     else{
          return 0;
     }
     }



?>