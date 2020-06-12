<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagodetalle".
 *
 * @property int $id
 * @property int|null $pago_id
 * @property int|null $catalogo_id
 * @property float|null $importe
 */
class Pagodetalle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pagodetalle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pago_id', 'catalogo_id'], 'integer'],
            [['importe'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pago_id' => 'Pago ID',
            'catalogo_id' => 'Catalogo ID',
            'importe' => 'Importe',
        ];
    }
}
