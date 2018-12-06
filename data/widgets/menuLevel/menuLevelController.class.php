<?php /*windu.org model*/
Class menuLevelController extends widgetMainController
{		
	public function run() {
		$pagesDB = new pagesDB();
		return array("pagesDB" => $pagesDB);
	}
}
?>