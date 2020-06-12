<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ponente".
 *
 * @property int $id
 * @property string $nombrecompleto
 * @property string|null $sexo
 * @property string|null $foto
 * @property string|null $cv
 * @property string|null $nivelacademico
 * @property string|null $cuenta
 * @property string|null $password
 * @property string|null $correo
 */
class Ponente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ponente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombrecompleto'], 'required'],
            [['nombrecompleto', 'foto', 'cv', 'nivelacademico', 'correo'], 'string', 'max' => 100],
            [['sexo'], 'string', 'max' => 1],
            [['cuenta'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 128],
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
            'sexo' => 'Sexo',
            'foto' => 'Foto',
            'cv' => 'Cv',
            'nivelacademico' => 'Nivelacademico',
            'cuenta' => 'Cuenta',
            'password' => 'Password',
            'correo' => 'Correo',
        ];
    }
}
