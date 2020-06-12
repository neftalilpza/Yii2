<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evento".
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $descripcion
 * @property string|null $fechainicio
 * @property string|null $fechafin
 * @property string|null $observaciones
 * @property string|null $logotipo
 * @property string|null $eslogan
 * @property string|null $lugar
 * @property int|null $categoria_id
 * @property string|null $inicioregistro
 * @property string|null $cierreregistro
 * @property int|null $organizador_id
 */
class Evento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'observaciones', 'eslogan'], 'string'],
            [['fechainicio', 'fechafin', 'inicioregistro', 'cierreregistro'], 'safe'],
            [['categoria_id', 'organizador_id'], 'integer'],
            [['titulo', 'logotipo'], 'string', 'max' => 100],
            [['lugar'], 'string', 'max' => 200],
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
            'descripcion' => 'Descripcion',
            'fechainicio' => 'Fechainicio',
            'fechafin' => 'Fechafin',
            'observaciones' => 'Observaciones',
            'logotipo' => 'Logotipo',
            'eslogan' => 'Eslogan',
            'lugar' => 'Lugar',
            'categoria_id' => 'Categoria ID',
            'inicioregistro' => 'Inicioregistro',
            'cierreregistro' => 'Cierreregistro',
            'organizador_id' => 'Organizador ID',
        ];
    }
}
