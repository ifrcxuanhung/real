<a name="top-page"></a>
<div class="always-top">

<?php if(config_item('cookie_warning_enabled') === TRUE): ?>
<div class="top-wrapper">
      <div class="container">
            <script src="assets/js/cookiewarning4.js" language="JavaScript" type="text/javascript"></script>
      </div> <!-- /.container -->
</div>
<?php endif; ?>

{has_color_picker}
<div class="top-wrapper">
      <div class="container color-picker">
        <a class="pick_orange" href="{page_current_url}?color=orange"> </a>
        <a class="pick_red" href="{page_current_url}?color=red"> </a>
        <a class="pick_green" href="{page_current_url}?color=green"> </a>
        <a class="pick_blue" href="{page_current_url}?color=blue"> </a>
        <a class="pick_purple" href="{page_current_url}?color=purple"> </a>
        <a class="pick_black" href="{page_current_url}?color=black"> </a>
        <a class="pick_white" href="{page_current_url}?color=white"> </a>
      </div> <!-- /.container -->
</div>
{/has_color_picker}

<?php _widget('top_usermenu'); ?>

<div class="head-wrapper">
    <div class="container">
        <div class="row">
            <div class="span12">
                <a class="logo pull-left" href="{homepage_url_lang}"><img src="<?php echo $website_logo_url; ?>" alt="Logo" /></a>
                <a class="logo-over pull-left" href="{homepage_url_lang}"><img src="assets/img/logo-over.png" alt="Logo" /></a>
                <div class="simple-languages pull-right">
                    {print_lang_menu}
                </div>
                <div class="navbar pull-left">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#main-top-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                
                    {print_menu}
                </div><!-- /.navbar -->
            </div>  
        </div> 
    </div>  
</div>

</div>