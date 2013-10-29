<?php

$cat_name = Yii::app()->db->createCommand('select cat_name,cat_id ,(select count(*) from tbl_product p where p.cat_id = c.cat_id) as total from tbl_category c where type_id=1');
$webroot = yii::app()->request->baseUrl;

    //now we can access row columns as object properties:

 echo '        <div class="product-wrapper">';
  echo "<ul style='margin-left:0'>";
    foreach ($cat_name->queryAll() as $row) {
        $cate_name=$row['cat_name'];
        $cat_id = $row["cat_id"];
        $total = $row['total'];  
    $product_list = Yii::app()->db->createCommand("select pro_id,cat_name,item,unit_price,photo, (CASE WHEN new_arrival=1 then '/images/newarrivaltxt.gif' ELSE '/images/new.jpg' END) as new_arrival from tbl_product p inner  join (tbl_category c INNER JOIN tbl_product_type pt ON c.type_id=pt.type_id)on c.cat_id=p.cat_id WHERE p.cat_id=$cat_id and pt.type_id=1  ORDER BY (pro_id) DESC   limit 4 " );
    echo "<li><span style='width:99%'>$cate_name ($total) <a class='more' href='/index.php/category/view/$cat_id'>>>more</a></span>";
    echo '<ul style="overflow:hidden;border: 1px solid #ddd;margin-left:0">';
            foreach ($product_list->queryAll() as $row) {
                $product_name=$row['item'];
                $price=$row['unit_price'];
               $photo=$row['photo'];
           $id=$row['pro_id'];
              $new_arrival = $row["new_arrival"];
              
             
                echo "<li>
                        <div class='span2' style='margin-bottom:20px;'>    
                           <div class='pic'>
                                <a href='$webroot/index.php/product/view/$id' title='More Details'><img src='$photo' alt='$photo'/></a>
                            </div>
                            <div class='details'>
                                   <label style='cursor: default;'> $product_name <br>
                                   <img src='$new_arrival' /> <br>
                                 $ $price</label>
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
