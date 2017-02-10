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

/**
 * 把对象转成需要的数组
 * @param object $obj
 * @param array $arr ['itemValue','itemName']
 * @return array
 */
function objToArray($obj,$arr=array()){
    $_arr = [];
    foreach($obj as $item){
         $_arr[$item->$arr[0]] = $item->$arr[1];
    }
    return $_arr;
}




 ?>