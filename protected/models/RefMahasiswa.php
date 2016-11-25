<?php

/**
 * This is the model class for table "ref_mahasiswa".
 *
 * The followings are the available columns in table 'ref_mahasiswa':
 * @property integer $id
 * @property integer $user_id
 * @property string $nama
 * @property string $kelas
 * @property string $npm
 * @property string $tahun_masuk
 * @property string $tahun_kelulusan
 * @property integer $jurusan_id
 * @property string $instansi
 * @property string $contact
 * @property string $nip
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Jskripsi[] $jskripsis
 * @property JujianSkripsi[] $jujianSkripsis
 * @property RefJurusan $jurusan
 */
class RefMahasiswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ref_mahasiswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, jurusan_id', 'numerical', 'integerOnly'=>true),
			array('nama, instansi', 'length', 'max'=>100),
			array('kelas, contact', 'length', 'max'=>50),
			array('npm', 'length', 'max'=>12),
			array('tahun_masuk, tahun_kelulusan', 'length', 'max'=>4),
			array('nip', 'length', 'max'=>18),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, nama, kelas, npm, tahun_masuk, tahun_kelulusan, jurusan_id, instansi, contact, nip, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'jskripsis' => array(self::HAS_MANY, 'Jskripsi', 'mahasiswa_id'),
			'jujianSkripsis' => array(self::HAS_MANY, 'JujianSkripsi', 'mahasiswa_id'),
			'jurusan' => array(self::BELONGS_TO, 'RefJurusan', 'jurusan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'nama' => 'Nama',
			'kelas' => 'Kelas',
			'npm' => 'Npm',
			'tahun_masuk' => 'Tahun Masuk',
			'tahun_kelulusan' => 'Tahun Kelulusan',
			'jurusan_id' => 'Jurusan',
			'instansi' => 'Instansi',
			'contact' => 'Contact',
			'nip' => 'Nip',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('kelas',$this->kelas,true);
		$criteria->compare('npm',$this->npm,true);
		$criteria->compare('tahun_masuk',$this->tahun_masuk,true);
		$criteria->compare('tahun_kelulusan',$this->tahun_kelulusan,true);
		$criteria->compare('jurusan_id',$this->jurusan_id);
		$criteria->compare('instansi',$this->instansi,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RefMahasiswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
