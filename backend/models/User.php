<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property int $role_id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $position
 * @property int $gender
 * @property string $image
 * @property string $phone
 * @property int $member_status
 * @property int $department_id
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Role $role
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
            [['username', 'role_id', 'last_name', 'first_name', 'middle_name', 'position', 'gender', 'image', 'phone', 'department_id', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['role_id', 'gender', 'member_status', 'department_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['image'], 'string'],
            [['username', 'last_name', 'first_name', 'middle_name', 'position', 'phone', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'role_id' => 'Role ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'position' => 'Position',
            'gender' => 'Gender',
            'image' => 'Image',
            'phone' => 'Phone',
            'member_status' => 'Member Status',
            'department_id' => 'Department ID',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'role_id']);
    }
}
