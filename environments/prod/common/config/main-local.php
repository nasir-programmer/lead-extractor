<?php
return [
      // 'timeZone' => 'Asia/Calcutta',
    //   'on beforeAction' => function ($event) {
    //     if (!(
    //           (!empty($_SERVER['HTTPS']) AND $_SERVER['HTTPS'] != 'off') || 
    //           $_SERVER['SERVER_PORT'] == 443 
    //         )) {
    //             return Yii::$app->controller->redirect("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    //     }
    // },
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=visathriwedb.cwzzsl1wpj65.eu-central-1.rds.amazonaws.com;dbname=VisaAdmin',
            'username' => 'admin',
            'password' => 'qd30g4q2WRnjfGRmD1XZ',
            'charset' => 'utf8',
             // 'on afterOpen' => function($event) { 
            //     $event->sender->createCommand("SET time_zone='+05:30';")->execute(); 
            // }, 
        ],
        'Visa' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=visathriwedb.cwzzsl1wpj65.eu-central-1.rds.amazonaws.com;dbname=Visa',
            'username' => 'admin',
            'password' => 'qd30g4q2WRnjfGRmD1XZ',
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