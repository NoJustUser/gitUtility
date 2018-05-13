<?php


class SiteController {
	public function actionIndex() {
		$dates = array();
		$dates = Tab::getTimesList();
		$i = 0;
		for ($j=0; $j<2; $j++) {
		 foreach($dates as $key => $time) {
		   $id = $key+1;
		   $i++;
		   $inpt = 'inpt'.$j.$i;
		   if (isset($_POST[$inpt])) {
		   	 $time = $_POST[$inpt];
		   	 //echo $key.$time;
		   	 if ($j==0) {
		   	    Tab::setTimeIn($id, $time);
		   	    $dates = Tab::getTimesList();
		   	 } elseif ($j==1) {
		   	 	Tab::setTimeOut($id, $time);
		   	 	$dates = Tab::getTimesList();
		   	 }
		   }
		 }
	    }
	    unset($_POST[$inpt]);
	    $strTime = Tab::setResTime();
	    $dates = Tab::getTimesList();
		require_once(ROOT.'/views/tab/index.php');
		
	   foreach ($strTime as $Time) {
		  echo "<pre>";
		   print_r($Time);
		  echo "</pre>";
	   }
		return true;
	}
}