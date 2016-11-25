<?php

class TfilesController extends Controller
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
				'actions'=>array('loadcategory'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view', 'admin','create','update', 'loadcategory'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'loadcategory'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

        public $Ctitle='Materi Kuliah';
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
		$model=new Tfiles;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Tfiles']))
		{
			$model->attributes=$_POST['Tfiles'];
			$valid=$model->validate(); 
			$model->user_id = Yii::app()->user->Id;	
			
			$model->created = date('Y-m-d H:i:s');
            $model->files=CUploadedFile::getInstance($model,'files');				
/*
			if($model->save())
				$model->files->saveAs(Yii::app()->basePath . '/../unggah/99/' . $model->bidang_id . '_'. $model->category_id . '_'. $model->no . '_'. $model->tahun . '_'. $model->files);	
				Yii::app()->user->setFlash('succes',"Tersimpan!");		
				$this->redirect(array('index'//,'id'=>$model->id
				));
*/				
			if($model->save()){
				//menyimpan log_user
				Yii::app()->db->createCommand()
				->insert('log_user', array(
									'log_type'=> '2',
									'user_id'=>Yii::app()->user->Id,
									'log_user'=>date('Y-m-d H:i:s'),
									'log_file'=>$model->id
									));
									
				//$model->image->saveAs('/unggah/'.$model->files);
				$model->files->saveAs(Yii::app()->basePath . '/../unggah/99/' . $model->bidang_id . '_'. $model->category_id . '_'. $model->no . '_'. $model->tahun . '_'. $model->files);
				Yii::app()->user->setFlash('succes',"Tersimpan!");
				$this->redirect(array('index'//,'id'=>$model->id
				));
			}				
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

		if(isset($_POST['Tfiles']))
		{
			$model->attributes=$_POST['Tfiles'];
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
	$model=new Tfiles('search');
		IF($this->log_pegawai['nip'] <> 0){
			$model->bidang_id = Yii::app()->session['group_user']['bidang_id'];
		}ELSE{
		$model->unsetAttributes();  // clear any default values
		}
		if(isset($_GET['Tfiles']))
			$model->attributes=$_GET['Tfiles'];
		
		$dataProvider=new CActiveDataProvider('Tfiles');
		$this->render('admin',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,			
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tfiles('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tfiles']))
			$model->attributes=$_GET['Tfiles'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	 
	public function actionLoadcategory()
	{
	   $data=RefCategory::model()->findAll('bidang_id=:bidang_id', 
	   array(':bidang_id'=>(int) $_POST['bidang_id']));
	 
	   $data=CHtml::listData($data,'id','name');
	 
	   echo "<option value=''>Pilih Kategori</option>";
	   foreach($data as $value=>$Tfiles_category_id)
	   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($Tfiles_category_id),true);
	}	 
		 
	public function loadModel($id)
	{
		$model=Tfiles::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='tfiles-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
