<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "child_category".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int|null $category_id
 *
 * @property Category $category
 * @property Page[] $pages
 */
class ChildCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'child_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
            'category_id' => Yii::t('app', 'Category ID'),
        ];
    }


    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Pages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Page::class, ['child_category_id' => 'id']);
    }
}
