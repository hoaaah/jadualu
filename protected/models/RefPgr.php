<?php

/**
 * This is the model class for table "ref_pgr".
 *
 * The followings are the available columns in table 'ref_pgr':
 * @property string $gol
 * @property string $ruang
 * @property string $pangkat
 */
class RefPgr extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RefPgr the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ref_pgr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gol', 'length', 'max'=>3),
			array('ruang', 'length', 'max'=>1),
			array('pangkat', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gol, ruang, pangkat', 'safe', 'on'=>'search'),
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
			'gol' => 'Gol',
			'ruang' => 'Ruang',
			'pangkat' => 'Pangkat',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('gol',$this->gol,true);
		$criteria->compare('ruang',$this->ruang,true);
		$criteria->compare('pangkat',$this->pangkat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}