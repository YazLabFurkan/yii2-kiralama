<?php

namespace  mrpurposeless\kiralama\models;

use Yii;

/**
 * This is the model class for table "kiralama".
 *
 * @property int $id
 * @property string $isim
 * @property string $soyisim
 * @property string $mail
 * @property string $telefonNo
 * @property string $markaModel
 * @property string $gecerlilikTarihi
 *
 * @property Arabamarka $markaModel0
 */
class Kiralama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kiralama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'soyisim', 'mail', 'telefonNo', 'markaModel', 'gecerlilikTarihi'], 'required'],
            [['isim', 'soyisim', 'mail', 'telefonNo', 'markaModel', 'gecerlilikTarihi'], 'string', 'max' => 50],
            [['markaModel'], 'exist', 'skipOnError' => true, 'targetClass' => Arabamarka::className(), 'targetAttribute' => ['markaModel' => 'markaModel']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'soyisim' => 'Soyisim',
            'mail' => 'Mail',
            'telefonNo' => 'Telefon No',
            'markaModel' => 'Marka Model',
            'gecerlilikTarihi' => 'Gecerlilik Tarihi',
        ];
    }

    /**
     * Gets query for [[MarkaModel0]].
     *
     * @return \yii\db\ActiveQuery|ArabamarkaQuery
     */
    public function getMarkaModel0()
    {
        return $this->hasOne(Arabamarka::className(), ['markaModel' => 'markaModel']);
    }

    /**
     * {@inheritdoc}
     * @return KiralamaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KiralamaQuery(get_called_class());
    }
}
