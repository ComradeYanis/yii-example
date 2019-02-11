<?php

namespace app\models;

/**
 * This is the model class for table "categorys".
 *
 * @property int $id
 * @property string $name
 */
class Categorys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 25],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return Categorys[]|Pages[]|array|\yii\db\ActiveRecord[]
     */
    public static function getForMain()
    {
        return self::find()->select('id, name')->orderBy('name DESC')->all();
    }
}
