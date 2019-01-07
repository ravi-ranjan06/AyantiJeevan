<?php
require_once('userTrait.php');

class Login
{
	private $instance;
	use UserTrait;

	public function __construct(Connection $con)
	{
		$this->instance = $con;
	}

	public function authenticate($userName,$password)
	{
		$password = $this->getPassword($password);

		$query = "SELECT * FROM `aj_user` WHERE (`userName` = '$userName' OR `userEmail` = '$userName') AND `userPassword` = '$password' AND `status` = '1'";

		$data = $this->instance->jd($this->instance->getSingleRow($query));

		$userLoginId 	= $data['userLoginId'];
		$userAuthToken 	= $data['userAuthToken'];

		$query2 = "SELECT * FROM `aj_login_history` WHERE `userLoginId` = '$userLoginId' AND userAuthToken = '$userAuthToken' AND `logoutTime` IS NULL";

		$count  = $this->instance->getNumRows($query2);

		if($count == 1)
		{
			$query3 = "UPDATE `aj_login_history` SET `logoutTime` = NOW() WHERE `userLoginId` = '$userLoginId' AND userAuthToken = '$userAuthToken'";

			$this->instance->execute($query3);
		}

		$result = $this->instance->getNumRows($query);
		return $result;
	}

	private function getUserCount($userName,$password)
	{
		$query = "SELECT * FROM `aj_user` WHERE (`userName` = '$userName' OR `userEmail` = '$userName') AND `userPassword` = '$password'";

		$result = $this->instance->getNumRows($query);

		return $result;
	}

	public function updateUserToken($token,$userName,$userLoginId)
	{
		$query = "UPDATE `aj_user` SET `userAuthToken` = '$token' WHERE (`userName` = '$userName' OR `userEmail` = '$userName') AND `userLoginId` = '$userLoginId'";

		$result = $this->instance->execute($query);

		return true;
	}

	public function logHistory($userLoginId,$ip,$token,$loginTime)
	{
		if(!isset($loginTime))
		{
			$loginTime = date('Y-m-d h:i:s');
		}

		$ip = ($ip == '') ? $_SERVER['REMOTE_ADDR'] : $ip;

		$query = "INSERT INTO aj_login_history(`userLoginId`,`ip`,`userAuthToken`,`loginTime`) VALUES('$userLoginId','$ip','$token','$loginTime')";

		$result = $this->instance->execute($query);

		return $this->instance->getLastInsertId();
	}

	public function registration($userName,$email,$password)
	{
		$password = $this->getPassword($password);

		$authenticate = $this->getUserCount($userName,$password);

		if($authenticate <= 0)
		{
			$query = "INSERT INTO `aj_user`(`userName`,`userPassword`,`userEmail`,`status`,`createdOn`) VALUES('$userName','$password','$email','0',NOW())";

			$this->instance->execute($query);

			return 0;
		}
		else
		{
			return 1;
		}
	}

	public function unlock($userName,$password,$referer_url)
	{
		$password = $this->getPassword($password);

		$authenticate = $this->getUserCount($userName,$password);

		if($authenticate >= 1)
		{
			$_SESSION['islock'] = 0;

			header("Location:$referer_url");
		}
	}
}
?>