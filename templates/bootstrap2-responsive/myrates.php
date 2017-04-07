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
            <h2 id="content"><?php echo lang_check('My rates and availability'); ?></h2>
            <div class="property_content">
                <div class="widget-controls"> 
                    <?php echo anchor('rates/rate_edit/'.$lang_code.'#content', '<i class="icon-plus"></i>&nbsp;&nbsp;'.lang_check('Add rate'), 'class="btn btn-info"')?>
                </div>
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
                            <th><?php echo lang_check('From date');?></th>
                            <th><?php echo lang_check('To date');?></th>
                            <th><?php echo lang_check('Property');?></th>
                            <th class="control"><?php echo lang_check('Edit');?></th>
                        	<th class="control"><?php echo lang_check('Delete');?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($listings)): foreach($listings as $listing_item):?>
                                    <tr>
                                        <td><?php echo $listing_item->id; ?></td>
                                        <td><?php echo $listing_item->date_from; ?></td>
                                        <td><?php echo $listing_item->date_to; ?></td>
                                        <td><?php echo $properties[$listing_item->property_id]; ?></td>
                                        <td><?php echo btn_edit('rates/rate_edit/'.$lang_code.'/'.$listing_item->id)?></td>
                                        <td><?php echo btn_delete('rates/rate_delete/'.$lang_code.'/'.$listing_item->id)?></td>
                                    
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