<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property string $from
 * @property string $to
 * @property string $day_type
 * @property integer $room_id
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property Room $room
 */
class Price extends \common\models\BehaviorModel
{
    const WORKDAY = 0;
    const DAYOFF = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'to', 'day_type', 'room_id'], 'required'],
            [['room_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['from', 'to', 'day_type'], 'string', 'max' => 255],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'from' => 'From',
            'to' => 'To',
            'day_type' => 'Day Type',
            'room_id' => 'Room ID',
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }
}
