<?php

/**
 * This is the model class for table "emp".
 *
 * The followings are the available columns in table 'emp':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'emp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.

		// Password field is NOT mandatory on update to allow users to change
		// there data without entering password again and again.
		return array(
			array('name,password', 'required','on' => 'create'),
			array('name', 'required','on' => 'update'),
			array('name, email, password', 'length', 'max'=>255),
			array('email', 'email'),
			array('email', 'unique'),
			array('password', 'length', 'min'=> 8),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, email', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id); 

		$criteria->compare('name',$this->name,true);

		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider('Employee', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}