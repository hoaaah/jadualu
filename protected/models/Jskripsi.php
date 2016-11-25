<?php

/**
 * This is the model class for table "jskripsi".
 *
 * The followings are the available columns in table 'jskripsi':
 * @property integer $id
 * @property integer $periode_id
 * @property integer $mahasiswa_id
 * @property string $bidang_skripsi
 * @property string $judul
 * @property string $tahun
 * @property string $tanggal_pengesahan
 * @property string $created_at
 * @property string $user_id
 * @property integer $dosen_materi
 * @property integer $dosen_teknis
 *
 * The followings are the available model relations:
 * @property Jperiode $periode
 * @property RefMahasiswa $mahasiswa
 * @property Puus $bidangSkripsi
 * @property JujianSkripsi[] $jujianSkripsis
 * @property JujianSkripsiDuty[] $jujianSkripsiDuties
 */
class Jskripsi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jskripsi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periode_id, mahasiswa_id, dosen_materi, dosen_teknis', 'numerical', 'integerOnly'=>true),
			array('bidang_skripsi', 'length', 'max'=>10),
			array('tahun', 'length', 'max'=>4),
			array('judul, tanggal_pengesahan, created_at, user_id', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, periode_id, mahasiswa_id, bidang_skripsi, judul, tahun, tanggal_pengesahan, created_at, user_id, dosen_materi, dosen_teknis', 'safe', 'on'=>'search'),
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
			'mahasiswa' => array(self::BELONGS_TO, 'RefMahasiswa', 'mahasiswa_id'),
			'puus' => array(self::BELONGS_TO, 'Puus', 'bidang_skripsi'),
			'dosenmateri' => array(self::BELONGS_TO, 'Dosen', 'dosen_materi'),
			'dosenteknis' => array(self::BELONGS_TO, 'Dosen', 'dosen_teknis'),
			'jujianSkripsis' => array(self::HAS_MANY, 'JujianSkripsi', 'skripsi_id'),
			'jujianSkripsiDuties' => array(self::HAS_MANY, 'JujianSkripsiDuty', 'ujian_skripsi_id'),
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
			'mahasiswa_id' => 'Mahasiswa',
			'bidang_skripsi' => 'Bidang Skripsi',
			'judul' => 'Judul',
			'tahun' => 'Tahun',
			'tanggal_pengesahan' => 'Tanggal Pengesahan',
			'created_at' => 'Created At',
			'user_id' => 'User',
			'dosen_materi' => 'Dosen Materi',
			'dosen_teknis' => 'Dosen Teknis',
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
		$criteria->compare('mahasiswa_id',$this->mahasiswa_id);
		$criteria->compare('bidang_skripsi',$this->bidang_skripsi,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('tahun',$this->tahun,true);
		$criteria->compare('tanggal_pengesahan',$this->tanggal_pengesahan,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('dosen_materi',$this->dosen_materi);
		$criteria->compare('dosen_teknis',$this->dosen_teknis);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jskripsi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
