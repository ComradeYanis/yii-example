<?php

namespace app\models;

use Yii;
use app\models\Categorys;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property int $id_category
 * @property string $name
 * @property Categorys $category
 * @property string $description
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'name', 'description'], 'required'],
            [['id_category'], 'integer'],
            [['description'], 'string'],
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
            'id_category' => 'Id Category',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    public static function getForMain()
    {
        return self::find()->select('name')->orderBy('name DESC')->where(['id_category' => '0'])->all();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categorys::class, ['id' => 'id_category']);
    }
}
