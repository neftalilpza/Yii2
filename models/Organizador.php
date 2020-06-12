<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizador".
 *
 * @property int $id
 * @property string|null $nombreorazonsocial
 * @property string|null $rfc
 * @property string|null $contacto
 * @property string|null $url
 * @property string|null $correo
 * @property string|null $telefono
 * @property string|null $direccion
 */
class Organizador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organizador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombreorazonsocial', 'contacto', 'correo', 'telefono', 'direccion'], 'string', 'max' => 100],
            [['rfc'], 'string', 'max' => 12],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombreorazonsocial' => 'Nombreorazonsocial',
            'rfc' => 'Rfc',
            'contacto' => 'Contacto',
            'url' => 'Url',
            'correo' => 'Correo',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
        ];
    }
}
