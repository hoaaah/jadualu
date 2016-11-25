<?php

class TcutiTahunanController extends Controller
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
				'actions'=>array('index'),
				'users'=>array('@'),
				'message'=> 'Aplikasi belum siap digunakan untuk tahun ini, silahkan hubungi Subbagian Kepegawaian. with regards, hoaaah ;)',
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
				'message'=> 'Aplikasi belum siap digunakan untuk tahun ini, silahkan hubungi Subbagian Kepegawaian. with regards, hoaaah ;)',				
			),
		);
	}
	
	
	
	public function actionIndex()
	{
		$cek_cuti_tahunan=TcutiTahunan::model()->find(array(
			'select'=>'*',
			'condition'=>'tahun=:tahun',
			'params'=>array(':tahun'=>DATE('Y')),
		));	
		//cek user dahulu
		IF(Yii::app()->session['group_user']['bidang_id']==1 || Yii::app()->session['group_user']['bidang_id'] == 0)
		{
			
			//lalu cek cuti tahunan
/*			IF($cek_cuti_tahunan['tahun'] == DATE('Y'))
			{
				$this->redirect(array('TcutiMohon/index')); 
			}	
			*/
				$model=new TcutiTahunan;
		
				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);
		
				if(isset($_POST['TcutiTahunan']))
				{
					$model->attributes=$_POST['TcutiTahunan'];
					if($model->save())
						$this->redirect(array('TcutiMohon/index'));
				}
		
				$this->render('create',array(
					'model'=>$model,
				));			
		}ELSE{
			//jika user umum langsung ke permohonan cuti
	
			$this->render('index', array('cek_cuti_tahunan' => $cek_cuti_tahunan));	
			IF($cek_cuti_tahunan['tahun'] == DATE('Y'))
			{
				$this->redirect(array('TcutiMohon/index')); 
			}
					
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}