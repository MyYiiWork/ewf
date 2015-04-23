<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.0.15;dbname=ewf',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
	    'tablePrefix' => 'ew_', //easy work
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
