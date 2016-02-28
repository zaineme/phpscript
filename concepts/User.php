<?php

class User {

	private $userInfo;

	public function __construct(Legit\UserInfo $userInfo) {
		if (!$userInfo) {
			$userInfo = new UserInfo(); 
		}
		$this->userInfo = $userInfo;
	}

	private function getUserInfo () { // either private (YAGNI) or protected (if you decided to extend from this class)
		return $this->userInfo->getInfo();
	}

	public function getUserWithInfo() {
		$user = 'This is the user and it contains ';
		$userInfo = $this->getUserInfo();
		return $user . $userInfo;
	}
}