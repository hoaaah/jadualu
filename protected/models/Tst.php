<?php

/**
 * This is the model class for table "tst".
 *
 * The followings are the available columns in table 'tst':
 * @property integer $id
 * @property integer $pwk_id
 * @property integer $bidang_id
 * @property integer $rkt_id
 * @property string $rkt_ur
 * @property integer $rkt_thn
 * @property integer $disposisi_id
 * @property string $nkpt
 * @property string $nkpt_tgl
 * @property string $objek
 * @property integer $objek_id
 * @property string $hal
 * @property string $kp
 * @property string $kp_tgl
 * @property string $hp
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $tl1
 * @property string $tgl_tl1
 * @property string $no_st
 * @property string $tl2
 * @property string $tgl_tl2
 * @property string $tl3
 * @property string $tgl_tl3
 * @property string $tgl_st
 * @property integer $pembiayaan_penugasan
 * @property string $created
 * @property string $updated
 * @property integer $user_id
 * @property string $no_SPD
 * @property string $tgl_spd
 * @property string $spd_rampung
 * @property string $input_siapda
 */
class Tst extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tst the static model class
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
		return 'tst';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pwk_id, bidang_id, rkt_id, rkt_thn, disposisi_id, objek_id, pembiayaan_penugasan, user_id', 'numerical', 'integerOnly'=>true),
			array('rkt_ur, nkpt, tl1, tl2, tl3', 'length', 'max'=>30),
			array('objek, no_st, no_SPD', 'length', 'max'=>50),
			array('hal', 'length', 'max'=>100),
			array('kp', 'length', 'max'=>20),
			array('hp', 'length', 'max'=>2),
			array('nkpt_tgl, kp_tgl, tgl_mulai, tgl_selesai, tgl_tl1, tgl_tl2, tgl_tl3, tgl_st, created, updated, tgl_spd, spd_rampung, input_siapda', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pwk_id, bidang_id, rkt_id, rkt_ur, rkt_thn, disposisi_id, nkpt, nkpt_tgl, objek, objek_id, hal, kp, kp_tgl, hp, tgl_mulai, tgl_selesai, tl1, tgl_tl1, no_st, tl2, tgl_tl2, tl3, tgl_tl3, tgl_st, pembiayaan_penugasan, created, updated, user_id, no_SPD, tgl_spd, spd_rampung, input_siapda', 'safe', 'on'=>'search'),
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
			'pwk_id' => 'Pwk',
			'bidang_id' => 'Bidang',
			'rkt_id' => 'Rkt',
			'rkt_ur' => 'Rkt Ur',
			'rkt_thn' => 'Rkt Thn',
			'disposisi_id' => 'Disposisi',
			'nkpt' => 'Nkpt',
			'nkpt_tgl' => 'Nkpt Tgl',
			'objek' => 'Objek',
			'objek_id' => 'Objek',
			'hal' => 'Hal',
			'kp' => 'Kp',
			'kp_tgl' => 'Kp Tgl',
			'hp' => 'Hp',
			'tgl_mulai' => 'Tgl Mulai',
			'tgl_selesai' => 'Tgl Selesai',
			'tl1' => 'Tl1',
			'tgl_tl1' => 'Tgl Tl1',
			'no_st' => 'No St',
			'tl2' => 'Tl2',
			'tgl_tl2' => 'Tgl Tl2',
			'tl3' => 'Tl3',
			'tgl_tl3' => 'Tgl Tl3',
			'tgl_st' => 'Tgl St',
			'pembiayaan_penugasan' => 'Pembiayaan Penugasan',
			'created' => 'Created',
			'updated' => 'Updated',
			'user_id' => 'User',
			'no_SPD' => 'No Spd',
			'tgl_spd' => 'Tgl Spd',
			'spd_rampung' => 'Spd Rampung',
			'input_siapda' => 'Input Siapda',
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
		$criteria->compare('pwk_id',$this->pwk_id);
		$criteria->compare('bidang_id',$this->bidang_id);
		$criteria->compare('rkt_id',$this->rkt_id);
		$criteria->compare('rkt_ur',$this->rkt_ur,true);
		$criteria->compare('rkt_thn',$this->rkt_thn);
		$criteria->compare('disposisi_id',$this->disposisi_id);
		$criteria->compare('nkpt',$this->nkpt,true);
		$criteria->compare('nkpt_tgl',$this->nkpt_tgl,true);
		$criteria->compare('objek',$this->objek,true);
		$criteria->compare('objek_id',$this->objek_id);
		$criteria->compare('hal',$this->hal,true);
		$criteria->compare('kp',$this->kp,true);
		$criteria->compare('kp_tgl',$this->kp_tgl,true);
		$criteria->compare('hp',$this->hp,true);
		$criteria->compare('tgl_mulai',$this->tgl_mulai,true);
		$criteria->compare('tgl_selesai',$this->tgl_selesai,true);
		$criteria->compare('tl1',$this->tl1,true);
		$criteria->compare('tgl_tl1',$this->tgl_tl1,true);
		$criteria->compare('no_st',$this->no_st,true);
		$criteria->compare('tl2',$this->tl2,true);
		$criteria->compare('tgl_tl2',$this->tgl_tl2,true);
		$criteria->compare('tl3',$this->tl3,true);
		$criteria->compare('tgl_tl3',$this->tgl_tl3,true);
		$criteria->compare('tgl_st',$this->tgl_st,true);
		$criteria->compare('pembiayaan_penugasan',$this->pembiayaan_penugasan);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('no_SPD',$this->no_SPD,true);
		$criteria->compare('tgl_spd',$this->tgl_spd,true);
		$criteria->compare('spd_rampung',$this->spd_rampung,true);
		$criteria->compare('input_siapda',$this->input_siapda,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}