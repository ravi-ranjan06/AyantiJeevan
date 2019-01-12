<?php
require_once("class.connection.php");

class Register extends Connection
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getCountryList()
	{
		$query 	= "SELECT DISTINCT `country` FROM `aj_state_city_mapping`";

		$result = $this->getMultipleRows($query);

		return $result;
	}

	public function getStates($country)
	{
		$query 	= "SELECT `state` FROM `aj_state_city_mapping` WHERE `country` = '$country' GROUP BY `state` ORDER BY `state` ASC";

		$res 	= $this->execute($query);
		$result = array();

		while($data = $res->fetch_assoc())
		{
			$result[] = $data['state'];
		}

		return $result;
	}

	public function getCity($country,$state)
	{
		$query 	= "SELECT `city` FROM `aj_state_city_mapping` WHERE `country` = '$country' AND `state` = '$state' GROUP BY `city` ORDER BY `city` ASC";

		$res 	= $this->execute($query);
		$result = array();

		while($data = $res->fetch_assoc())
		{
			$result[] = $data['city'];
		}

		return $result;
	}
}
?>