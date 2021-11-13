<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "short_language".
 *
 * @property int $id
 * @property int $short_id
 * @property int $language_id
 *
 * @property Language $language
 * @property Language $language0
 * @property Shorts $short
 */
class ShortLanguage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'short_language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['short_id', 'language_id'], 'required'],
            [['short_id', 'language_id'], 'integer'],
            [['short_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shorts::className(), 'targetAttribute' => ['short_id' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'short_id' => Yii::t('app', 'Short ID'),
            'language_id' => Yii::t('app', 'Language ID'),
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
     * Gets query for [[Language0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage0()
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
