<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "list_appeal".
 *
 * @property int $id
 * @property string $name_appeal
 */
class ListAppeal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'list_appeal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_appeal'], 'required'],
            [['name_appeal'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_appeal' => 'Name Appeal',
        ];
    }
}
