<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dmitrij".
 *
 * @property string $Name and surname
 * @property string $time
 * @property string $Age
 * @property string $Weight
 * @property string $Growth
 */
class Dmitrij extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dmitrij';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name and surname', 'time', 'Age', 'Weight', 'Growth'], 'required'],
            [['Name and surname', 'time', 'Age', 'Weight', 'Growth'], 'string'],
            [['Name and surname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Name and surname' => 'Name And Surname',
            'time' => 'Time',
            'Age' => 'Age',
            'Weight' => 'Weight',
            'Growth' => 'Growth',
        ];
    }
}
