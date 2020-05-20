<?php

/*
 * In configuration file
 * ...
 * 'as AccessBehavior' => [
 *      'class'         => 'app\components\AccessBehavior',
 *      'allowedRoutes' => [
 *          '/',
 *          ['/user/registration/register'],
 *          ['/user/registration/resend'],
 *          ['/user/registration/confirm'],
 *          ['/user/recovery/request'],
 *          ['/user/recovery/reset']
 *      ],
 *      //'redirectUri' => '/'
 *  ],
 *  ...
 *
 * (c) Artem Voitko <r3verser@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace backend\components;

use yii\base\Behavior;
use yii\console\Controller;
use yii\helpers\Url;

/**
 * Redirects all users to defined page if they are not logged in
 *
 * Class AccessBehavior
 * @package app\componentshttps://www.zend.com/
 * @author  Artem Voitko <r3verser@gmail.com>
 */
class AccessBehavior extends Behavior
{
    /**
     * Subscribe for events
     * @return array
     */
    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'beforeAction'
        ];
    }
    /**
     * On event callback
     */
    public function beforeAction()
    {
        // if ( \Yii::$app->user->isGuest ) {
        //     \Yii::$app->getResponse()->redirect(array(Url::to(['site/login'],302)));
        // }

        if (\Yii::$app->getUser()->isGuest &&
            \Yii::$app->getRequest()->url !== Url::to(\Yii::$app->getUser()->loginUrl)
        ) {
            \Yii::$app->getResponse()->redirect(\Yii::$app->getUser()->loginUrl);
        }
    }

}
