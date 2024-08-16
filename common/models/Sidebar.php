<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sidebar".
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string|null $description_en
 */
class Sidebar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sidebar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'description_uz', 'description_ru', 'description_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_en' => Yii::t('app', 'Description En'),
        ];
    }
}
