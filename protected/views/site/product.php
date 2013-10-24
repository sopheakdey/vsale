<?php

$cat_name = Yii::app()->db->createCommand('select cat_name,cat_id, (select count(*) from tbl_product p where p.cat_id = c.cat_id) as total from tbl_category c');
$webroot = yii::app()->request->baseUrl;

    //now we can access row columns as object properties:
  echo "<ul>";
    foreach ($cat_name->queryAll() as $row) {
        $cate_name=$row['cat_name'];
        $cat_id = $row["cat_id"];
        $total = $row['total'];
    echo '<div class="product-wrapper">';
  
    $product_list = Yii::app()->db->createCommand("select cat_name,item from tbl_product p inner  join tbl_category c  on p.cat_id=c.cat_id where p.cat_id= '$cat_id'" );
    echo "<li>$cate_name ($total)";
    echo '<ul>';
            foreach ($product_list->queryAll() as $row) {
                   $name=$row['cat_name']; 
                $product_name=$row['item'];

                
                echo "<li><a href='$webroot/product/view/1'>$product_name</a></li>";
            }
    echo '</ul>';
    echo "</li>";

}
echo "</ul>";

?>
