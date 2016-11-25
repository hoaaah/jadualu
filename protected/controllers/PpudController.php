<?php
date_default_timezone_set('Asia/Jakarta');
class PpudController extends Controller
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
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','admin','create','update','createppm', 'bidang'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
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
        public $Ctitle='Skripsi';
	 
	public function actionCppud($ppud_id)
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
		
			$list= Yii::app()->db->createCommand('SELECT a.id, a.puud, a.no, a.tentang, a.files, a.user_id, b.name, c.nip FROM ppud a 
LEFT JOIN users b ON a.user_id = b.id
LEFT JOIN ref_pegawai c ON b.username = c.NIP
WHERE a.id = '.$ppud_id
)->queryAll();			
	/*		
			IF($list['0']['thn_cuti'] = 1){
				$list['0']['thn_cuti'] = '1 (satu) ';
			}
*/		
		$this->render('lap', array('tgl_cetak' => $tgl_cetak, 'list'=>$list,));

	}
	
		 
	public function actionIndex(){

                $criteria=new CDbCriteria;

                $dataProvider=new CActiveDataProvider('Ppud',array(
                    
                    'sort'=>array('attributes'=>array(
                        'id'=>CSort::SORT_DESC,
                        'tahun'=>array('asc'=>'name ASC','desc'=>'name DESC','default'=>'desc'),
                    ),'defaultOrder'=>'id DESC'),
                    ));

		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));	

	}

	public function actionBidang($id){

                $criteria=new CDbCriteria;

                $dataProvider=new CActiveDataProvider('Ppud',array(
                    'criteria'=>array(
                       'condition'=>'puud='.$id,
                    ),
                    'sort'=>array('attributes'=>array(
                        'id'=>CSort::SORT_DESC,
                        'tahun'=>array('asc'=>'name ASC','desc'=>'name DESC','default'=>'desc'),
                    ),'defaultOrder'=>'id DESC'),
                    ));

		
		$this->render('index',array(
			'dataProvider'=>$dataProvider, 'id' => $id,
		));	

	}        
        
	public function actionView($id)
	{
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
		

	
	public function actionCreate()
	{
		$model=new Ppud;
		//$puus=Puus::model()->findAll();

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);


		if(isset($_POST['Ppud']))
		{
			$model->attributes=$_POST['Ppud'];
			$model->user_id = Yii::app()->user->Id;	
			$model->created = date('Y-m-d H:i:s');
            $model->files=CUploadedFile::getInstance($model,'files');					
			if($model->save()){
				//menyimpan log_user
				Yii::app()->db->createCommand()
				->insert('log_user', array(
									'log_type'=> '3',
									'user_id'=>Yii::app()->user->Id,
									'log_user'=>date('Y-m-d H:i:s'),
									'log_file'=>$model->id
									));
													
				//$model->image->saveAs('/unggah/'.$model->files);
				$model->files->saveAs(Yii::app()->basePath . '/../unggah/' . $model->puud . '/'. $model->files);
				Yii::app()->user->setFlash('succes',"Tersimpan!");
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ppud']))
		{
			$model->attributes=$_POST['Ppud'];
			$model->user_id = Yii::app()->user->Id;	
			$model->updated = date('Y-m-d H:i:s');				
			if($model->save()){
				//menyimpan log_user				
				Yii::app()->db->createCommand()
				->insert('log_user', array(
									'log_type'=> '3',
									'user_id'=>Yii::app()->user->Id,
									'log_user'=>date('Y-m-d H:i:s'),
									'log_file'=>$model->id
									));				
				#$model->tetap_tanggal = $_POST['Ppud']['tetap_tanggal'];				
				$this->redirect(array('view','id'=>$model->id));
			}
				
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}	
	
	
	
	
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			//menyimpan log_user
			Yii::app()->db->createCommand()
			->insert('log_user', array(
								'log_type'=> '4',
								'user_id'=>Yii::app()->user->Id,
								'log_user'=>date('Y-m-d H:i:s'),
								'log_file'=>$id
								));			
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
                                $imageName = Patients::model()->find('id=?',"$model->id");
                                unlink(Yii::app()->basePath . '/../unggah/' . $model->puud . '/'.$imageName);
  			
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Ppud('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ppud']))
			$model->attributes=$_GET['Ppud'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	 
/* BATAS UNTUK UPLOAD PPM */
	public function actionCreateppm()
	{
		$model=new Ppud;
		//$puus=Puus::model()->findAll();

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);


		if(isset($_POST['Ppud']))
		{
			$model->attributes=$_POST['Ppud'];
			$model->user_id = Yii::app()->user->Id;	
			$model->created = date('Y-m-d H:i:s');			
            $model->files=CUploadedFile::getInstance($model,'files');					
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
				$model->files->saveAs(Yii::app()->basePath . '/../unggah/' . $model->puud . '/'. $model->files);
				Yii::app()->user->setFlash('succes',"Tersimpan!");
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$this->render('createppm',array(
			'model'=>$model,
		));
	}











/* PPM */	 
	public function loadModel($id)
	{
		$model=Ppud::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='ppud-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
 /*
    protected function afterFind ()
    {

                if($this->class_date <> '')
                {
                        // mise en forme de class_date
            list($y, $m, $d) = explode('-', $this->class_date);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->class_date = date ('d-m-Y', $mk);
                }
        
        return parent::afterFind ();
    }

    protected function beforeSave ()
    {
                if($this->class_date <> '')
                {
                        // mise en forme de class_date
                list($d, $m, $y) = explode('-', $this->class_date);
                $mk=mktime(0, 0, 0, $m, $d, $y);
                $this->class_date = date ('Y-m-d', $mk);
                }
                                
        return parent::beforeSave ();
    }
*/	 	
}
