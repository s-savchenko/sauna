<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 09.08.16
 * Time: 12:09
 */

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class BehaviorModel extends ActiveRecord
{
    public function behaviors()
    {
        return [
            BlameableBehavior::className(),
            TimestampBehavior::className()
        ];
    }
}