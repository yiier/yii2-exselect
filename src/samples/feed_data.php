<?php
/**
 * Created by PhpStorm.
 * User: yiqing
 * Date: 2015/11/13
 * Time: 17:07
 */

$parentId = isset($_GET['parentId']) ? $_GET['parentId'] : 0 ;


$data = [];
if($parentId === 0 ){
    for($i=0 ; $i <= 10 ; $i++){
        /*
         $data[] = [
            'id:'.$i => 'value:'.$i ,
        ] ;
        */
        $data[''.$i] = ''.$i ;
    }
}else{
   // children：
    for($i=0 ; $i <= 10 ; $i++){
        /*
         $data[] = [
            'id:'.$i => 'value:'.$i ,
        ] ;
        */
        $data[$parentId.'-->'.$i] = " {$parentId} -->{$i} " ;
    }
}
die(json_encode($data)) ;