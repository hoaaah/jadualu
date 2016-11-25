<?php

class DosenController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public $Ctitle='Dosen';

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->cekAkses();		
		 $data= Yii::app()->db->createCommand('SELECT b.tanggal_ujian, c.tanggal,i.name AS waktu, h.kelas AS ruang, f.nama, e.judul FROM jujian_skripsi_duty a 
				LEFT JOIN jujian_skripsi b ON a.ujian_skripsi_id = b.id 
				LEFT JOIN jtanggal_ujian c ON b.tanggal_ujian = c.id
				LEFT JOIN jlokasi_ujian d ON b.lokasi_ujian = d.id 
				LEFT JOIN jskripsi e ON b.skripsi_id = e.id 
				LEFT JOIN ref_mahasiswa f ON b.mahasiswa_id = f.id
				LEFT JOIN jperan g ON a.peran_id = g.id
				LEFT JOIN r_kelas h ON d.ruang_id = h.id
				LEFT JOIN jsession i ON b.waktu_ujian = i.id
				WHERE a.dosen_id='.$id.' AND b.periode_id = (SELECT MAX(id) FROM jperiode) ORDER BY b.tanggal_ujian')->queryAll();
                $tbl= Yii::app()->db->createCommand('SELECT b.tanggal_ujian, c.tanggal,i.name AS waktu, h.kelas AS ruang, f.nama, e.judul FROM jujian_skripsi_duty a 
				LEFT JOIN jujian_skripsi b ON a.ujian_skripsi_id = b.id 
				LEFT JOIN jtanggal_ujian c ON b.tanggal_ujian = c.id
				LEFT JOIN jlokasi_ujian d ON b.lokasi_ujian = d.id 
				LEFT JOIN jskripsi e ON b.skripsi_id = e.id 
				LEFT JOIN ref_mahasiswa f ON b.mahasiswa_id = f.id
				LEFT JOIN jperan g ON a.peran_id = g.id
				LEFT JOIN r_kelas h ON d.ruang_id = h.id
				LEFT JOIN jsession i ON b.waktu_ujian = i.id
				WHERE a.dosen_id='.$id.' AND b.periode_id = (SELECT MAX(id) FROM jperiode) ORDER BY b.tanggal_ujian')->queryAll();  		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'duty' => $this->loadDuty($id),
			'data' => $data,
			'tbl' => $tbl
		));
	}


	/**
	 * Lists all models.
	 */
	public function actionIndex( $string = '' )
	{
		$this->cekAkses();	
	    $criteria = new CDbCriteria();
	    if( strlen( $string ) > 0 )
	        $criteria->compare('id',$string);
	    $dataProvider = new CActiveDataProvider( 'Dosen', array( 'criteria' => $criteria, ) );
	    $this->render( 'index', array( 'dataProvider' => $dataProvider ) );
	}	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Dosen the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Dosen::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadDuty($id)
	{
		$model=JujianSkripsiDuty::model()->findAll(['condition'=>'dosen_id='.$id, 'order'=>'ujian_skripsi_id'
]);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function cekAkses()
	{
		IF ($this->user_log['bidang_id'] == 1 || $this->user_log['bidang_id'] == 2 || $this->user_log['bidang_id'] == 3 ){
			return true;
		}ELSE{
			throw new CHttpException(404,'The requested page does not exist.');
		}
	}		

	/**
	 * Performs the AJAX validation.
	 * @param Dosen $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dosen-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
