<?php

/**
 * This is the model class for table "ref_dosen".
 *
 * The followings are the available columns in table 'ref_dosen':
 * @property integer $id
 * @property string $name
 * @property string $degree_titles
 * @property string $nip
 * @property string $instansi
 * @property string $contact
 * @property string $pros
 * @property string $cons
 */
class Dosen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ref_dosen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, instansi', 'length', 'max'=>50),
			array('degree_titles, spesialisasi', 'length', 'max'=>100),
			array('nip', 'length', 'max'=>18),
			array('contact', 'length', 'max'=>30),
			array('pros, cons', 'length', 'max'=>10000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, degree_titles,spesialisasi, nip, instansi, contact, pros, cons', 'safe', 'on'=>'search'),
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
			'name' => 'Nama',
			'degree_titles' => 'Nama dengan Gelar',
			'nip' => 'NIP',
			'instansi' => 'Instansi Asal',
			'contact' => 'No Kontak',
			'spesialisasi' => 'Spesialisasi Bimbingan',
			'pros' => 'Pros',
			'cons' => 'Cons',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('degree_titles',$this->degree_titles,true);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('instansi',$this->instansi,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('spesialisasi',$this->spesialisasi,true);
		$criteria->compare('pros',$this->pros,true);
		$criteria->compare('cons',$this->cons,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dosen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
