<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property string $key
 * @property string $value
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Settings extends \common\models\BehaviorModel
{
    private static $settings;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key'], 'required'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['key', 'value'], 'string', 'max' => 255],
            [['key'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'key' => 'Key',
            'value' => 'Value',
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets or sets settings.
     * @param $name
     * @param $arguments
     * @return bool|mixed|null
     */
    public static function __callStatic($name, $arguments)
    {
        if (!self::$settings) {
            self::$settings = Settings::find()->all();
            $tmp = [];
            foreach (self::$settings as $setting)
                $tmp[$setting->key] = $setting->value;
            self::$settings = $tmp;
        }


        if ($arguments) {
            self::$settings[$name] = $arguments[0];
            $setting = new Settings([
                'key' => $name,
                'value' => (string)$arguments[0]
            ]);
            $setting->save();
        }

        if (array_key_exists($name, self::$settings))
            return self::$settings[$name];
        return null;
    }
}
