{if !isset($params.limit)}{$params.limit = 3}{/if}

<h5>{L key="newPosts.title"}</h5>
{foreach $data.forumPostsDB->fetchCountGroup('id', null, "updateTime DESC" ,'*', $params.limit) as $lastPost}
    {$topic = $data.forumTopicsDB->fetchRow("id ={$lastPost->topicId}")}
    <a href="{$HOME}{$data.pageUrlKey}?ftype=topic&fekey={$topic->ekey}">{$data.forumPostsDB->get($lastPost->id, 'content')|truncate:30:"<br>":true}</a><br>
    {$username = $data.forumPostsDB->get($data.forumPostsDB->get($lastPost->id, 'id'),'authorId')}{$data.usersDB->get($username, 'username')}
    {$dateTime = $data.forumPostsDB->get($lastPost->id, 'createTime')}
    {generate::showDatatime($dateTime, true, true)}<hr>
{/foreach}
