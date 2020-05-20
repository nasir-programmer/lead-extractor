<?php
return [
    // 'timeZone' => 'Asia/Calcutta',
    
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=VisaAdmin',
            'username' => 'root',
            'password' => 'welcome',
            'charset' => 'utf8',
             // 'on afterOpen' => function($event) { 
            //     $event->sender->createCommand("SET time_zone='+05:30';")->execute(); 
            // }, 
        ],
        'Visa' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=Visa',
            'username' => 'root',
            'password' => 'welcome',
            'charset' => 'utf8',
             // 'on afterOpen' => function($event) { 
            //     $event->sender->createCommand("SET time_zone='+05:30';")->execute(); 
            // }, 
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
		'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'noreply@thriwe.com',
            'password' => 'Tech@1234',
            'port' => '587',
            'encryption' => 'tls',
		    ],

        ],
    ],
];