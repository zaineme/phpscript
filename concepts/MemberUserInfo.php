<?php

require_once 'UserInfo.php';
require_once 'AnotherUserInfo.php';

use Legit\UserInfo as UserInfo;

class MemberUserInfo extends UserInfo {

	public function getInfo() {
		return 'Member User Info';
	}
}
