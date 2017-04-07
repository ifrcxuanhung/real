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
            <h2><?php echo $page_title; ?></h2>
            <div class="property_content">
                <div class="widget-controls"> 
                    <span>
                    <?php _l('You can withdraw up to:'); ?>
                    <?php
                        $index=0;
                        $currencies = array(''=>'');
                        
                        if(count($withdrawal_amounts) == 0)echo '0';
                        
                        foreach($withdrawal_amounts as $currency=>$amount)
                        {
                            $currencies[$currency] = $currency;
                            echo '<span class="label label-success">'.$amount.' '.$currency.'</span>&nbsp;';
                        }
                    ?>
                    </span>
                </div>
            
                    <?php echo validation_errors()?>
                    <?php if($this->session->flashdata('message')):?>
                    <?php echo $this->session->flashdata('message')?>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <p class="alert alert-error"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>
                    <!-- Form starts.  -->
                    <?php echo form_open(NULL, array('class' => 'form-horizontal form-estate', 'role'=>'form'))?>                              
                        <div class="form-group control-group">
                          <label class="col-lg-2 control-label"><?php _l('Amount')?></label>
                          <div class="col-lg-10 controls">
                          <div class="input-append">
                            <?php echo form_input('amount', $this->input->post('amount') ? $this->input->post('amount') : '', ''); ?>
                          </div>
                          </div>
                        </div>
                        
                        <div class="form-group control-group">
                          <label class="col-lg-2 control-label"><?php _l('Currency code')?></label>
                          <div class="col-lg-10 controls">
                            <?php echo form_dropdown('currency', $currencies, $this->input->post('currency') ? $this->input->post('currency') : '', 'class="form-control"')?>
                          </div>
                        </div>

                        <div class="form-group control-group">
                          <label class="col-lg-2 control-label"><?php _l('Withdrawal email')?></label>
                          <div class="col-lg-10 controls">
                          <div class="input-append">
                            <?php echo form_input('withdrawal_email', $this->input->post('withdrawal_email') ? $this->input->post('withdrawal_email') : '', ''); ?>
                          </div>
                          </div>
                        </div>

                        <div class="control-group">
                          <div class="controls">
                            <?php echo form_submit('submit', lang_check('Request withdrawal'), 'class="btn btn-primary"')?>
                            <a href="<?php echo site_url('rates/payments/'.$lang_code)?>#content" class="btn btn-default" type="button"><?php echo lang_check('Cancel')?></a>
                          </div>
                        </div>
                    <?php echo form_close()?>
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