<?php
	$user = [
		'name' => 'Nabeel', 
		'email' => 'nabeeljaved2029@gmail.com', 
		'age' => 37, 
		'hobbies' => [
			"0" => "music",
			"1" => "reading",
			"3" => "travelling",
			"4"=> "coding", 
	]
];

	$user = serialize($user);

	setcookie('user', $user, time() + (86400 * 30));

	$user =  unserialize($_COOKIE['user']);

	//print_r($user);

	echo json_encode($user)

	?>