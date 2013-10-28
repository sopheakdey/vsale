<?php
   
$cat_status = Yii::app()->db->createCommand("select cat_name,cat_id, case when ((select count(*) from tbl_product p where p.cat_id = c.cat_id))=0  THEN 'product not available'   END as cat_status from tbl_category c
where cat_id=$id");
$webroot = yii::app()->request->baseUrl;
        foreach ($cat_status->queryAll() as $row){
            $cat_status=$row['cat_status'];
            $cat_name=$row['cat_name'];
            echo "<span class='cat_name' style='margin-top:30px;width:99%'>Phone - $cat_name</span>";
            echo "<h3>$cat_status</h3>";
        }

 echo '
        <div class="product-wrapper" style="border: 1px solid #dddddd">';
    $product_list = Yii::app()->db->createCommand("select pro_id,cat_name,item,unit_price,photo,CASE WHEN new_arrival=1 then '/images/newarrivaltxt.gif' END as new_arrival from tbl_product p inner  join tbl_category c  on p.cat_id=c.cat_id where p.cat_id= $id  ORDER BY (pro_id) DESC" );
    echo '<ul style="overflow:hidden;">';
            foreach ($product_list->queryAll() as $row) {
                $product_name=$row['item'];
                $price=$row['unit_price'];
               $photo=$row['photo'];
               $id=$row['pro_id'];
               $new_arrival = $row["new_arrival"];
                echo "<li>
                        <div class='span2' style='margin-bottom:20px;'>    
                           <div class='pic'>
                                <img src='$photo' alt='$photo'/>
                            </div>
                            <div class='details'>
                                   <label> $product_name <br> <img src='$new_arrival' /><br> $ $price</label>
                            </div>
                                <div class='btn btn-inverse'>
                                    <inpu type'hidden' name='id' id='id' value='$id'/>
                                    <a href='$webroot/index.php/product/view/$id' title='More Details'>More Details</a>  
                                  </div> 
                          </div>     
                </li>";
            }
    echo '</ul>';
echo'</div> '; 

?>