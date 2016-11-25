<?php

/**
 * This is the model class for table "jperiode".
 *
 * The followings are the available columns in table 'jperiode':
 * @property integer $id
 * @property string $periode
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property JlokasiUjian[] $jlokasiUjians
 * @property Jskripsi[] $jskripsis
 * @property JtanggalUjian[] $jtanggalUjians
 * @property JujianSkripsi[] $jujianSkripsis
 */
class Jperiode extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jperiode';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periode', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('periode', 'length', 'max'=>50),
			array('keterangan', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, periode, keterangan, created_at, updated_at, user_id', 'safe', 'on'=>'search'),
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
			'jlokasiUjians' => array(self::HAS_MANY, 'JlokasiUjian', 'periode_id'),
			'jskripsis' => array(self::HAS_MANY, 'Jskripsi', 'periode_id'),
			'jtanggalUjians' => array(self::HAS_MANY, 'JtanggalUjian', 'periode_id'),
			'jujianSkripsis' => array(self::HAS_MANY, 'JujianSkripsi', 'periode_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'periode' => 'Periode',
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
		$criteria->compare('periode',$this->periode,true);
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
	 * @return Jperiode the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
