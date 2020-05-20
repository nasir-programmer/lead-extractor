<?php

namespace backend\modules\visa\controllers;

use yii\web\Controller;

/**
 * Default controller for the `visa` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
