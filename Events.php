<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\devtools;

use Yii;
use yii\helpers\Url;

class Events
{
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('DevtoolsModule.base', 'Devtools'),
            'id' => 'devtools',
            'icon' => '<i class="fa fa-code"></i>',
            'url' => Url::toRoute('/devtools/index'),
            'sortOrder' => 100,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'devtools'),
        ]);
    }
}
