<?php

$dbC = Yii::app()->db->createCommand('select  cat_name from tbl_category');
$product_list = Yii::app()->db->createCommand('select  item,unit_price,photo from tbl_product where cat_id=1');
 
foreach ($dbC->queryAll() as $row) {
    //now we can access row columns as object properties:
    $name=$row['cat_name'];   
    echo '<div class="product-wrapper">';
            echo $name . "<br/>" ;
            foreach ($product_list->queryAll() as $row) {
                $product_name=$row['item'];
                $uni_price=$row['unit_price'];
                $photo=$row['photo'];
                
                echo $product_name ."<br/>";
            }
    echo '</div>';
}


?>
