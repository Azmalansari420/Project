<?php
$sub_products=getdataorder('tbl_user',array('category'=>$page_id),'sort_order','asc');
?>

<div class="catalog_grid" style="clear: left;">
    <div class="row" style="margin: 20px 0;">
        
		 <?php $i=1; if($sub_products) { foreach($sub_products as $values) { 
							$new_description1= str_replace(array_in(),array_out(),$values->description); 
						$new_attachment_link= str_replace('#base_url#',base_url(),$values->attachment_link);
				  
				 if($new_attachment_link!=''){ $url= $new_attachment_link;} 
				  else if($values->udf1!='') { $url= base_url($values->slug); }
				  else if($values->page_type==0){ $url= base_link().'/page/'.$values->slug;} 
							?>
		<div class="col-md-4 col-sm-4 col-sx-4 grid_25">
            <div class="col_grid_custom">
                <div class="grid_box_250">
                    <a href="<?=base_url('detail/'.$values->id.'');?>">
                        <span class="vertical_center"></span><img src="<?=base_url('uploads/'.$values->file.'');?>" alt="Best Service provides for Small Businesses" />
                    </a>
                </div>
                <hr />
                <p class="grid_heading"><strong></strong></p>
                <p class="text-center"></p>
                <p class="text-center"><a href="<?=base_url('detail/'.$values->id.'');?>" class="pbmit-btn "><?=$values->name;?></a></p>
                
                <p class="fa_star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </p>
            </div>
        </div>
        <?php } } ?>
        
    </div>
</div>
