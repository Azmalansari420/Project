<?php echo $pagesidebaropen; ?>

<h4>Related Links:</h4>
<ul class="list_unstyled">
<?php 
$sub_products=getdataorder('tbl_pages',array('status','parent_page'=>$parent_page),'sort_order','asc'); //call contact form number value or 0

foreach($sub_products as $values) { 
if($values->id!=$page_id) { 
?>
<li><a href="<?=base_link();?>/page/<?=$values->slug;?>"><i class="fa fa-right-angle"></i> <?=$values->title;?></a></li>
<?php } } ?>
</ul>

<?php echo $pagesidebarclose; ?>