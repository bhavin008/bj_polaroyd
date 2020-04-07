<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Polaroyd Website Template',
	'description' => 'The TYPO3 theme which includes a full configured frontend theme for TYPO3, based on the Bootstrap CSS Framework. URL: https://templatemag.com/demo/Polaroyd/',
	'category' => 'templates',
	'author' => 'Bhavin Barad',
	'author_email' => 'baradbhavin2303@gmail.com',
	'author_company' => '',
	'state' => 'stable',
	'version' => '1.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.0.0-10.99.99',
			'gridelements' => '8.0.0-10.99.99',
			'news' => '5.3.3-10.99.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
	'autoload' => array(
		'classmap' => array('Classes/'),
	),
);
