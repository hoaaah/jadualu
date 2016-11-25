<?php

/**
 * This is the model class for table "jtanggal_ujian".
 *
 * The followings are the available columns in table 'jtanggal_ujian':
 * @property integer $id
 * @property integer $periode_id
 * @property integer $tahap
 * @property string $tanggal
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Jperiode $periode
 * @property Users $user
 * @property JujianSkripsi[] $jujianSkripsis
 */
class JtanggalUjian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jtanggal_ujian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periode_id, tahap, tanggal, user_id', 'required'),
			array('periode_id, tahap, user_id', 'numerical', 'integerOnly'=>true),
			array('keterangan', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, periode_id, tahap, tanggal, keterangan, created_at, updated_at, user_id', 'safe', 'on'=>'search'),
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
			'periode' => array(self::BELONGS_TO, 'Jperiode', 'periode_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'jujianSkripsis' => array(self::HAS_MANY, 'JujianSkripsi', 'tanggal_ujian'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'periode_id' => 'Periode',
			'tahap' => 'Tahap',
			'tanggal' => 'Tanggal',
			'keterangan' => 'Keterangan',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'user_id' => 'User',
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
		$criteria->compare('periode_id',$this->periode_id);
		$criteria->compare('tahap',$this->tahap);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JtanggalUjian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
