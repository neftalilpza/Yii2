<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalogo".
 *
 * @property int $id
 * @property string|null $titulo
 * @property int|null $actividad_id
 * @property int|null $evento_id
 * @property float|null $costo
 * @property int|null $totalhoras
 * @property int|null $cupolimite
 */
class Catalogo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalogo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['actividad_id', 'evento_id', 'totalhoras', 'cupolimite'], 'integer'],
            [['costo'], 'number'],
            [['titulo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'actividad_id' => 'Actividad ID',
            'evento_id' => 'Evento ID',
            'costo' => 'Costo',
            'totalhoras' => 'Totalhoras',
            'cupolimite' => 'Cupolimite',
        ];
    }
}
