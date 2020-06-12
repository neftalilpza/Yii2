<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "participante".
 *
 * @property int $id
 * @property string|null $nombrecompleto
 * @property string $curp
 * @property string|null $intitucionprocedencia
 * @property string $cuenta
 * @property string $password
 */
class Participante extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'participante';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['curp', 'cuenta', 'password'], 'required'],
            [['nombrecompleto', 'intitucionprocedencia'], 'string', 'max' => 100],
            [['curp'], 'string', 'max' => 18],
            [['cuenta'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 128],
            [['curp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombrecompleto' => 'Nombrecompleto',
            'curp' => 'Curp',
            'intitucionprocedencia' => 'Intitucionprocedencia',
            'cuenta' => 'Cuenta',
            'password' => 'Password',
        ];
    }
}
