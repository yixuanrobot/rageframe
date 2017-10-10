<?php
namespace api\controllers;

use yii\web\Controller;

/**
 * Class MessageController
 * @package api\controllers
 */
class MessageController extends Controller
{
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
