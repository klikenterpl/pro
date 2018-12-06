<?php
Class kategoriaController extends widgetMainController
{		
	public function run() {
		$pagesDB = new pagesDB();
		return array("pagesDB" => $pagesDB);
	}
}
?>