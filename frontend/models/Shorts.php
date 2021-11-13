<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "shorts".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 *
 * @property ShortLanguage[] $shortLanguages
 */
class Shorts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shorts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['title'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * Gets query for [[ShortLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShortLanguages()
    {
        return $this->hasMany(ShortLanguage::className(), ['short_id' => 'id']);
    }
}
