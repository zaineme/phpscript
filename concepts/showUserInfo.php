<?php

require_once 'User.php';
require_once 'MemberUserInfo.php';
require_once 'AdminUserInfo.php';

$memberUserInfo = new MemberUserInfo();
$memberUser = new User($memberUserInfo);
$memberUserData = $memberUser->getUserWithInfo();

$adminUserInfo = new AdminUserInfo();
$adminUser = new User($adminUserInfo);
$adminUserData = $adminUser->getUserWithInfo();

echo $memberUserData . '<br />' . $adminUserData; // use PHP_EOL if you'll run this in terminal
