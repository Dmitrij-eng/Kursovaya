<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dmitrij".
 *
 * @property string $Name
 * @property string $time
 * @property string $Age
 * @property string $Weight
 * @property string $Growth
 */
class Country extends \yii\db\ActiveRecord
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
            [['Name', 'time', 'Age', 'Weight', 'Growth'], 'required'],
            [['Name', 'time', 'Age', 'Weight', 'Growth'], 'string'],
            [['Name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Name' => 'Name',
            'time' => 'Time',
            'Age' => 'Age',
            'Weight' => 'Weight',
            'Growth' => 'Growth',
        ];
    }
}
