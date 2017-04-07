<div class="wrap-map" id="wrap-map-1">
    <div id="myCarousel" class="carousel slide">
    <?php if(false): ?>
    <ol class="carousel-indicators">
    {slideshow_images}
    <li data-target="#myCarousel" data-slide-to="{num}" class="{first_active}"></li>
    {/slideshow_images}
    </ol>
    <?php endif; ?>
    
    <div class="container">
    <ol class="carousel-thumbs carousel-indicators">
    {slideshow_images}
        <li data-target="#myCarousel" data-slide-to="{num}" class="{first_active}"><a href="#"><img src="{url}" /></a></li>
    {/slideshow_images}
    </ol>
    </div>
    
    <!-- Carousel items -->
    <div class="carousel-inner">
    {slideshow_images}
        <div class="item {first_active}">
        <img alt="" src="{url}" />
        </div>
    {/slideshow_images}
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>

{template_search-filter}