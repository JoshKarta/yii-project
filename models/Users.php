<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $id
 * @property string|null $name
 * @property string|null $created_at
 *
 * @property Countries[] $countries
 * @property Samplicious[] $sampliciouses
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'string', 'max' => 36],
            [['name', 'created_at'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Countries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountries()
    {
        return $this->hasMany(Countries::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Sampliciouses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSampliciouses()
    {
        return $this->hasMany(Samplicious::class, ['user_id' => 'id']);
    }
}
