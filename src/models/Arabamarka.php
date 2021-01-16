<?php

namespace  mrpurposeless\kiralama\models;

use Yii;

/**
 * This is the model class for table "arabamarka".
 *
 * @property string $markaModel
 *
 * @property Kiralama[] $kiralamas
 */
class Arabamarka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arabamarka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['markaModel'], 'required'],
            [['markaModel'], 'string', 'max' => 50],
            [['markaModel'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'markaModel' => 'Marka Model',
        ];
    }

    /**
     * Gets query for [[Kiralamas]].
     *
     * @return \yii\db\ActiveQuery|KiralamaQuery
     */
    public function getKiralamas()
    {
        return $this->hasMany(Kiralama::className(), ['markaModel' => 'markaModel']);
    }

    /**
     * {@inheritdoc}
     * @return ArabamarkaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArabamarkaQuery(get_called_class());
    }
}
