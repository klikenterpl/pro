{if $params.width==''}{$params.width = config::get(imgGalleryWidth)}{/if}
{if $params.height==''}{$params.height = config::get(imgGalleryHeight)}{/if}
{if $params.fit==''}{$params.fit = config::get(imgGalleryFit)}{/if}
{if $params.fullwidth==''}{$params.fullwidth = config::get(imgGalleryFullWidth)}{/if}
{if $params.fullheight==''}{$params.fullheight = config::get(imgGalleryFullHeight)}{/if}
{if $params.filter==''}{$params.filter = 'original'}{/if}

{$params.next = {L key="front.content.slidernext"}}
{$params.prev = {L key="front.content.sliderprev"}}

{if $params.adaptiveHeight ==''}{$params.adaptiveHeight = true}{/if}
{if $params.start ==''}{$params.start = 1}{/if}
{if $params.loop ==''}{$params.loop = true}{/if}
{if $params.transition ==''}{$params.transition = 'fade'}{/if}
{if $params.kenZoom ==''}{$params.kenZoom = 100}{/if}
{if $params.slideMargin ==''}{$params.slideMargin = 0}{/if}
{if $params.easing ==''}{$params.easing = 'swing'}{/if}
{if $params.speed ==''}{$params.speed = 800}{/if}
{if $params.direction ==''}{$params.direction = 'next'}{/if}
{if $params.pager ==''}{$params.pager = true}{/if}

{if $params.pause ==''}{$params.pause = 3000}{/if}
{if $params.controls ==''}{$params.controls = false}{/if}
{if $params.showCount ==''}{$params.showCount = false}{/if}
{if $params.showName ==''}{$params.showName = false}{/if}
{if $params.showDesc ==''}{$params.showDesc = false}{/if}

{if !empty($params.bucket)}
    {assign results $data.imagesDB->getByBucket($params.bucket)}
{else}
    {assign results $params.images}
{/if}

<section class="wrapper">
    <article class="control_block">
        {if $params.controls == true}
        <a href="#glob" class='prev'>{$params.prev}</a> / <a href="#glob" class='next'>{$params.next}</a>
        || <a href="#glob" class='init'>Init</a> | <a href="#glob" class='reset'>Destroy</a> | <a href="#glob" class='reload'>Reload</a>
        || <a href="#glob" class='stop'>Stop</a> | <a href="#glob" class='start'>Start</a>
        {/if}
        <ul class="slipperySlider">
            {assign results $data.imagesDB->getByBucket($params.bucket)}
            {$counter = 1}
            {foreach $data.imagesDB->getByBucket(737) as $image}
                <li>
                    <a href="#slide {if $params.showCount == true}{$counter++}{/if}">
                        <img src="{$HOME}image/{$image->ekey}/{$params.fullwidth}/{$params.fullheight}/fit/{$params.filter}/#.{$image->type}" alt="{if $params.showName}{$image->name}{/if}" title="{if $params.showDesc}{$image->description}{/if}"></a>
                </li>
            {/foreach}
        </ul>
    </article>
</section>
{literal}
<script>
    $(function() {
        $(".slipperySlider").slippry({
            {/literal}
            //general elements and wrapper
            slippryWrapper: '<div class="sy-box" />', // wrapper to wrap everything, including pager
            slideWrapper: '<div class="sy-slides-wrap" />', // wrapper to wrap sildes & controls
            slideCrop: '<div class="sy-slides-crop" />', //additional wrapper around just the slides
            boxClass: 'sy-list', // class that goes to original element
            elements: 'li', // elments cointaining slide content
            activeClass: 'sy-active', // class for current slide
            fillerClass: 'sy-filler', // class for element that acts as intrinsic placholder
            loadingClass: 'sy-loading',

            // options
            adaptiveHeight: '{$params.adaptiveHeight}', // height of the sliders adapts to current slide
            start: {$params.start}, // num (starting from 1), random
            loop: '{$params.loop}', // first -> last & last -> first arrows
            captionsSrc: 'img', // img, el [img takes caption from alt or title, el from title of slide element]
            captions: 'overlay', // Position: overlay, below, custom, false
            captionsEl: '.sy-caption', // $ selector for captions wrapper
            initSingle: true, // initialise even if there is only one slide
            responsive: true,
            preload: 'visible', // visible, all | resources to wait for until showing slider

            // pager
            pager: '{$params.pager}',
            pagerClass: 'sy-pager',

            // controls
            controls: true,
            //controlClass: 'sy-controls',
            controlClass: 'sy-controls',
            prevClass: 'sy-prev',
            prevText: '{$params.prev}',
            nextClass: 'sy-next',
            nextText: '{$params.next}',
            hideOnEnd: true,

            // transitions
            transition: '{$params.transition}', // fade, horizontal, vertical, kenburns, false
            kenZoom: {$params.kenZoom}, // max zoom for kenburns (in %)
            slideMargin: {$params.slideMargin}, // spacing between slides (in %)
            transClass: 'transition', // [Class applied to [element] while a transition is taking place.]
            speed: {$params.speed}, // time the transition takes (ms)
            easing: '{$params.easing}', // easing to use in the animation [(see... [jquery www])]
            continuous: true, // seamless first/ last transistion, only works with loop
            useCSS: true, // true, false -> fallback to js if no browser support

            //slideshow
            auto: true,
            autoDirection: '{$params.direction}',
            autoHover: true,
            autoHoverDelay: 100,
            autoDelay: 500,
            pause: {$params.pause}
            {literal}
        });
    });
    </script>
{/literal}
{if $params.controls == true}
    {literal}
        <script>
            $('.stop').click(function () {
                demo1.stopAuto();
                });
            $('.start').click(function () {
                demo1.startAuto();
                });
            $('.prev').click(function () {
                demo1.goToPrevSlide();
                return false;
                });
            $('.next').click(function () {
                demo1.goToNextSlide();
                return false;
                });
            $('.reset').click(function () {
                demo1.destroySlider();
                return false;
                });
            $('.reload').click(function () {
                demo1.reloadSlider();
                return false;
                });
            $('.init').click(function () {
                demo1 = $("#demo1").slippry();
                return false;
                });
            });
        </script>
    {/literal}
{/if}
