{if !isset($params.count)}{$params.count = config::get(newsCount)}{/if}
{if !isset($params.length)}{$params.length = config::get(newsLength)}{/if}
{if !isset($params.lengthTitle)}{$params.lengthTitle = config::get(newsLengthTitle)}{/if}
{if !isset($params.width)}{$params.width = config::get(imgSmallWidth)}{/if}
{if !isset($params.height)}{$params.height = config::get(imgSmallHeight)}{/if}
{if !isset($params.span)}{$params.span = config::get(newsSpan)}{/if}
{if !isset($params.btncss)}{$params.btncss = config::get(newsBtnCssClass)}{/if}
{if !isset($params.cssUl)}{$params.cssUl = 'newsNormal'}{/if}
{if !isset($params.cssLi)}{$params.cssLi = ""}{/if}



{if !isset($params.showTitle)}{$params.showTitle = true}{/if}
{if !isset($params.showContent)}{$params.showContent = true}{/if}
{if !isset($params.showImg)}{$params.showImg = true}{/if}
{if !isset($params.showMore)}{$params.showMore = false}{/if}
{if !isset($params.startNews)}{$params.startNews = 0}{/if}
{if !isset($params.fit)}{$params.fit = 'smart'}{/if}
{if !isset($params.where)}{$params.where = null}{/if}

{if !isset($params.limit)}{$params.limit = 10}{/if}
{if !isset($params.elementtype)}{$params.elementtype = 2}{/if}

{if !isset($params.type)}
	{$sort = 'createTime ASC'}
{elseif $params.type=='lastest'}
	{$sort = 'date DESC'}
{elseif $params.type=='views'}
	{$sort = 'views DESC'}
{elseif $params.type=='position'}
	{$sort = 'position ASC'}
{elseif $params.type=='position-group'}
	{$sort = 'parentId ASC,position ASC'}
{elseif $params.type=='author'}
	{$sort = 'createTime DESC'}
	{$where = " AND authorId = {$params.authorId}"}
{/if}

{$dateNow = generate::sqlDatetime()}

{if !empty($params.bucket)}
	{assign results $data.pagesDB->getAllBucketPagesSmart($params.bucket,"type={$params.elementtype} {$where} and (date is null or date <= '$dateNow')",$sort,'*',$params.limit)}
{else}
	{assign results $data.pagesDB->getAllPagesSmart("type={$params.elementtype}{$where} and (date is null or date <= '$dateNow')",$sort,'*',$params.limit)}
{/if}


{if !empty($results)}
<ul class="{$params.cssUl}">
{foreach $results as $page}
  <li>
    <i class="{$params.cssLi}"></i><a href="{$HOME}{$page->urlKey}" class="punktowanie">{$page->name}</a>
  </li>
{/foreach}
</ul>
{else}
<div class="pad">
	{L key="content.list.show.noresults"}
</div>
{/if}
