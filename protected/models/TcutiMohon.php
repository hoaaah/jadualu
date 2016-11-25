<?php

/**
 * This is the model class for table "tcuti_mohon".
 *
 * The followings are the available columns in table 'tcuti_mohon':
 * @property integer $id
 * @property integer $pegawai_id
 * @property integer $cuti_id
 * @property integer $thn_cuti
 * @property integer $jml_hari
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $tgl_aju
 * @property string $alamat
 * @property string $ket
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property TcutiIzin[] $tcutiIzins
 * @property RefPegawai $pegawai
 */
class TcutiMohon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TcutiMohon the static model class
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
		return 'tcuti_mohon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pegawai_id, cuti_id, thn_cuti, jml_hari, user_id, kabag_tu', 'numerical', 'integerOnly'=>true),
			array('ket', 'length', 'max'=>100),
//			array('kabag_tu','boolean', 'trueValue' => 'on','allowEmpty' => false), //false not true!			
			array('tgl_mulai, tgl_selesai, tgl_aju, alamat', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pegawai_id, cuti_id, thn_cuti, jml_hari, tgl_mulai, tgl_selesai, tgl_aju, alamat, ket, user_id', 'safe', 'on'=>'search'),
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
			'tcutiIzins' => array(self::HAS_MANY, 'TcutiIzin', 'mohon_id'),
			'cutiid' => array(self::BELONGS_TO, 'RefCutiJn', 'cuti_id'),			
			'pegawai' => array(self::BELONGS_TO, 'RefPegawai', 'pegawai_id'),
			'users' => array(self::BELONGS_TO, 'User', 'user_id'),			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pegawai_id' => 'Nama Pegawai',
			'cuti_id' => 'Jenis Cuti',
			'thn_cuti' => 'Thn Cuti',
			'jml_hari' => 'Jml Hari',
			'tgl_mulai' => 'Tgl Mulai',
			'tgl_selesai' => 'Tgl Selesai',
			'tgl_aju' => 'Tgl Pengajuan',
			'alamat' => 'Alamat Selama Cuti',
			'ket' => 'Keterangan',
			'kabag_tu'=> 'Kepada Kabag?',
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
		$criteria->compare('pegawai_id',$this->pegawai_id);
		$criteria->compare('cuti_id',$this->cuti_id);
		$criteria->compare('thn_cuti',$this->thn_cuti);
		$criteria->compare('jml_hari',$this->jml_hari);
		$criteria->compare('tgl_mulai',$this->tgl_mulai,true);
		$criteria->compare('tgl_selesai',$this->tgl_selesai,true);
		$criteria->compare('tgl_aju',$this->tgl_aju,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('ket',$this->ket,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	

 	protected function afterFind ()
    {

                if($this->tgl_mulai <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tgl_mulai);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_mulai = date ('d-m-Y', $mk);
                }
				
                if($this->tgl_selesai <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tgl_selesai);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_selesai = date ('d-m-Y', $mk);
                }

                if($this->tgl_aju <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tgl_aju);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_aju = date ('d-m-Y', $mk);
                }
								        
        return parent::afterFind ();
    }

    protected function beforeSave ()
    {

				//untuk tanggal
                if($this->tgl_mulai <> '')
                {
                        // mise en forme de tetap_tanggal
                list($d, $m, $y) = explode('-', $this->tgl_mulai);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_mulai = date ('Y-m-d', $mk);
                }
				
                if($this->tgl_selesai <> '')
                {
                        // mise en forme de tetap_tanggal
                list($d, $m, $y) = explode('-', $this->tgl_selesai);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_selesai = date ('Y-m-d', $mk);
                }   
				if(Yii::app()->session['valid'] == 0){
					$this->addError('jml_hari', 'Jumlah hari harus sama dengan atau kurang dari saldo cuti.');
					return false;			
				}						
				if($this->tgl_selesai < $this->tgl_mulai){
					$this->addError('tgl_mulai', 'Ada yang salah dengan tanggal cuti anda.');					
					return false;			
				}
				if($this->tgl_mulai < $this->tgl_aju){
					$this->addError('tgl_mulai', 'Tanggal cuti harus lebih besar dari hari ini.');					
					return false;			
				}		
					
/*				if($this->jml_hari < 3){
					return false;
				}
	*/			
		

        return parent::beforeSave ();
    } 	
		
}