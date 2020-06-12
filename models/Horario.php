<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property int $id
 * @property int|null $catalogo_id
 * @property int|null $ponente_id
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catalogo_id', 'ponente_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catalogo_id' => 'Catalogo ID',
            'ponente_id' => 'Ponente ID',
        ];
    }
}
