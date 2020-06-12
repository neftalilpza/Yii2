<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horariodetalle".
 *
 * @property int $id
 * @property int|null $horario_id
 * @property string|null $fecha
 * @property string|null $horarioincio
 * @property string|null $horafin
 * @property string|null $lugar
 */
class Horariodetalle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horariodetalle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['horario_id'], 'integer'],
            [['fecha', 'horarioincio', 'horafin'], 'safe'],
            [['lugar'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'horario_id' => 'Horario ID',
            'fecha' => 'Fecha',
            'horarioincio' => 'Horarioincio',
            'horafin' => 'Horafin',
            'lugar' => 'Lugar',
        ];
    }
}
