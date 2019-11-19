<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property int $group
 * @property int $ball
 * @property int $part_ball
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'group', 'ball', 'part_ball'], 'required'],
            [['name'], 'string'],
            [['group', 'ball', 'part_ball'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'group' => 'Group',
            'ball' => 'Ball',
            'part_ball' => 'Part Ball',
        ];
    }


}
