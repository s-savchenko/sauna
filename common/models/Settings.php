<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property string $key
 * @property string $value
 */
class Settings extends BehaviorModel
{
    private static $settings = [];

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
            [['key', 'value'], 'string', 'max' => 255],
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
        if (!self::$settings)
            self::$settings = Settings::find()->all();

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
