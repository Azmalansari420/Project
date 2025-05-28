<?php  
// print_r($pagenation_data);

if(!empty($pagenation_data['page_list'])) 
{
    $previous = $pagenation_data['previous_list'][0];
    $next = $pagenation_data['next_list'][0];
?>
    <div class="sa-datatables__footer row" style="    margin: 15px 0 0 0;">
         <div class="sa-datatables__controls col-6" style="padding: 0;">
            <div class="sa-datatables__legend">
               <div class="dataTables_info" style="font-size: 15px;margin-top: 2px;" role="status" aria-live="polite">Showing <?=$pagenation_data['from'] ?> to <?=$pagenation_data['to'] ?> of <?=$pagenation_data['total_count'] ?></div>
            </div>                
         </div>
         <div class="sa-datatables__pagination col-6" style="padding: 0;">
            <div class="dataTables_paginate paging_simple_numbers" >
               <ul class="pagination pagination-sm" style="margin-bottom: 0;float: right;">
                  <li class="paginate_button page-item previous <?php if($pagenation_data['active_page']<2)echo'disabled'; ?>" >
                    <a href="<?=$previous['url'] ?>" data-dt-idx="0" tabindex="0" data-table_id="<?=$previous['table_id'] ?>" data-page="<?=$previous['page'] ?>" class="page-link page-number-custom">Previous</a>
                </li>
                <?php foreach ($pagenation_data['page_list'] as $key => $value) { ?>
                    <li class="paginate_button page-item  <?php if($value['page']=='...')echo'disabled'; if($value['page']==$pagenation_data['active_page'])echo'active'; ?>">
                        <a href="<?=$value['url'] ?>" data-dt-idx="1" tabindex="0" data-table_id="<?=$previous['table_id'] ?>" data-page="<?=$value['page'] ?>" class="page-link page-number-custom"><?=$value['page'] ?></a>
                    </li>
                <?php } ?>
                <li class="paginate_button page-item next <?php if($pagenation_data['total_page']==$pagenation_data['active_page'])echo'disabled'; ?> " >
                    <a href="<?=$next['url'] ?>" data-table_id="<?=$next['table_id'] ?>" data-page="<?=$next['page'] ?>" data-dt-idx="2" tabindex="0" class="page-link page-number-custom">Next</a>
                </li>
               </ul>
            </div>
         </div>             
    </div>
 <?php } ?>