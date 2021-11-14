<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "language".
 *
 * @property int $id
 * @property string $name
 * @property string $short
 *
 * @property ShortsLanguage[] $shortsLanguages
 * @property TermLanguage[] $termLanguages
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'short'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['short'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'short' => Yii::t('app', 'Short'),
        ];
    }

    /**
     * Gets query for [[ShortsLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShortsLanguages()
    {
        return $this->hasMany(ShortsLanguage::className(), ['language_id' => 'id']);
    }

    /**
     * Gets query for [[TermLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTermLanguages()
    {
        return $this->hasMany(TermLanguage::className(), ['language_id' => 'id']);
    }
    public static function selectList()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
}
