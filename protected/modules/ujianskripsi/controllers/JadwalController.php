<?php

class JadwalController extends Controller
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
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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

	public $Ctitle='Ujian';


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'duty' => $this->loadDuty($id)			
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new JujianSkripsi;
		$penguji1 = new JujianSkripsiDuty;
		$penguji2 = new JujianSkripsiDuty;
		$penguji3 = new JujianSkripsiDuty;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['JujianSkripsi']))
		{
			$model->attributes=$_POST['JujianSkripsi'];
			$penguji1->attributes=$_POST['JujianSkripsiDuty']['1'];
			$penguji2->attributes=$_POST['JujianSkripsiDuty']['2'];
			$penguji3->attributes=$_POST['JujianSkripsiDuty']['3'];

			list($model->mahasiswa_id, $model->skripsi_id) = explode('.', $model->kodemahasiswa);
			//var_dump($_POST['JujianSkripsiDuty']['2']);
			if($model->save()){
				$penguji1->ujian_skripsi_id = $penguji2->ujian_skripsi_id = $penguji3->ujian_skripsi_id = $model->id;
				$penguji1->peran_id = 1;
				$penguji2->peran_id = 2;
				$penguji3->peran_id = 3;
				IF($penguji1->save() && $penguji2->save() && $penguji3->save())
					$this->redirect(array('view','id'=>$model->id));	
			}
			
		}

		$this->render('create',array(
			'model'=>$model,
			'penguji1' => $penguji1,
			'penguji2' => $penguji2,
			'penguji3' => $penguji3,
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
		$penguji1 = $this->loadPenguji1($id);
		$penguji2 = $this->loadPenguji2($id);
		$penguji3 = $this->loadPenguji3($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['JujianSkripsi']))
		{
			$model->attributes=$_POST['JujianSkripsi'];
			$penguji1->attributes=$_POST['JujianSkripsiDuty']['1'];
			$penguji2->attributes=$_POST['JujianSkripsiDuty']['2'];
			$penguji3->attributes=$_POST['JujianSkripsiDuty']['3'];
			//var_dump($_POST['JujianSkripsiDuty']['2']);
			if($model->save()){
				$penguji1->ujian_skripsi_id = $penguji2->ujian_skripsi_id = $penguji3->ujian_skripsi_id = $model->id;
				$penguji1->peran_id = 1;
				$penguji2->peran_id = 2;
				$penguji3->peran_id = 3;
				IF($penguji1->save() && $penguji2->save() && $penguji3->save()){
					Yii::app()->user->setFlash('success', 'Jadwal '.$model->mahasiswa->nama.' Sudah berhasil diubah.');
					$this->redirect(array('view','id'=>$model->id));	
				}
			}
			
		}

		$this->render('update',array(
			'model'=>$model,
			'penguji1' => $penguji1,
			'penguji2' => $penguji2,
			'penguji3' => $penguji3,			
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new JujianSkripsi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JujianSkripsi']))
			$model->attributes=$_GET['JujianSkripsi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$dataProvider=new CActiveDataProvider('JujianSkripsi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));		
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return JujianSkripsi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=JujianSkripsi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadPenguji1($id)
	{
		$model=JujianSkripsiDuty::model()->findByAttributes(array('ujian_skripsi_id'=>$id,'peran_id'=>1));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadPenguji2($id)
	{
		$model=JujianSkripsiDuty::model()->findByAttributes(array('ujian_skripsi_id'=>$id,'peran_id'=>2));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadPenguji3($id)
	{
		$model=JujianSkripsiDuty::model()->findByAttributes(array('ujian_skripsi_id'=>$id,'peran_id'=>3));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}		
	/**
	 * Performs the AJAX validation.
	 * @param JujianSkripsi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='jujian-skripsi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function loadDuty($id)
	{
		$model=JujianSkripsiDuty::model()->findAll(['condition'=>'ujian_skripsi_id='.$id,
]);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}	

	public function cekAkses()
	{
		IF ($this->user_log['bidang_id'] == 1 || $this->user_log['bidang_id'] == 2 ){
			return true;
		}ELSE{
			throw new CHttpException(404,'The requested page does not exist.');
		}
	}	
}
