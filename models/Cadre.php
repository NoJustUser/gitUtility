<?php

class Cadre {

  public static function getCadresList() {

  	$db = Db::getConnection();
  	$cadresList = array();
  	$result = $db->query("SELECT * FROM cadre");
  	$i = 0;
	while ($row = $result->fetch()) {
		
			$cadresList[$i]['id'] = $row['id'];
			$cadresList[$i]['name'] = $row['name'];
			$cadresList[$i]['total_time'] = $row['total_time'];
			$cadresList[$i]['tariff'] = $row['tariff'];

			$i++;
	}
    return $cadresList;
  }

}