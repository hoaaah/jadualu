<?php

/**
 * This is the model class for table "jujian_skripsi_duty".
 *
 * The followings are the available columns in table 'jujian_skripsi_duty':
 * @property integer $id
 * @property integer $ujian_skripsi_id
 * @property integer $peran_id
 * @property integer $dosen_id
 *
 * The followings are the available model relations:
 * @property Jskripsi $ujianSkripsi
 * @property Jperan $peran
 * @property RefDosen $dosen
 */
class JujianSkripsiDuty extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jujian_skripsi_duty';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ujian_skripsi_id, peran_id, dosen_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ujian_skripsi_id, peran_id, dosen_id', 'safe', 'on'=>'search'),
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
			'ujianSkripsi' => array(self::BELONGS_TO, 'Jskripsi', 'ujian_skripsi_id'),
			'peran' => array(self::BELONGS_TO, 'Jperan', 'peran_id'),
			'dosen' => array(self::BELONGS_TO, 'Dosen', 'dosen_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ujian_skripsi_id' => 'Ujian Skripsi',
			'peran_id' => 'Peran',
			'dosen_id' => 'Dosen',
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
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('ujian_skripsi_id',$this->ujian_skripsi_id);
		$criteria->compare('peran_id',$this->peran_id);
		$criteria->compare('dosen_id',$this->dosen_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JujianSkripsiDuty the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
