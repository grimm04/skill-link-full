<?php
use OAuth\Common\Storage\Session;

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => new Session(), 

	/**
	 * Consumers
	 */
	'consumers' => [

		'Facebook' => [
			'client_id'     => env('FACEBOOK_CLIENT_ID'),
			'client_secret' => env('FACEBOOK_SECRET_ID'),
			'scope'         => ['email','public_profile','user_friends'],
		],

		'Google' => [
		    'client_id'     => env('GOOGLE_CLIENT_ID'),
		    'client_secret' => env('GOOGLE_SECRET_ID'),
		    'scope'         => ['userinfo_email', 'userinfo_profile', 'https://www.google.com/m8/feeds/'],
		],
		'Twitter' => [
		    'client_id'     => env('TWITTER_CLIENT_ID'),
		    'client_secret' => env('TWITTER_SECRET_ID'),
		    // No scope - oauth1 doesn't need scope
		],

	]

];