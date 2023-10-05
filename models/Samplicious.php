<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "samplicious".
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $name
 */
class Samplicious extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'samplicious';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'name' => 'Name',
        ];
    }
}
