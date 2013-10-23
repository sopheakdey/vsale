<?php

$dbC = Yii::app()->db->createCommand();

$dbC->select("*")->from('tbl_product');
 
foreach ($dbC->queryAll() as $row) {
    //now we can access row columns as object properties:
    $product_id=$row['pro_id'];
    $cat_id=$row['pro_id'];
    $item=$row['item'];
    $photo=$row['photo'];
    
    echo $product_id . $cat_id .$item ;//instead of $row['column1']
    echo "<img src=' $photo ' alt='$photo' /> ";
}


?>
