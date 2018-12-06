{if $params.sort==''}{$params.sort='position ASC'}{/if}
{if $params.where==''}{$params.where="type != {pagesDB::TYPE_NEWS}"}{else}{$params.where="{$params.where} and type != {pagesDB::TYPE_NEWS}"}{/if}
{assign activePagesId $data.pagesDB->hasActivePagesIdArray($request->getVariable(urlKey))}

<ul class="menuLevel">
	{foreach $data.pagesDB->getPagesByParentMulti($params.parents,$params.where,$params.sort,'*',null,null,true) as $page}
	<li>
		<a href="{$HOME}{$page->urlKey}" class="{if in_array($page->id,$activePagesId)}menuOpen{/if} {$page->menuCssClass}">
			{$page->name}
		</a>
	</li>
	{/foreach}
</ul>
