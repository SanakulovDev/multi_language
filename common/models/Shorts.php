<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shorts".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ShortsHistory[] $shortsHistories
 * @property ShortsLanguage[] $shortsLanguages
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
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 35],
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
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[ShortsHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShortsHistories()
    {
        return $this->hasMany(ShortsHistory::className(), ['shorts_id' => 'id']);
    }

    /**
     * Gets query for [[ShortsLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShortsLanguages()
    {
        return $this->hasMany(ShortsLanguage::className(), ['short_id' => 'id']);
    }
}
