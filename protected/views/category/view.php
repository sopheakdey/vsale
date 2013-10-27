<?php
   
$cat_status = Yii::app()->db->createCommand("select cat_name,cat_id, case when ((select count(*) from tbl_product p where p.cat_id = c.cat_id))=0  THEN 'product not available'   END as cat_status from tbl_category c
where cat_id=$id");
$webroot = yii::app()->request->baseUrl;
        foreach ($cat_status->queryAll() as $row){
            $cat_status=$row['cat_status'];
            $cat_name=$row['cat_name'];
            echo "<h1>$cat_name</h1>";
            echo "<h3>$cat_status</h3>";
        }

 echo '
     <div class="span9">
        <div class="product-wrapper">';
    $product_list = Yii::app()->db->createCommand("select pro_id,cat_name,item,unit_price,photo from tbl_product p inner  join tbl_category c  on p.cat_id=c.cat_id where p.cat_id= $id  ORDER BY (pro_id) DESC   limit 8 " );
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
echo'</div>
</div> '; 

?>