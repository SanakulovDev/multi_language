<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "term_history".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $term_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Terms $term
 * @property User $user
 */
class TermHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'term_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'term_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Terms::className(), 'targetAttribute' => ['term_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'term_id' => Yii::t('app', 'Term ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
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

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
