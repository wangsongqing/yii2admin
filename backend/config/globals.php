<?php 

function dump($id){
    if(!empty($id) && is_array($id)){
        echo "<pre>";
        print_r($id);
        echo "</pre>";
        exit;
    }
	var_dump($id);
	exit;
}




 ?>