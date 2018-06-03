<?php


class SiteController {
	public function actionIndex() {
		$cadres = array();
		$cadres = Cadre::getCadresList();
		
		require_once(ROOT.'/views/site/index.php');
		return true;
	}
}