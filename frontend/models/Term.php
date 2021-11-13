<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "term".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 *
 * @property TermLanguage[] $termLanguages
 */
class Term extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'term';
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
     * Gets query for [[TermLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTermLanguages()
    {
        return $this->hasMany(TermLanguage::className(), ['term_id' => 'id']);
    }
}
