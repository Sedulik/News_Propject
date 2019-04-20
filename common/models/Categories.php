<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $slug
 *
 * @property SubCategories[] $subCategories
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url', 'slug'], 'required'],
            [['title', 'url', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'url' => 'Url',
            'slug' => 'Slug',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubCategories()
    {
        return $this->hasMany(SubCategories::className(), ['parent_id' => 'id']);
    }
}
