<?php


class TabController {
	public function actionIndex() {
    include ROOT.'/views/layout/header.php';

		$cadres = array();
		$indxar = array();
		$cadres = Cadre::getCadresList();
        $indx = 1;
        $ind = 1;

        foreach ($cadres as $cadre) {
	    	$indxar[$ind] = Tab::getTimesSum($ind);
	        $ind++;
	    }
	    
	    $min = array_keys($indxar, min($indxar))[0];
	    echo min($indxar);

		foreach ($cadres as $cadre) { // основной цикл

		$dates = array();
		$dates = Tab::getTimesList($indx);
		$i = 0;
		$totalTime = '';
		$totalTimeHours = '';
		$totalTimeMinutes = '';
		for ($j=0; $j<2; $j++) {
		 foreach($dates as $key => $time) {
		   $id = $key+1;
		   $i++;
		   $inpt = 'inpt'.$j.$i.$indx;
		   if (isset($_POST[$inpt])) {
		   	 $time = $_POST[$inpt];
		   	 //echo $key.$time;
		   	 if ($j==0) {
		   	    Tab::setTimeIn($id, $time, $indx);
		   	    $dates = Tab::getTimesList($indx);
		   	 } elseif ($j==1) {
		   	 	Tab::setTimeOut($id, $time, $indx);
		   	 	$dates = Tab::getTimesList($indx);
		   	 }
		   }
		 }
	    }
	    unset($_POST[$inpt]);
	    $strTime = Tab::setResTime($indx);
	    $totalTime = $strTime[1]/3600; // итог в часах
	    $totalTimeHours = intval($totalTime);     // округление до целых в часах
	    $totalTimeMinutes = ($totalTime - $totalTimeHours)*60; //  минуты
	    if ($totalTimeHours<10) $totalTimeHours = '0'.$totalTimeHours;
	    if ($totalTimeMinutes<10) $totalTimeMinutes = '0'.$totalTimeMinutes;
	    $totalTime = $totalTimeHours.':'.$totalTimeMinutes;
	   
	    $dates = Tab::getTimesList($indx);
	    //$indxar[$indx] = Tab::getTimesSum($indx);

	    include (ROOT.'/views/tab/index.php');
		
		$indx++;
	    } // конец основного цикла foreach

		include ROOT.'/views/layout/footer.php';
		



	   foreach ($strTime[0] as $Time) {
		  echo "<pre>";
		   print_r($Time);
		  echo "</pre>";

		  echo "<pre>";
		   print_r($indxar);
		  echo "</pre>";

		  echo "<pre>";
		   print_r($min);
		  echo "</pre>";
	   }
		return true;
	}


	public function actionData() {

		require_once(ROOT.'/views/tab/data.php');
		return true;
	}
}