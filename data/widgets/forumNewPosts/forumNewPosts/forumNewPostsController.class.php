<?php /*windu.org model*/
Class forumNewPostsController extends widgetMainController
{
    public function run() {
        $forumTopicsDB = new forumTopicsDB();
        $forumPostsDB = new forumPostsDB();
        $usersDB = new usersDB();
        $pageUrlKey = $this->request->getVariable('urlKey');

        //ekey

        //debugger::dprint($forumTopicsDB->fetchRow('id', 'updateTime DESC'));

        foreach($forumTopicsDB->fetchAll('id', 'updateTime DESC') as $post){
            //debugger::dprint($post->ekey);

        }



        return array("forumTopicsDB" => $forumTopicsDB, "forumPostsDB" => $forumPostsDB, 'usersDB' => $usersDB, 'pageUrlKey' => $pageUrlKey);
    }
}
?>