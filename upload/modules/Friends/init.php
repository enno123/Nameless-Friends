<?php

/**
 *	FRIENDS MODULE
 *	By Xemah | https://xemah.com
 *
**/

$friends_language = new Language(__DIR__ . '/language', LANGUAGE);

if (!isset($profile_tabs)) {
	$profile_tabs = [];
}

$profile_tabs['friends'] = [
	'title' => $friends_language->get('general', 'title'),
	'smarty_template' => 'friends/profile_tab.tpl',
	'require' => __DIR__ . '/profile_tab.php',
];

require_once(__DIR__ . '/module.php');
$module = new FriendsModule($language, $user, $pages, $navigation, $queries, $smarty, $cache);