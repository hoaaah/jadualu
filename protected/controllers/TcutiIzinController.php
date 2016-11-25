<?php

class TcutiIzinController extends Controller
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
				'actions'=>array('index','view', 'Cizin','update'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','create','update', 'terima', 'tolak'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TcutiIzin;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TcutiIzin']))
		{
			$model->attributes=$_POST['TcutiIzin'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TcutiIzin']))
		{
			$model->attributes=$_POST['TcutiIzin'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
	
				
		IF(Yii::app()->session['group_user']['bidang_id']==1 || Yii::app()->session['group_user']['bidang_id'] == 0){
#			$list= Yii::app()->db->createCommand('SELECT a.id, a.pegawai_id, a.cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, a.user_id  FROM tcuti_mohon a LEFT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id WHERE b.mohon_id IS NULL')->queryAll();
			$list= Yii::app()->db->createCommand('SELECT a.id, b.name AS pegawai_id, c.name AS cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, d.name AS user_id FROM
(
SELECT a.id, a.pegawai_id, a.cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, a.user_id  FROM tcuti_mohon a LEFT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id WHERE b.mohon_id IS NULL
)a 
INNER JOIN ref_pegawai b ON a.pegawai_id = b.id
INNER JOIN ref_cuti_jn c ON a.cuti_id = c.id
INNER JOIN users d ON a.user_id = d.id')->queryAll();
			
			$dataProvider=new CActiveDataProvider('TcutiIzin');
//untuk cgridview			
/*			$criteria = new CDbCriteria();			
			$dataProvider = new CArrayDataProvider(TcutiIzin::model()->findAll($criteria));
			$model=new TcutiIzin('search');					
			$model->unsetAttributes();  // clear any default values	
			if(isset($_GET['TcutiIzin']))
				$model->attributes=$_GET['TcutiIzin'];	
							
*/							
			$this->render('index',array(
				'dataProvider'=>$dataProvider ,'list' => $list, //'model' => $model
			));			
		}ELSE{
			$this->redirect(array('TcutiMohon/'));			
		}

	}
	
	public function actionTerima($mohon_id)
	{
			$list= Yii::app()->db->createCommand('SELECT a.id, b.name AS pegawai_id, c.name AS cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, d.name AS user_id FROM
(
SELECT a.id, a.pegawai_id, a.cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, a.user_id  FROM tcuti_mohon a LEFT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id WHERE a.id = '.$mohon_id.'
)a 
INNER JOIN ref_pegawai b ON a.pegawai_id = b.id
INNER JOIN ref_cuti_jn c ON a.cuti_id = c.id
INNER JOIN users d ON a.user_id = d.id'
)->queryAll();
		$model=new TcutiIzin;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TcutiIzin']))
		{
			$model->attributes=$_POST['TcutiIzin'];
			$model->user_id = Yii::app()->user->Id;				
			$model->mohon_id = $mohon_id;
			$model->appr = 1;
			$model->tanggal =  date ('Y-m-d');	
			
			if($list['0']['jml_hari'] == 1 && $sisa_cuti -$model->jml_hari < 0 ){
				Yii::app()->session['valid'] = 0;
			}ELSE{
				Yii::app()->session['valid'] = 1;					
			}			
								
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('terima',array(
			'model'=>$model, 'list' => $list,
		));
	}

	public function actionTolak($mohon_id)
	{
			$list= Yii::app()->db->createCommand('SELECT a.id, b.name AS pegawai_id, c.name AS cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, d.name AS user_id FROM
(
SELECT a.id, a.pegawai_id, a.cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, a.user_id  FROM tcuti_mohon a LEFT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id WHERE a.id = '.$mohon_id.'
)a 
INNER JOIN ref_pegawai b ON a.pegawai_id = b.id
INNER JOIN ref_cuti_jn c ON a.cuti_id = c.id
INNER JOIN users d ON a.user_id = d.id'
)->queryAll();
		$model=new TcutiIzin;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TcutiIzin']))
		{
			$model->attributes=$_POST['TcutiIzin'];
			$model->user_id = Yii::app()->user->Id;				
			$model->mohon_id = $mohon_id;
			$model->jml_hari = 0;			
			$model->appr = 0;
			$model->tanggal =  date ('Y-m-d');						
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('tolak',array(
			'model'=>$model, 'list' => $list,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{

			$list= Yii::app()->db->createCommand('SELECT a.id, b.name AS pegawai_id,b.NIP,b.pangkat, b.gol, b.ruang, c.name AS cuti_id, a.appr, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, d.name AS user_id FROM
(
SELECT b.id, a.pegawai_id, a.cuti_id, a.thn_cuti, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, 
b.appr, b.jml_hari, b.catatan, b.tanggal, b.user_id
FROM tcuti_mohon a RIGHT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id 
)a 
INNER JOIN ref_pegawai b ON a.pegawai_id = b.id
INNER JOIN ref_cuti_jn c ON a.cuti_id = c.id
INNER JOIN users d ON a.user_id = d.id
WHERE thn_cuti = '.date('Y')
)->queryAll();
		// $dataProvider->getData() will return a list of arrays.

		
		$model=new TcutiIzin('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TcutiIzin']))
			$model->attributes=$_GET['TcutiIzin'];

		$this->render('admin',array(
			'model'=>$model, 'list' => $list,
		));
	}
	
	
	
	public function actionCizin($izin_id)
	{
		if(date('m') == 1){
			$tgl_cetak = date('j'). ' Januari '.date('Y');
		}ELSEIF(date('m') == 2){
			$tgl_cetak = date('j'). ' Februari '.date('Y');
		}ELSEIF(date('m') == 3){
			$tgl_cetak = date('j'). ' Maret '.date('Y');
		}ELSEIF(date('m') == 4){
			$tgl_cetak = date('j'). ' April '.date('Y');
		}ELSEIF(date('m') == 5){
			$tgl_cetak = date('j'). ' Mei '.date('Y');
		}ELSEIF(date('m') == 6){
			$tgl_cetak = date('j'). ' Juni '.date('Y');
		}ELSEIF(date('m') == 7){
			$tgl_cetak = date('j'). ' Juli '.date('Y');
		}ELSEIF(date('m') == 8){
			$tgl_cetak = date('j'). ' Agustus '.date('Y');
		}ELSEIF(date('m') == 9){
			$tgl_cetak = date('j'). ' September '.date('Y');
		}ELSEIF(date('m') == 10){
			$tgl_cetak = date('j'). ' Oktober '.date('Y');
		}ELSEIF(date('m') == 11){
			$tgl_cetak = date('j'). ' November '.date('Y');
		}ELSEIF(date('m') == 12){
			$tgl_cetak = date('j'). ' Desember '.date('Y');
		}ELSE{
			$tgl_cetak = 'Kok tanggal Komputer kamu aneh ya?';			
		}
		
			$list= Yii::app()->db->createCommand('SELECT a.id, b.name AS pegawai_id,b.NIP,b.pangkat, b.gol, b.ruang, b.jabatan, b.satker, a.cuti_id AS kd_cuti, c.name AS cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, d.name AS user_id, a.appr, a.nomor, a.tanggal, a.catatan, a.jabatan_penandatangan, a.penandatangan, a.nip_penandatangan FROM
(
SELECT b.id, a.pegawai_id, a.cuti_id, a.thn_cuti, b.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, a.user_id ,
b.appr, b.nomor, b.tanggal, b.catatan, b.jabatan_penandatangan, b.penandatangan, b.nip_penandatangan
FROM tcuti_mohon a LEFT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id WHERE b.id = '.$izin_id.'
)a 
INNER JOIN ref_pegawai b ON a.pegawai_id = b.id
INNER JOIN ref_cuti_jn c ON a.cuti_id = c.id
INNER JOIN users d ON a.user_id = d.id'
)->queryAll();		
	/*		
			IF($list['0']['thn_cuti'] = 1){
				$list['0']['thn_cuti'] = '1 (satu) ';
			}
*/		
		$this->render('lap', array('tgl_cetak' => $tgl_cetak, 'list'=>$list,));

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=TcutiIzin::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tcuti-izin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
