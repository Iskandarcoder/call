<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appeal".
 *
 * @property int $id Регистрационный номер
 * @property string $time_to_call Время звонка
 * @property int $appeal форма обращение 1-обращение; 2-жалоба; 3-перенаправление;
 * @property int $complaint Жалоба
 * @property int $redirection Перенаправление
 * @property string $description Краткое содержание  
 * @property string $surname Фамилия
 * @property string $name Имя
 * @property string $country Страна
 * @property string $city Город/область
 * @property string $work_number Рабочий номер
 * @property string $mobile_number мобильный номер
 * @property string $passport_data Паспортные данные
 * @property string $name_department Наименование отдела
 * @property string responsible фамилия ответственный сотрудник
 * @property string $anketa_call анкеты присвоенный в Call-center 
 * @property int $question_resolved Вопрос решен
 * @property int $question_no_resolved Вопрос не решен
 * @property int $process_of_solving В процессе решения
 * @property string $note Примечание (Ответ Оператора)
 * @property int $resp_operator ответственный оператор
 * @property string $connect Соединил
 * @property string $no_connect Не соединил
 * @property int $to_email Отправки информации на e-mail почту сотрудника
 * @property string $refusal_answer сотрудник отказались отвечать
 * @property int $to_mem_email Отправка информации на e-mail почту сотрудника
 * @property string $members Перенаправление сотрудника
 */
class Appeal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appeal';
    }

    /**
     * {@inheritdoc}
     */
     public function rules()
    {
        return [
            [['time_to_call'], 'safe'],
            [['appeal', 'complaint', 'redirection', 'description', 'surname', 'name', 'country_id', 'city_id', 'work_number', 'mobile_number', 'passport_data', 'name_department', 'responsible', 'anketa_call', 'question_resolved', 'question_no_resolved', 'process_of_solving', 'note', 'resp_operator', 'connect', 'no_connect', 'to_email', 'refusal_answer', 'to_mem_email', 'members'], 'required'],
            [['appeal', 'country_id', 'city_id', 'complaint', 'redirection', 'responsible', 'question_resolved', 'question_no_resolved', 'process_of_solving', 'resp_operator', 'to_email', 'to_mem_email'], 'integer'],
            [['description', 'note', 'members'], 'string'],
            [['surname', 'name'], 'string', 'max' => 50],
            [['work_number', 'mobile_number', 'passport_data', 'name_department', 'anketa_call', 'connect', 'no_connect', 'refusal_answer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time_to_call' => 'Time To Call',
            'appeal' => 'Appeal',
            'complaint' => 'Complaint',
            'redirection' => 'Redirection',
            'description' => 'Description',
            'surname' => 'Surname',
            'name' => 'Name',
            'country_id' => 'Country',
            'city_id' => 'City',
            'work_number' => 'Work Number',
            'mobile_number' => 'Mobile Number',
            'passport_data' => 'Passport Data',
            'name_department' => 'Name Department',
            'responsible' => 'Responsible',
            'anketa_call' => 'Anketa Call',
            'question_resolved' => 'Question Resolved',
            'question_no_resolved' => 'Question No Resolved',
            'process_of_solving' => 'Process Of Solving',
            'note' => 'Note',
            'resp_operator' => 'Resp Operator',
            'connect' => 'Connect',
            'no_connect' => 'No Connect',
            'to_email' => 'To Email',
            'refusal_answer' => 'Refusal Answer',
            'to_mem_email' => 'To Mem Email',
            'members' => 'Members',
        ];
    }
    public function getListAppeal(){
        return $this->hasOne(ListAppeal::className(),['id'=>'appeal']);
    }

    public function getCountries(){
        return $this->hasOne(Country::className(),['id'=>'country_id']);
    }

    public function getRegions(){
        return $this->hasOne(Region::className(),['id'=>'city_id']);
    }

    public function getDepartment(){
        return $this->hasOne(Department::className(),['id'=>'name_department']);
    }

    public function getUser(){
        return $this->hasOne(Department::className(),['id'=>'name_department']);
    }
}
