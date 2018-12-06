{if !isset($params.limit)}{$params.limit = 3}{/if}
{if !isset($params.length)}{$params.length = config::get(newsLength)}{/if}
{if $params.sort==''}{$params.sort='position ASC'}{/if}
{if $params.where==''}{$params.where="type != {pagesDB::TYPE_NEWS}"}{/if}
{assign activePagesId $data.pagesDB->hasActivePagesIdArray($request->getVariable(urlKey))}

{function name=menuNormalTree}
	{foreach $pages as $page}
    	{if $params.hasContent!=true or $page->content|count_characters>3}
          {if $data.pagesDB->hasChild($page->parentId)}
             


<li><a href="{if $page->cf_urlsm_string eq NULL}{$HOME}{$page->urlKey}{else}{$HOME}{$page->cf_urlsm_string}{/if}">{$page->name|strip_tags|truncate:$params.length}</a> <span>{$page->views}</span>
                  {if ($params.closed != true and in_array($page->id,$activePagesId)) or ($params.open == true)}
                      
    {menuNormalTree pages=$data.pagesDB->getPagesByParent($page->id,$params.where,$params.sort,'*',$params.limit,null,true)}        
                    {/if}
         
    
              </li>
          {else}
<li><a href="{if $page->cf_urlsm_string eq NULL}{$HOME}{$page->urlKey}{else}{$HOME}{$page->cf_urlsm_string}{/if}">{$page->name|strip_tags|truncate:$params.length}</a> <span>{$page->views}</span></li>
          {/if}
        {else}
        	<li><a href="{if $page->cf_urlsm_string eq NULL}{$HOME}{$page->urlKey}{else}{$HOME}{$page->cf_urlsm_string}{/if}">{$page->name|strip_tags|truncate:$params.length}</a> <span>{$page->views}</span></li>
        {/if} 
	{/foreach}

{/function}


		<li class="col-md-4">
<div class="wm-categorie-list-wrap">
    <a href="{$HOME}{$params.url}"><i class="wm-bgcolor {$params.class}"></i></a>
    <h6><a href="{$HOME}{$params.url}" class="wm-btn-style-three wm-bgcolor" >{$params.nazwa}</a></h6>
<ul>
{menuNormalTree pages=$data.pagesDB->getPages($params.parent,$params.where,$params.sort,'*',$params.limit,null,true)}
</ul>


											</div>
            
										</li>


        