<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 14.08.16
 * Time: 15:48
 */

namespace backend\widgets;

use yii\bootstrap\Widget;
use yii\helpers\Html;

class TimeSelect extends Widget
{
    /**
     * @inheritdoc
     */
    function run()
    {
        echo '<select class="form-control">';
        for ($k = 0; $k <= 24; $k++)
            printf('<option>%s:00</option>', $k < 10 ? '0' . $k : $k);
        echo '</select>';
    }
}