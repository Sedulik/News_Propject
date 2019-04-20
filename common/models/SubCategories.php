<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sub_categories".
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $slug
 * @property int $parent_id
 *
 * @property Categories $parent
 */
class SubCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url', 'slug', 'parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['title', 'url', 'slug'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
            'parent_id' => 'Parent ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Categories::className(), ['id' => 'parent_id']);
    }
}
