<?php

namespace frontend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "language".
 *
 * @property int $id
 * @property string $name
 * @property string $short
 *
 * @property ShortLanguage[] $shortLanguages
 * @property ShortLanguage[] $shortLanguages0
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
            [['name', 'short'], 'string', 'max' => 30],
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
     * Gets query for [[ShortLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShortLanguages()
    {
        return $this->hasMany(ShortLanguage::className(), ['language_id' => 'id']);
    }

    /**
     * Gets query for [[ShortLanguages0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShortLanguages0()
    {
        return $this->hasMany(ShortLanguage::className(), ['language_id' => 'id']);
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

    public static function selectList() {

        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
}
