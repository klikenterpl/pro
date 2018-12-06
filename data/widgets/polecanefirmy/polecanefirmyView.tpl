{if !isset($params.count)}{$params.count = config::get(newsCount)}{/if}
{if !isset($params.length)}{$params.length = config::get(newsLength)}{/if}
{if !isset($params.lengthTitle)}{$params.lengthTitle = config::get(newsLengthTitle)}{/if}
{if !isset($params.width)}{$params.width = config::get(imgSmallWidth)}{/if}
{if !isset($params.height)}{$params.height = config::get(imgSmallHeight)}{/if}
{if !isset($params.span)}{$params.span = config::get(newsSpan)}{/if}
{if !isset($params.btncss)}{$params.btncss = config::get(newsBtnCssClass)}{/if}
{if !isset($params.cssUl)}{$params.cssUl = 'newsNormal'}{/if}
{if !isset($params.cssLi)}{$params.cssLi = ""}{/if}

{if !isset($params.showDate)}{$params.showDate = true}{/if}
{if !isset($params.showAuthor)}{$params.showAuthor = true}{/if}

{if !isset($params.showTitle)}{$params.showTitle = true}{/if}
{if !isset($params.showContent)}{$params.showContent = true}{/if}
{if !isset($params.showImg)}{$params.showImg = true}{/if}
{if !isset($params.showMore)}{$params.showMore = false}{/if}
{if !isset($params.startNews)}{$params.startNews = 0}{/if}
{if !isset($params.fit)}{$params.fit = 'smart'}{/if}
{if !isset($params.where)}{$params.where = null}{/if}

{if $params.range != ''}
    {$first = generate::sqlDate(strtotime("first day of {$params.range}"))}
    {$last = generate::sqlDate(strtotime("last day of {$params.range}"))}
    {$where=" and type=2 and status=1 and createTime >= '{$first}' and createTime <= '{$last}'"}
    {$getNews = $data.pagesDB->getNews($params.newsGroup,$params.count,$params.startNews,$where)}
    {else}
    {$getNews = $data.pagesDB->getNews($params.newsGroup,$params.count,$params.startNews)}
{/if}

{if !isset($params.news)}{assign newsList $newsGroup}
{else}{assign newsList $params.news}{/if}



    {foreach $getNews as $news}
			<li class="col-md-4">
                <figure><a href="{if $news->cf_urlsm_string != NULL}{$HOME}{$news->cf_urlsm_string}{else}{if $news->cf_urlsm_string != NULL}{$HOME}{$news->cf_urlsm_string}{else}{$HOME}{$news->urlKey}{/if}{/if}" class="wm-colorhover"><img src="{$HOME}image/{pagesDB::getMainImageEkey($news->id)}/356/244/{$params.fit}/" alt="{$news->name}"></a>
                <figcaption>
				<div class="wm-listing-tag"><a class="wm-bgcolor" href="{if $news->cf_urlsm_string != NULL}{$HOME}{$news->cf_urlsm_string}{else}{$HOME}{$news->urlKey}{/if}">{$news->cf_kategoria_string}</a></div>
				<h2><a href="{if $news->cf_urlsm_string != NULL}{$HOME}{$news->cf_urlsm_string}{else}{$HOME}{$news->urlKey}{/if}">{$news->name}</a></h2>
				</figcaption>
                </figure>
											<div class="wm-listing-options-text">
												<ul>
				<li><i class="flaticon-location"></i>{$news->cf_Miejscowosc_string}</li>
                {if $news->cf_Cena_numeric != NULL}<li><i class="flaticon-money"></i>{$news->cf_Cena_numeric} zł</li>{else}{/if}
       
                                                    
				<li><a href="tel:+48{$news->cf_Telefon_numeric}" class="wm-colorhover"><i class="flaticon-phone">tel </i>{$news->cf_Telefon_numeric}</a></li>
                    <li><a href="{if $news->cf_urlsm_string != NULL}{$HOME}{$news->cf_urlsm_string}{else}{if $news->cf_urlsm_string != NULL}{$HOME}{$news->cf_urlsm_string}{else}{$HOME}{$news->urlKey}{/if}{/if}" class="wm-colorhover">
                        <i class="flaticon-search"></i>{$news->cf_tabs_string}strona</a></li>
												</ul>
											</div>
										</li>
 


    {/foreach}


							