<?php

/**
 * This is the model class for table "tcuti_izin".
 *
 * The followings are the available columns in table 'tcuti_izin':
 * @property integer $id
 * @property integer $mohon_id
 * @property integer $appr
 * @property string $catatan
 * @property string $keputusan
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property TcutiMohon $mohon
 */
class TcutiIzin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TcutiIzin the static model class
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
		return 'tcuti_izin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mohon_id,jml_hari, appr, user_id', 'numerical', 'integerOnly'=>true),
			array('nomor, catatan, keputusan, jabatan_penandatangan, penandatangan, nip_penandatangan', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id,nomor, mohon_id, jml_hari, tanggal, appr, catatan, keputusan, user_id', 'safe', 'on'=>'search'),
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
			'mohon' => array(self::BELONGS_TO, 'TcutiMohon', 'mohon_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mohon_id' => 'Mohon',
			'jml_hari' => 'Jumlah Hari',
			'appr' => 'Appr',
			'catatan' => 'Catatan',
			'keputusan' => 'Keputusan',
			'jabatan_penandatangan'=> 'Jabatan TTD',
			'penandatangan'=>'Ditandatangani Oleh',
			'nip_penandatangan'=>'NIP TTD',
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
		$criteria->compare('mohon_id',$this->mohon_id);
		$criteria->compare('appr',$this->appr);
		$criteria->compare('catatan',$this->catatan,true);
		$criteria->compare('keputusan',$this->keputusan,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
 	protected function afterFind ()
    {

                if($this->tanggal <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tanggal);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tanggal = date ('d-m-Y', $mk);
                }
				

								        
        return parent::afterFind ();
    }

    protected function beforeSave ()
    {

				//untuk tanggal
                if($this->tanggal <> '')
                {
                        // mise en forme de tetap_tanggal
                list($d, $m, $y) = explode('-', $this->tanggal);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tanggal = date ('Y-m-d', $mk);
                }

/*				if(($sisa_cuti_tahunan - $this->jml_hari) < 0){
					return false;
				}
				*/
        return parent::beforeSave ();
    } 		
}