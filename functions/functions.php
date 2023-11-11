<?php
    require_once "open_close_DB.php";
    
    function getDishes ($limit){
        global $mysqli;
        openDB();
        $result = $mysqli->query("SELECT * FROM `dishes` ORDER BY `id` LIMIT $limit");
        closeDB();
        return resultToArray($result);
    } 

    function getDishesBC($limit, $id){
        global $mysqli;
        openDB();
        $where = "WHERE `country_id` = ".$id;
        $result = $mysqli->query("SELECT * FROM `dishes`$where ORDER BY `id` LIMIT $limit");
        closeDB();
        return resultToArray($result);
    } 

    function getDishesFP($id){
        global $mysqli;
        openDB();
        $where = "WHERE `id` = ".$id;
        $result = $mysqli->query("SELECT * FROM `dishes`$where ORDER BY `id` LIMIT 1");
        closeDB();
        return $result->fetch_assoc();
    } 

    function getUser($name, $password){
        if($name == "No"){
            return -1;
        }

    }

    function getDishesByUser($limit, $autor_id){
        global $mysqli;
        openDB();
        $where = "WHERE `autor_id` = ".$autor_id;
        $result = $mysqli->query("SELECT * FROM `dishes`$where ORDER BY `id` LIMIT $limit");
        closeDB();
        return resultToArray($result);
    } 

    function getCountries(){
        global $mysqli;
        openDB();
        $result = $mysqli->query("SELECT * FROM `countries` ORDER BY `id`");
        closeDB();
        return resultToArray($result);
    } 

    function resultToArray($result){
        $array = array ();
        while (($row = $result->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }
   
?>