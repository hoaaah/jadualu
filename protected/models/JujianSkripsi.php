<?php

/**
 * This is the model class for table "jujian_skripsi".
 *
 * The followings are the available columns in table 'jujian_skripsi':
 * @property integer $id
 * @property integer $periode_id
 * @property integer $skripsi_id
 * @property integer $mahasiswa_id
 * @property integer $tanggal_ujian
 * @property integer $waktu_ujian
 * @property integer $lokasi_ujian
 * @property string $keterangan
 * @property integer $kelulusan
 * @property string $nilai_ujian_skripsi
 * @property string $nilai_ujian_kompre
 *
 * The followings are the available model relations:
 * @property Jperiode $periode
 * @property Jskripsi $skripsi
 * @property RefMahasiswa $mahasiswa
 * @property JtanggalUjian $tanggalUjian
 * @property Jsession $waktuUjian
 * @property JlokasiUjian $lokasiUjian
 */
class JujianSkripsi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jujian_skripsi';
	}

	public $kodemahasiswa;
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periode_id, skripsi_id, mahasiswa_id, tanggal_ujian, waktu_ujian, lokasi_ujian, kelulusan', 'numerical', 'integerOnly'=>true),
			array('keterangan, kodemahasiswa', 'length', 'max'=>255),
			array('nilai_ujian_skripsi, nilai_ujian_kompre', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, periode_id, skripsi_id, mahasiswa_id, tanggal_ujian, waktu_ujian, lokasi_ujian, keterangan, kelulusan, nilai_ujian_skripsi, nilai_ujian_kompre', 'safe', 'on'=>'search'),
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
			'skripsi' => array(self::BELONGS_TO, 'Jskripsi', 'skripsi_id'),
			'mahasiswa' => array(self::BELONGS_TO, 'RefMahasiswa', 'mahasiswa_id'),
			'tanggalUjian' => array(self::BELONGS_TO, 'JtanggalUjian', 'tanggal_ujian'),
			'waktuUjian' => array(self::BELONGS_TO, 'Jsession', 'waktu_ujian'),
			'lokasiUjian' => array(self::BELONGS_TO, 'JlokasiUjian', 'lokasi_ujian'),
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
			'skripsi_id' => 'Skripsi',
			'mahasiswa_id' => 'Mahasiswa',
			'tanggal_ujian' => 'Tanggal Ujian',
			'waktu_ujian' => 'Waktu Ujian',
			'lokasi_ujian' => 'Lokasi Ujian',
			'keterangan' => 'Keterangan',
			'kelulusan' => 'Kelulusan',
			'nilai_ujian_skripsi' => 'Nilai Ujian Skripsi',
			'nilai_ujian_kompre' => 'Nilai Ujian Kompre',
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
		$criteria->compare('skripsi_id',$this->skripsi_id);
		$criteria->compare('mahasiswa_id',$this->mahasiswa_id);
		$criteria->compare('tanggal_ujian',$this->tanggal_ujian);
		$criteria->compare('waktu_ujian',$this->waktu_ujian);
		$criteria->compare('lokasi_ujian',$this->lokasi_ujian);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('kelulusan',$this->kelulusan);
		$criteria->compare('nilai_ujian_skripsi',$this->nilai_ujian_skripsi,true);
		$criteria->compare('nilai_ujian_kompre',$this->nilai_ujian_kompre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JujianSkripsi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
