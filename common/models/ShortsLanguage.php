<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shorts_language".
 *
 * @property int $id
 * @property int $language_id
 * @property int $short_id
 *
 * @property Language $language
 * @property Shorts $short
 */
class ShortsLanguage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shorts_language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['language_id', 'short_id'], 'required'],
            [['language_id', 'short_id'], 'integer'],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['short_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shorts::className(), 'targetAttribute' => ['short_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'language_id' => Yii::t('app', 'Language ID'),
            'short_id' => Yii::t('app', 'Short ID'),
        ];
    }

    /**
     * Gets query for [[Language]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }

    /**
     * Gets query for [[Short]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShort()
    {
        return $this->hasOne(Shorts::className(), ['id' => 'short_id']);
    }
}
