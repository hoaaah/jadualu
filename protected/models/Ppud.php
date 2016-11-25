<?php

/**
 * This is the model class for table "ppud".
 *
 * The followings are the available columns in table 'ppud':
 * @property string $id
 * @property string $puud
 * @property string $no
 * @property string $tahun
 * @property string $tentang
 * @property string $tag
 * @property string $files
 * @property string $tetap_province
 * @property string $tetap_kabkot
 * @property string $tetap_tanggal
 * @property string $user_id
 * @property string $created
 * @property string $updated
 */
class Ppud extends CActiveRecord
{
	
#	public $password2;
#	public $verifyCode;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ppud the static model class
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
		return 'ppud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	 
	 
    public $image;
    // ... other attributes tambahan untuk upload file
 
	 
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('puud, no, nama, tahun, tentang, files', 'required'),
			array('files', 'file', 'allowEmpty' => true, 'safe'=>true, 'types' => 'jpg, jpeg, gif, png, pdf'),
			array('puud', 'length', 'max'=>45),
			array('no, user_id', 'length', 'max'=>30),
			array('nama, pembimbing1, pembimbing2, ketua_penguji, penguji1, penguji2', 'length', 'max'=>45),
			array('tahun', 'length', 'max'=>4),
			array('tentang, files', 'length', 'max'=>500),
			array('tag', 'length', 'max'=>1000),			
			array('tetap_province, tetap_kabkot', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
#			array('id, puud, no, tahun, tentang, tag, files, tetap_province, tetap_kabkot, tetap_tanggal, user_id, created, updated', 'safe', 'on'=>'search'),
			array('no, nama, tahun, tentang, tag, files, tetap_province, tetap_kabkot, tetap_tanggal, user_id, created, updated', 'safe', 'on'=>'search'),			
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
					'puudid' => array(self::BELONGS_TO, 'Puus', 'puud'),
					'userid' => array(self::BELONGS_TO, 'User', 'user_id'),					
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'puud' => 'Bidang Skripsi',
			'nama' => 'Nama',
			'no' => 'NPM',
			'pembimbing1' => 'Pembimbing 1',
			'pembimbing2' => 'Pembimbing 2',
			'ketua_penguji' => 'Ketua Penguji',
			'penguji1' => 'Anggota Penguji 1',
			'penguji2' => 'Anggota Penguji 2',
			'puuddetail' => 'KOSONGKAN',
			'tahun' => 'Tahun',
			'tentang' => 'Judul',
			'tag' => 'Abstraksi',
			'files' => 'Files',
			'tetap_province' => 'Tetap Province',
			'tetap_kabkot' => 'Ditetapkan di',
			'tetap_tanggal' => 'Tetap Tanggal',
			'user_id' => 'User',
			'created' => 'Created',
			'updated' => 'Updated',
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

		$criteria->compare('id',$this->id,true);
#		$criteria->compare('puud',$this->puud,true);
		$criteria->compare('puud',$this->puud,false);
		$criteria->compare('no',$this->no,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tahun',$this->tahun,true);
#		$criteria->compare('tentang',$this->tentang,true);	
		$criteria->compare('CONCAT_WS("",no, tentang, tahun)',$this->tentang,true);			
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('files',$this->files,true);
		$criteria->compare('tetap_province',$this->tetap_province,true);
		$criteria->compare('tetap_kabkot',$this->tetap_kabkot,true);
		$criteria->compare('tetap_tanggal',$this->tetap_tanggal,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
/*	
protected function afterFind(){
    parent::afterFind();
    $this->tetap_tanggal=date('d F Y', strtotime(str_replace("-", "", $this->tetap_tanggal)));       
}

protected function beforeSave(){
    if(parent::beforeSave()){
        $this->tetap_tanggal=date('Y-m-d', strtotime(str_replace("", "", $this->tetap_tanggal)));
        return TRUE;
    }
    else return false;
}
*/

 protected function afterFind ()
    {

                if($this->tetap_tanggal <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tetap_tanggal);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tetap_tanggal = date ('d-m-Y', $mk);
                }
        
        return parent::afterFind ();
    }

    protected function beforeSave ()
    {
                if($this->tetap_tanggal <> '')
                {
                        // mise en forme de tetap_tanggal
                list($d, $m, $y) = explode('-', $this->tetap_tanggal);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tetap_tanggal = date ('Y-m-d', $mk);
                }
                                
        return parent::beforeSave ();
    } 	
}
