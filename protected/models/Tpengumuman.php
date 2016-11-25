<?php

/**
 * This is the model class for table "tpengumuman".
 *
 * The followings are the available columns in table 'tpengumuman':
 * @property integer $id
 * @property string $created
 * @property string $name
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property integer $bidang_id
 * @property integer $user_id
 */
class Tpengumuman extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tpengumuman the static model class
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
		return 'tpengumuman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bidang_id, user_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>1000),
			array('created, tgl_mulai, tgl_selesai', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created, name, tgl_mulai, tgl_selesai, bidang_id, user_id', 'safe', 'on'=>'search'),
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
			'created' => 'Created',
			'name' => 'Name',
			'tgl_mulai' => 'Tgl Mulai',
			'tgl_selesai' => 'Tgl Selesai',
			'bidang_id' => 'Bidang',
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
		$criteria->compare('created',$this->created,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tgl_mulai',$this->tgl_mulai,true);
		$criteria->compare('tgl_selesai',$this->tgl_selesai,true);
		$criteria->compare('bidang_id',$this->bidang_id);
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