<?php

/**
 * This is the model class for table "tdisposisi".
 *
 * The followings are the available columns in table 'tdisposisi':
 * @property integer $id
 * @property integer $kd_disposisi
 * @property string $tgl_terima
 * @property string $no_surat
 * @property integer $asal_id
 * @property string $asal_ur
 * @property string $hal
 * @property string $lampiran
 * @property string $tl1
 * @property string $tl1_ur
 * @property string $tl1_tgl
 * @property string $tl1_tujuan
 * @property string $tl2
 * @property string $tl2_ur
 * @property string $tl2_tgl
 * @property string $tl2_tujuan
 * @property string $tl3
 * @property string $tl3_ur
 * @property string $tl3_tgl
 * @property string $tl3_tujuan
 * @property string $tl_final
 * @property string $tlg_tl_final
 * @property string $files
 * @property string $created
 * @property string $updated
 * @property integer $user_id
 */
class Tdisposisi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tdisposisi the static model class
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
		return 'tdisposisi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_disposisi, user_id', 'numerical', 'integerOnly'=>true),
			array('no_surat, asal_id, tl1, tl1_tujuan, tl2, tl2_tujuan, tl3, tl3_tujuan, tl_final', 'length', 'max'=>50),
			array('asal_ur, lampiran', 'length', 'max'=>20),
			array('hal, files', 'length', 'max'=>100),
			array('tl1_ur, tl2_ur, tl3_ur', 'length', 'max'=>200),
			array('tgl_terima, tl1_tgl, tl2_tgl, tl3_tgl, tgl_tl_final, created, updated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, kd_disposisi, tgl_terima, no_surat, asal_id, asal_ur, hal, lampiran, tl1, tl1_ur, tl1_tgl, tl1_tujuan, tl2, tl2_ur, tl2_tgl, tl2_tujuan, tl3, tl3_ur, tl3_tgl, tl3_tujuan, tl_final, tgl_tl_final, files, created, updated, user_id', 'safe', 'on'=>'search'),
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
			'kd_disposisi' => 'Jenis Disposisi',
			'tgl_terima' => 'Tgl Terima',
			'no_surat' => 'No Surat',
			'tgl_surat' => 'Tgl Surat',			
			'asal_id' => 'Asal Surat',
			'asal_ur' => 'Uraian Asal Surat',
			'hal' => 'Hal',
			'lampiran' => 'Lampiran',
			'tl1' => 'Kepala Unit Kerja',
			'tl1_ur' => 'Uraian Disposisi',
			'tl1_tgl' => 'Tanggal Disposisi',
			'tl1_tujuan' => 'Tujuan Disposisi TL2',
			'tl2' => 'Tl2',
			'tl2_ur' => 'Tl2 Ur',
			'tl2_tgl' => 'Tl2 Tgl',
			'tl2_tujuan' => 'Tl2 Tujuan',
			'tl3' => 'Tl3',
			'tl3_ur' => 'Tl3 Ur',
			'tl3_tgl' => 'Tl3 Tgl',
			'tl3_tujuan' => 'Tl3 Tujuan',
			'tl_final' => 'Tl Final',
			'tgl_tl_final' => 'Tanggal Tl Final',
			'files' => 'Files',
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
		$criteria->compare('kd_disposisi',$this->kd_disposisi);
		$criteria->compare('tgl_terima',$this->tgl_terima,true);
		$criteria->compare('no_surat',$this->no_surat,true);
		$criteria->compare('asal_id',$this->asal_id);
		$criteria->compare('asal_ur',$this->asal_ur,true);
		$criteria->compare('hal',$this->hal,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('tl1',$this->tl1,true);
		$criteria->compare('tl1_ur',$this->tl1_ur,true);
		$criteria->compare('tl1_tgl',$this->tl1_tgl,true);
		$criteria->compare('tl1_tujuan',$this->tl1_tujuan,true);
		$criteria->compare('tl2',$this->tl2,true);
		$criteria->compare('tl2_ur',$this->tl2_ur,true);
		$criteria->compare('tl2_tgl',$this->tl2_tgl,true);
		$criteria->compare('tl2_tujuan',$this->tl2_tujuan,true);
		$criteria->compare('tl3',$this->tl3,true);
		$criteria->compare('tl3_ur',$this->tl3_ur,true);
		$criteria->compare('tl3_tgl',$this->tl3_tgl,true);
		$criteria->compare('tl3_tujuan',$this->tl3_tujuan,true);
		$criteria->compare('tl_final',$this->tl_final,true);
		$criteria->compare('tgl_tl_final',$this->tgl_tl_final,true);
		$criteria->compare('files',$this->files,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function afterFind ()
    {

                if($this->tgl_terima <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tgl_terima);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_terima = date ('d-m-Y', $mk);
                }
                if($this->tl1_tgl <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tl1_tgl);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tl1_tgl = date ('d-m-Y', $mk);
                }
                if($this->tl2_tgl <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tl2_tgl);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tl2_tgl = date ('d-m-Y', $mk);
                }
                if($this->tl3_tgl <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tl3_tgl);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tl3_tgl = date ('d-m-Y', $mk);
                }
                if($this->tgl_tl_final <> '')
                {
                        // mise en forme de tetap_tanggal
            list($y, $m, $d) = explode('-', $this->tgl_tl_final);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->tgl_tl_final = date ('d-m-Y', $mk);
                }												    
					    
        return parent::afterFind ();
    }

    protected function beforeSave ()
    {
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
                                
        return parent::beforeSave ();
    } 			
}