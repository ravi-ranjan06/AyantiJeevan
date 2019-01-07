<?php
require_once('class.connection.php');

class Session extends Connection
{
	private $allowedrole;
	private $userName;
	private $userRole;
	private $roleFlag;
	private $login_his_id;
	private $idletime;

	public function __construct($role)
	{
		parent::__construct();

		$this->allowedrole 	= $role;
		$this->userName    	= $_SESSION['username'];
		$this->userRole 	= $_SESSION['role'];
		$this->roleFlag 	= '0';
		$this->login_his_id = $_SESSION['login_history_id'];

		$arrayallowedroles = explode(",",$this->allowedrole);

		foreach($arrayallowedroles as $value)
		{
			if($value==$this->userRole)
			{
				$this->roleFlag='1';
			}
		}

		if($this->roleFlag =='0' )
		{
			$message = "You Are Not Authorized to View This Page";
			$this->logout($message);			
		}

		$this->isLoggedin();
	}

	public function getUserRole()
	{
		return $this->userRole;
	}

	public function logout($msg,$req_type='Error')
	{
		$query 	= "UPDATE `aj_login_history` SET `logoutTime` = NOW() WHERE login_his_Id = '".$this->login_his_id."' LIMIT 1";

		$this->execute($query);
		
		session_unset();
		session_destroy();
		
		if(strtolower($req_type) == 'success')
		{
			$message = 'rmsg='.base64_encode($msg);
		}
		else
		{
			$message = 'message='.base64_encode($msg);
		}
		
		header("Location:".BASE_URL."login?$message");
		exit();
	}

	private function isLoggedin()
	{
		// after 3 hrs the user gets logged out
		$this->idletime = 18000;

		if ((time()-$_SESSION['timestamp'])>$this->idletime)
		{
			$message = "You are signed out from the previous session ! Please try sign in again!";
			$this->logout($message);
		}
		elseif($this->logged_in() == false)
		{
			$message = "Invalid session !! Please try sign in again.";
			$this->logout($message);
		}
		else
		{
			$_SESSION['timestamp'] = time();
		}
	}

	private function logged_in()
	{
		if($this->userName != '')
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function include($page,$link="",$sublink="",$link2="",$pageTitle="")
	{
		include_once(BASE_PATH.$page);
	}
}
?>