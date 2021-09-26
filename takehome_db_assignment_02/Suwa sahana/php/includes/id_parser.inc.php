<?php
	function parseKey($key,$start,$id){
		return $id . strval(intval((substr($key,$start))) + 1);
	}
?>