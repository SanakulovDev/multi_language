<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "term_language".
 *
 * @property int $id
 * @property int $language_id
 * @property int $term_id
 *
 * @property Language $language
 * @property Terms $term
 */
class TermLanguage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'term_language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['language_id', 'term_id'], 'required'],
            [['language_id', 'term_id'], 'integer'],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Terms::className(), 'targetAttribute' => ['term_id' => 'id']],
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
            'term_id' => Yii::t('app', 'Term ID'),
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
     * Gets query for [[Term]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTerm()
    {
        return $this->hasOne(Terms::className(), ['id' => 'term_id']);
    }
}
