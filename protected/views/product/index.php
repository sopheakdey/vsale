<?php

$cat_name = Yii::app()->db->createCommand('select cat_name,cat_id, (select count(*) from tbl_product p where p.cat_id = c.cat_id) as total from tbl_category c');
$webroot = yii::app()->request->baseUrl;

    //now we can access row columns as object properties:
    echo '<div class="product-wrapper">';
  echo "<ul>";
    foreach ($cat_name->queryAll() as $row) {
        $cate_name=$row['cat_name'];
        $cat_id = $row["cat_id"];
        $total = $row['total'];  
    $product_list = Yii::app()->db->createCommand("select pro_id,cat_name,item,unit_price,photo from tbl_product p inner  join tbl_category c  on p.cat_id=c.cat_id where p.cat_id= $cat_id  ORDER BY (pro_id) DESC   limit 8 " );
    echo "<li><span>$cate_name ($total)</span>";
    echo '<ul>';
            foreach ($product_list->queryAll() as $row) {
                $product_name=$row['item'];
                $price=$row['unit_price'];
               $photo=$row['photo'];
               $id=$row['pro_id'];
                echo "<li>
                        <div class='span2'>    
                           <div class='pic'>
                                <img src='$photo' alt='$photo'/>
                            </div>
                            <div class='details'>
                                   <label> $product_name   $ $price</label>
                            </div>
                                <div class='btn btn-inverse'>
                                    <inpu type'hidden' name='id' id='id' value='$id'/>
                                    <a href='$webroot/index.php/product/view/$id' title='More Details'>More Details</a>  
                                  </div> 
                          </div>     
                </li>";
            }
    echo '</ul>';
    echo "</li>";

}
echo "</ul>";
echo'</div>'; 
?>
