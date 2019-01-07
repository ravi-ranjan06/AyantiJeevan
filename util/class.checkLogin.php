<?php
class CheckLogin
{
	private $userName;
	private $token;
	private $instance;
	private $lockscreen;

	public function __construct(Session $con)
	{
		$this->userName = $_SESSION['username'];
		$this->token 	= $_SESSION['token'];
		$this->instance = $con;

		$this->validate();
		$this->lockscreen();
	}

	private function validate()
	{
		$query = "SELECT * FROM `aj_login_history` WHERE `userAuthToken` = '".$this->token."' AND `userLoginId` IN(SELECT `userLoginId` FROM `me_user` WHERE userName = '".$this->userName."') AND (logoutTime IS NULL OR logoutTime = '') LIMIT 1";

		$result = $this->instance->getNumRows($query);

		if($result <= 0)
		{
			$message = base64_encode("Invalid Session! Please try login again!");
			header("Location:".BASE_URL."login?message=$message");
			exit();
		}
	}

	private function lockscreen()
	{
		$this->lockscreen = @$_SESSION['islock'];

		if(isset($this->lockscreen) && $this->lockscreen == 1)
		{
			$message = base64_encode("Invalid request ! Please unlock to see it in action.");
			header("Location:".BASE_URL."lockscreen?message=$message");
		}
	}
}
?>