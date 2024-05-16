<?php
    

 // you can write your database insertation code here
 // after successfully insert transaction in database, pass the response accordingly
 $arr = array('msg' => 'Payment successfully credited', 'status' => true);  

 echo json_encode($arr);

?>
