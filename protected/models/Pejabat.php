<?php

/**
 * This is the model class for table "pejabat_kpr".
 *
 * The followings are the available columns in table 'pejabat_kpr':
 * @property integer $id
 * @property integer $tahun
 * @property string $name
 * @property string $NIP
 * @property string $jabatan
 * @property integer $pegawai_id
 */
class Pejabat extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pejabat the static model class
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
		return 'pejabat_kpr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tahun, pegawai_id', 'numerical', 'integerOnly'=>true),
			array('name, jabatan', 'length', 'max'=>50),
			array('NIP', 'length', 'max'=>18),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tahun, name, NIP, jabatan, pegawai_id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'tahun' => 'Tahun',
			'name' => 'Name',
			'NIP' => 'Nip',
			'jabatan' => 'Jabatan',
			'pegawai_id' => 'Pegawai',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('tahun',$this->tahun);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('NIP',$this->NIP,true);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('pegawai_id',$this->pegawai_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}