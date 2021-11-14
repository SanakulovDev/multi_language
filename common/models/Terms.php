<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "terms".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 *
 * @property TermHistory[] $termHistories
 * @property TermLanguage[] $termLanguages
 */
class Terms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'terms';
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
     * Gets query for [[TermHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTermHistories()
    {
        return $this->hasMany(TermHistory::className(), ['term_id' => 'id']);
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
