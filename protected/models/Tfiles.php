<?php

/**
 * This is the model class for table "tfiles".
 *
 * The followings are the available columns in table 'tfiles':
 * @property string $id
 * @property integer $bidang_id
 * @property string $category_id
 * @property integer $user_dest
 * @property string $no
 * @property string $tahun
 * @property string $tentang
 * @property string $tag
 * @property string $files
 * @property string $user_id
 * @property string $created
 * @property string $updated
 */
class Tfiles extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tfiles the static model class
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
		return 'tfiles';
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
			array('category_id, tahun, tentang, files, user_id', 'required'),
			array('bidang_id, user_dest', 'numerical', 'integerOnly'=>true),
			array('files', 'file', 'allowEmpty' => true, 'safe'=>true, 'types' => 'jpg, jpeg, gif, png, pdf, doc, docx, xls, xlsx, zip, rar, tar, targz, php, html, htm, mp4, ppt, pptx'),			
			array('category_id', 'length', 'max'=>11),
			array('no', 'length', 'max'=>100),
			array('tahun', 'length', 'max'=>4),
			array('tentang, tag, files', 'length', 'max'=>500),
			array('user_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, bidang_id, category_id, user_dest, no, tahun, tentang, tag, files, user_id, created, updated', 'safe', 'on'=>'search'),
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
					'bidangid' => array(self::BELONGS_TO, 'RefBidang', 'bidang_id'),
					'userid' => array(self::BELONGS_TO, 'User', 'user_id'),
					'categoryid' => array(self::BELONGS_TO, 'RefCategory', 'category_id'),					
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'bidang_id' => 'Semester',
			'category_id' => 'Mata Kuliah',
			'user_dest' => 'User Dest',
			'no' => 'No',
			'tahun' => 'Tahun',
			'tentang' => 'Tentang',
			'tag' => 'Tag',
			'files' => 'Files',
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
		$criteria->compare('bidang_id',$this->bidang_id);
		$criteria->compare('category_id',$this->category_id,true);
		$criteria->compare('user_dest',$this->user_dest);
		$criteria->compare('no',$this->no,true);
		$criteria->compare('tahun',$this->tahun,true);
		$criteria->compare('tentang',$this->tentang,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('files',$this->files,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
