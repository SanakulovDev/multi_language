<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shorts_history".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $shorts_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Shorts $shorts
 * @property User $user
 */
class ShortsHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shorts_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'shorts_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['shorts_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shorts::className(), 'targetAttribute' => ['shorts_id' => 'id']],
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
            'shorts_id' => Yii::t('app', 'Shorts ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[Shorts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShorts()
    {
        return $this->hasOne(Shorts::className(), ['id' => 'shorts_id']);
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
