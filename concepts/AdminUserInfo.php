<?php

require_once 'UserInfo.php';
require_once 'AnotherUserInfo.php';

use Legit\UserInfo as UserInfo;

class AdminUserInfo extends UserInfo {

	public function getInfo() {
		return 'Admin User Info';
	}
}
