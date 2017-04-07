<!DOCTYPE html>
<html lang="{lang_code}">
  <head>
    {template_head}
    <script language="javascript">
    $(document).ready(function(){

    });    
    </script>
  </head>

  <body>
  
{template_header}

<a name="content" id="content"></a>
<div class="wrap-content">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
            <h2 id="content"><?php _l('My messages'); ?></h2>
            <div class="property_content">
                <div class="widget-content">
                
                    <?php if($this->session->flashdata('message')):?>
                    <?php echo $this->session->flashdata('message')?>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <p class="alert alert-error"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        	<th>#</th>
                        	<th><?php _l('Date');?></th>
                            <th data-hide="phone,tablet"><?php _l('Mail');?></th>
                            <th data-hide="phone,tablet"><?php _l('Message');?></th>
                            <th data-hide="phone,tablet"><?php _l('Estate');?></th>
                        	<th class="control"><?php _l('Edit');?></th>
                        	<th class="control"><?php _l('Delete');?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($listings)): foreach($listings as $listing_item):?>
                                    <tr>
                                        <td><?php echo $listing_item->id; ?>&nbsp;&nbsp;<?php echo $listing_item->readed == 0? '<span class="label label-warning">'.lang_check('Not readed').'</span>':''?></td>
                                        <td><?php echo $listing_item->date; ?></td>
                                        <td><?php echo $listing_item->mail; ?></td>
                                        <td><?php echo $listing_item->message; ?></td>
                                        <td><?php echo $all_estates[$listing_item->property_id]; ?></td>
                                        <td><?php echo btn_edit('fmessages/edit/'.$lang_code.'/'.$listing_item->id)?></td>
                                        <td><?php echo btn_delete('fmessages/delete/'.$lang_code.'/'.$listing_item->id)?></td>
                                    
                                    </tr>
                        <?php endforeach;?>
                        <?php else:?>
                                    <tr>
                                    	<td colspan="20"><?php echo lang_check('We could not find any');?></td>
                                    </tr>
                        <?php endif;?>           
                      </tbody>
                    </table>

                  </div>
            </div>
            </div>
        </div>
        <?php if(false):?>
        <br />
        <div class="property_content">
        {page_body}
        </div>
        <?php endif;?>
    </div>
</div>
    
{template_footer}

<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">&lsaquo;</a>
    <a class="next">&rsaquo;</a>
    <a class="close">&times;</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

  </body>
</html>