<?php

/**
 * This is the model class for table "tst_rinc".
 *
 * The followings are the available columns in table 'tst_rinc':
 * @property integer $id
 * @property integer $st_id
 * @property string $pegawai_id
 * @property integer $peran_id
 * @property string $peran_ur
 * @property string $hp
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $created
 * @property string $updated
 * @property integer $user_id
 */
class TstRinc extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TstRinc the static model class
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
		return 'tst_rinc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('st_id, peran_id, user_id', 'numerical', 'integerOnly'=>true),
			array('pegawai_id', 'length', 'max'=>18),
			array('peran_ur', 'length', 'max'=>30),
			array('hp', 'length', 'max'=>2),
			array('tgl_mulai, tgl_selesai, created, updated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, st_id, pegawai_id, peran_id, peran_ur, hp, tgl_mulai, tgl_selesai, created, updated, user_id', 'safe', 'on'=>'search'),
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
			'st_id' => 'St',
			'pegawai_id' => 'Pegawai',
			'peran_id' => 'Peran',
			'peran_ur' => 'Peran Ur',
			'hp' => 'Hp',
			'tgl_mulai' => 'Tgl Mulai',
			'tgl_selesai' => 'Tgl Selesai',
			'created' => 'Created',
			'updated' => 'Updated',
			'user_id' => 'User',
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
		$criteria->compare('st_id',$this->st_id);
		$criteria->compare('pegawai_id',$this->pegawai_id,true);
		$criteria->compare('peran_id',$this->peran_id);
		$criteria->compare('peran_ur',$this->peran_ur,true);
		$criteria->compare('hp',$this->hp,true);
		$criteria->compare('tgl_mulai',$this->tgl_mulai,true);
		$criteria->compare('tgl_selesai',$this->tgl_selesai,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}