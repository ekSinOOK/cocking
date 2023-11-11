<?php
    $myspli = false;
	
	function openDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost","root","","cocks");
		$mysqli->query("SET NAMES 'utf-8'");
		
	}
	function closeDB(){
		global $mysqli;
		$mysqli->close();
		
	}
	
	
?>