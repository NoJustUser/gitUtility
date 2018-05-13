<?php

class Tab {
	public static function getTimesList() {

		$db = Db::getConnection();
		$timesList = array();
		$result = $db->query('SELECT * FROM work_time');
		$i = 0;
		while ($row = $result->fetch()) {
			$timesList[$i]['id'] = $row['id'];
			$timesList[$i]['w_date'] = $row['w_date'];
			$timesList[$i]['time_in'] = $row['time_in'];
			$timesList[$i]['time_out'] = $row['time_out'];
			$timesList[$i]['res'] = $row['res'];
			$i++;
		}
		return $timesList;
	}
    
    ##########################################################
    # Устанавливаем время прихода при нажатии на клавишу Enter
	public static function setTimeIn($id, $t) {
		$db = Db::getConnection();
		$result = $db->query("UPDATE work_time SET time_in = '$t' WHERE id = '$id'");
		return true;
	}


    ##########################################################
    # Устанавливаем время ухода при нажатии на клавишу Enter
	public static function setTimeOut($id, $t) {
		$db = Db::getConnection();
		$result = $db->query("UPDATE work_time SET time_out = '$t' WHERE id = '$id'");
		return true;
	}
    
    ##############################################################
    # Получаем количество отработанных за смену часов (колонка res)
	public static function setResTime() {
		$db = Db::getConnection();

		$strTime = array();
		$resTime = array();
		$timesList = Tab::getTimesList();
		$i = 0;
		foreach ($timesList as $time) {
			
			$strTime[$i]['time_in'] = explode(":", $time['time_in']); 
			$strTime[$i]['time_in'][0] *= 3600;
			$strTime[$i]['time_in'][1] *= 60;
			$strTime[$i]['time_in'][0] += $strTime[$i]['time_in'][1];
			unset($strTime[$i]['time_in'][1]); 
			$strTime[$i]['time_in'] = implode($strTime[$i]['time_in']);

			$strTime[$i]['time_out'] = explode(":", $time['time_out']);
			$strTime[$i]['time_out'][0] *= 3600;
			$strTime[$i]['time_out'][1] *= 60;
			$strTime[$i]['time_out'][0] += $strTime[$i]['time_out'][1];
			unset($strTime[$i]['time_out'][1]);
			$strTime[$i]['time_out'] = implode($strTime[$i]['time_out']);

			if ($strTime[$i]['time_in']>$strTime[$i]['time_out']) {
				$resTime[$i] = '';
			} else {
			$resTime[$i] = $strTime[$i]['time_out'] - $strTime[$i]['time_in'];
		    }
		    # Преобразуем секунды в часовой формат (строка res вида 9:00)
		    if ($resTime[$i]!='') {
		    	$temp = $resTime[$i]/3600; // в часах
		    	$res = intval($temp);      // в часах
		    	$res_drob = ($temp - $res)*60; // в минутах
		    	if ($res_drob<10) {
		    	    $resTime[$i] = $res.':0'.$res_drob;
		        } else {
		        	$resTime[$i] = $res.':'.$res_drob;
		        }
		    }

		    # Записываем значение resTime в колонку res базы данных
		    $id = $time['id'];
		    $result = $db->query("UPDATE work_time SET res = '$resTime[$i]' WHERE id = '$id'");

			$i++;
		}
		return $resTime;
	}
	##############################################################
}