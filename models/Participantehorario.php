<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "participantehorario".
 *
 * @property int $id
 * @property int|null $participante_id
 * @property int|null $horario_id
 * @property string|null $fecharegistro
 */
class Participantehorario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'participantehorario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['participante_id', 'horario_id'], 'integer'],
            [['fecharegistro'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'participante_id' => 'Participante ID',
            'horario_id' => 'Horario ID',
            'fecharegistro' => 'Fecharegistro',
        ];
    }
}
