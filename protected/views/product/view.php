<?php
 
        $sql=Yii::app()->db->createCommand("SELECT  p.pro_id,p.item,p.unit_price,p.photo,pd.description,
(CASE WHEN p.`status` = 1 THEN 'Available' ELSE 'Not available' END ) as `status` FROM tbl_product p INNER JOIN tbl_product_details pd on p.pro_id=pd.pro_id where p.pro_id=$id");
        foreach ($sql->queryAll() as $row){
            $name=$row['item'];
             $unit_price=$row['unit_price'];
             $status=$row['status'];
             $photo=$row['photo'];
            $desc=$row['description'];         
    
    echo "
 
            <h1 style='margin-top:24px;color:#7A78FB'>$name</h1>
        <div class='product-details'>
               <div class='photo' style='margin-left:20px;'>
                 <img src='$photo' alt='$photo'/>
               </div>
               <div class='span2' style='color:red;margin-left:5px;text-align: center;width: 104px;'>
                    ( $status )<br>
                   $ $unit_price<br>
               </div>
               <div class='clear'>&nbsp;</div>
               <div class='description'>
                 <div class='desc-header'>
                       <h2>Description</h2>  
                           <div class='btn btn-inverse'>
                                <a hre='#' title=''>Order Now</a>
                            </div>
                  </div>
                   $desc
               </div
             </div>
        ";
}
 ?>