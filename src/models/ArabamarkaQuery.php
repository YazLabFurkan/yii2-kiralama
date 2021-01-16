<?php

namespace  mrpurposeless\kiralama\models;

/**
 * This is the ActiveQuery class for [[Arabamarka]].
 *
 * @see Arabamarka
 */
class ArabamarkaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Arabamarka[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Arabamarka|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
