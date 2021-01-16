<?php

namespace mrpurposeless\kiralama\models;

/**
 * This is the ActiveQuery class for [[Kiralama]].
 *
 * @see Kiralama
 */
class KiralamaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Kiralama[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Kiralama|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
