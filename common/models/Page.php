<?php

namespace common\models;
use yii\helpers\Url;
use yii\web\UploadedFile;

use Yii;


class Page extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'page';
    }

  public $image;

    public function rules()
    {
        return [
            [['view', 'child_category_id'], 'integer'],
            [['content_uz', 'comtent_ru', 'content_en'], 'string'],
            [['title_uz', 'title_ru', 'title_en', ], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 255],
            [['image'], 'file',  'extensions' => 'png, jpg'],
            [['child_category_id'], 'exist', 'skipOnError' => false, 'targetClass' => ChildCategory::class, 'targetAttribute' => ['child_category_id' => 'id']],
        ];
    }



    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'image' => Yii::t('app', 'Image'),
            'view' => Yii::t('app', 'View'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'comtent_ru' => Yii::t('app', 'Comtent Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'child_category_id' => Yii::t('app', 'Child Category ID'),
        ];
    }


    public function uploadImg($oldImage = null)
    {
        $this->image = UploadedFile::getInstance($this, 'image');
        if (isset($this->image)) {
            $this->image->saveAs('/files' .'img_'.time() . '.' . $this->image->extension);
            $this->image = 'img_'.time().'.'.$this->image->extension;
        }else{
            $this->image = $oldImage;
        }

    }





    public function getChildCategory()
    {
        return $this->hasOne(ChildCategory::class, ['id' => 'child_category_id']);
    }
}
