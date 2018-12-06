{if !isset($params.showNews)}{$params.showNews = false}{/if}
{if !isset($params.showCount)}{$params.showCount = true}{/if}
{if !isset($params.limit)}{$params.limit = null}{/if}
{if !isset($params.sort)}{$params.sort = "ASC"}{/if}
{if !isset($params.parentId)}{$params.parentId = null}{/if}


{$first=$data.pagesDB->fetchRow("type=2 and status=1","createTime ASC")}
{$firstPage=generate::sqlDate(strtotime($first->createTime))}

{if $params.parentId != null}
    {$pages=$data.pagesDB->fetchCountGroup("strftime('%Y%m',createTime)",  "parentId='{$params.parentId}' and type=2 and status=1 and createTime>'{$firstPage}'", "createTime {$params.sort}")}
{else}
    {$pages=$data.pagesDB->fetchCountGroup("strftime('%Y%m',createTime)", "type=2 and status=1 and createTime>'{$firstPage}'", "createTime {$params.sort}")}
{/if}

{$count = "COUNT(strftime('%Y%m',createTime))"}
{foreach $pages as $page}
<ul>
    {$first = generate::sqlDate(strtotime("first day of {$page->createTime}"))}
    {$last = generate::sqlDate(strtotime("last day of {$page->createTime}"))}
    <li><strong><a href="{$HOME}{$request->getVariable(urlKey)}?m={$first|date_format:"%Y-%m"}">{$page->createTime|date_format:"%B %Y"}{if $params.showCount}<span class="badge">{$page->$count}</span>{/if}</a></strong></li>
    {if $params.parentId != null}one
        {$newsChild = $data.pagesDB->fetchAll("parentId='{$params.parentId}' and type=2 and status=1 and createTime > '{$first}' and createTime < '{$last}'","createTime {$params.sort}","*",$params.limit)}
    {else}
        {$newsChild = $data.pagesDB->fetchAll("type=2 and status=1 and createTime > '{$first}' and createTime < '{$last}'","createTime {$params.sort}","*",$params.limit)}
    {/if}

    {foreach $newsChild as $child}
        {if $params.showNews}
            <li><a href="{$HOME}{$child->urlKey}">{$child->name}</a></li>
        {/if}
    {/foreach}
</ul>
{/foreach}