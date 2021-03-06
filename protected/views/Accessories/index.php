<?php

$cat_name = Yii::app()->db->createCommand('select cat_name,cat_id ,(select count(*) from tbl_product p where p.cat_id = c.cat_id) as total from tbl_category c where c.type_id=2');
$webroot = yii::app()->request->baseUrl;

    //now we can access row columns as object properties:

 echo '        <div class="product-wrapper">';
  echo "<ul>";
    foreach ($cat_name->queryAll() as $row) {
        $cate_name=$row['cat_name'];
        $cat_id = $row["cat_id"];
        $total = $row['total'];  
    $product_list = Yii::app()->db->createCommand("select pro_id,cat_name,item,unit_price,photo from tbl_product p inner  join (tbl_category c INNER JOIN tbl_product_type pt ON c.type_id=pt.type_id)on c.cat_id=p.cat_id WHERE p.cat_id=$cat_id and pt.type_id=2  ORDER BY (pro_id) DESC   limit 4 " );
    echo "<li><span>$cate_name ($total)</span>";
    echo '<ul style="overflow:hidden">';
            foreach ($product_list->queryAll() as $row) {
                $product_name=$row['item'];
                $price=$row['unit_price'];
               $photo=$row['photo'];
               $id=$row['pro_id'];
                echo "<li>
                        <div class='span2' style='margin-bottom:20px;'>    
                           <div class='pic'>
                                <img src='$photo' alt='$photo'/>
                            </div>
                            <div class='details'>
                                   <label> $product_name <br> $ $price</label>
                                       <div class='btn btn-inverse'>
                                            <a hre='$webroot/index.php/register/login' title=''>Order Now</a>
                                       </div>
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
