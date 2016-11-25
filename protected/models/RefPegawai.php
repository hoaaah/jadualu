<?php

/**
 * This is the model class for table "ref_pegawai".
 *
 * The followings are the available columns in table 'ref_pegawai':
 * @property integer $id
 * @property string $name
 * @property string $nip
 * @property string $pangkat
 * @property string $gol
 * @property string $ruang
 * @property string $jabatan
 * @property string $satker
 * @property integer $bidang_id
 * @property integer $subbidang_id
 * @property string $karpeg
 * @property string $sex
 * @property string $agama
 * @property string $tmt
 * @property string $peran
 * @property string $reg_ak
 * @property string $pendidikan_p
 * @property string $pendidikan
 * @property string $stat
 * @property string $tgl_lahir
 */
class RefPegawai extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RefPegawai the static model class
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
		return 'ref_pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bidang_id', 'numerical', 'integerOnly'=>true),
			array('name, pangkat, jabatan, satker', 'length', 'max'=>50),
			array('nip', 'length', 'max'=>18),
			array('gol', 'length', 'max'=>3),
			array('ruang, sex', 'length', 'max'=>1),
			array('karpeg, agama, reg_ak, pendidikan_p, pendidikan', 'length', 'max'=>20),
			array('peran', 'length', 'max'=>30),
			array('stat', 'length', 'max'=>5),
			array('tmt, tgl_lahir', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, nip, pangkat, gol, ruang, jabatan, satker, bidang_id, subbidang_id, karpeg, sex, agama, tmt, peran, reg_ak, pendidikan_p, pendidikan, stat, tgl_lahir', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'nip' => 'Nip',
			'pangkat' => 'Pangkat',
			'gol' => 'Gol',
			'ruang' => 'Ruang',
			'jabatan' => 'Jabatan',
			'satker' => 'Satker',
			'bidang_id' => 'Bidang',
			'subbidang_id' => 'Subbidang',
			'karpeg' => 'Karpeg',
			'sex' => 'Sex',
			'agama' => 'Agama',
			'tmt' => 'Tmt',
			'peran' => 'Peran',
			'reg_ak' => 'Reg Ak',
			'pendidikan_p' => 'Pendidikan Detail',
			'pendidikan' => 'Pendidikan',
			'stat' => 'Stat',
			'tgl_lahir' => 'Tgl Lahir',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('pangkat',$this->pangkat,true);
		$criteria->compare('gol',$this->gol,true);
		$criteria->compare('ruang',$this->ruang,true);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('satker',$this->satker,true);
		$criteria->compare('bidang_id',$this->bidang_id);
		$criteria->compare('subbidang_id',$this->subbidang_id);
		$criteria->compare('karpeg',$this->karpeg,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('tmt',$this->tmt,true);
		$criteria->compare('peran',$this->peran,true);
		$criteria->compare('reg_ak',$this->reg_ak,true);
		$criteria->compare('pendidikan_p',$this->pendidikan_p,true);
		$criteria->compare('pendidikan',$this->pendidikan,true);
		$criteria->compare('stat',$this->stat,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	

 	protected function afterFind ()
    {

                if($this->tgl_lahir <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tgl_lahir);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_lahir = date ('d-m-Y', $mk);
                }
                
				if($this->tmt<> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tmt);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tmt = date ('d-m-Y', $mk);
                }
   
        return parent::afterFind ();
    }

    protected function beforeSave ()
    {

				//untuk tanggal
                if($this->tgl_lahir <> '')
                {
                        // mise en forme de tetap_tanggal
                list($d, $m, $y) = explode('-', $this->tgl_lahir);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_lahir = date ('Y-m-d', $mk);
                }
				
                if($this->tmt <> '')
                {
                        // mise en forme de tetap_tanggal
                list($d, $m, $y) = explode('-', $this->tmt);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tmt = date ('Y-m-d', $mk);
                }
								


        return parent::beforeSave ();
    } 	
			
	
	
	
}