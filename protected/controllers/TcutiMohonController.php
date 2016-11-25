<?php

class TcutiMohonController extends Controller
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
				'actions'=>array('index','view','Cmohon'),
				'users'=>array('@'),
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
				'message'=> 'Silahkan Login. with regards, hoaaah ;)',				
			),
		);
	}
	
	
	public function actionCreate(){
		//Untuk Sisa Cuti
		IF($this->sisa_cuti['0']['saldo'] <> NULL || $this->sisa_cuti['0']['tahun_saldo'] == date('Y')){
			$sisa_cuti = $this->sisa_cuti['0']['saldo']-$this->sisa_cuti['0']['pakai'];
			$cekek = 1;
		}ELSEIF($this->sisa_cuti['0']['saldo'] <> NULL || $this->sisa_cuti['0']['tahun_saldo'] - date('Y') == 1){
			$sisa_cuti = $this->sisa_cuti['0']['saldo']+$this->sisa_cuti['0']['CT']-$this->sisa_cuti['0']['pakai'];
			$cekek = 2;			
		}ELSEIF($this->sisa_cuti['0']['saldo'] <> NULL || $this->sisa_cuti['0']['tahun_saldo'] - date('Y') > 1){
			$sisa_cuti = $this->sisa_cuti['0']['CT']+$this->sisa_cuti['0']['CT1']-$this->sisa_cuti['0']['pakai'];		
			$cekek = 3;			
		}ELSEIF($this->sisa_cuti['0']['saldo'] == NULL){
			$sisa_cuti = '(Sepertinya saldo cuti anda belum diinput oleh kepegawaian, silahkan hubungi subbag Kepegawaian!)';
			$cekek = 4;			
		}
			
		$model=new TcutiMohon;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TcutiMohon']))
		{
			$model->attributes=$_POST['TcutiMohon'];
			$model->user_id = Yii::app()->user->Id;	
			$model->pegawai_id = Yii::app()->session['ref_pegawai']['id'];	
			$model->thn_cuti = DATE('Y');
			$model->tgl_aju =  date ('Y-m-d');
			
			if($model->cuti_id == 1 && $sisa_cuti -$model->jml_hari < 0 ){
				Yii::app()->session['valid'] = 0;
			}ELSE{
				Yii::app()->session['valid'] = 1;					
			}
			
			if($model->save()){
				$this->redirect(array('view','pegawai_id'=>$model->pegawai_id));
			}ELSE{
				//$model->addError('Terjadi kesalahan, Periksa kembali data anda.');
				var_dump($model->getErrors());
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'sisa_cuti'=>$sisa_cuti, 
			'cekek'=>$cekek,
		));			
	}
	
	
	public function actionIndex()
	{
		
		//Untuk Sisa Cuti
		IF($this->sisa_cuti['0']['saldo'] <> NULL || $this->sisa_cuti['0']['tahun_saldo'] == date('Y')){
			$sisa_cuti = $this->sisa_cuti['0']['saldo']-$this->sisa_cuti['0']['pakai'];
			$cekek = 1;
		}ELSEIF($this->sisa_cuti['0']['saldo'] <> NULL || $this->sisa_cuti['0']['tahun_saldo'] - date('Y') == 1){
			$sisa_cuti = $this->sisa_cuti['0']['saldo']+$this->sisa_cuti['0']['CT']-$this->sisa_cuti['0']['pakai'];
			$cekek = 2;			
		}ELSEIF($this->sisa_cuti['0']['saldo'] <> NULL || $this->sisa_cuti['0']['tahun_saldo'] - date('Y') > 1){
			$sisa_cuti = $this->sisa_cuti['0']['CT']+$this->sisa_cuti['0']['CT1']-$this->sisa_cuti['0']['pakai'];		
			$cekek = 3;			
		}ELSEIF($this->sisa_cuti['0']['saldo'] == NULL){
			$sisa_cuti = '(Sepertinya saldo cuti anda belum diinput oleh kepegawaian, silahkan hubungi subbag Kepegawaian!)';
			$cekek = 4;			
		}
		
		
		IF(Yii::app()->session['group_user']['bidang_id']==1 || Yii::app()->session['group_user']['bidang_id'] == 0){
			$model=new TcutiMohon;
//EDITAN BARU			
			$model = TcutiMohon::model();
			
			$criteria=new CDbCriteria;
			$criteria->compare('thn_cuti',date('Y'));
			
			$dataProvider = new CActiveDataProvider(get_class($model),array('criteria'=>$criteria));			
			$this->render('admin',array(
				'model'=>$model, 'dataProvider'=>$dataProvider,
			));			
		}ELSE{

			$model=new TcutiMohon;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['TcutiMohon']))
			{
				$model->attributes=$_POST['TcutiMohon'];
				$model->user_id = Yii::app()->user->Id;	
				$model->pegawai_id = Yii::app()->session['ref_pegawai']['id'];	
				$model->thn_cuti = DATE('Y');
				$model->tgl_aju =  date ('Y-m-d');
				if($model->cuti_id == 1 && $sisa_cuti -$model->jml_hari < 0 ){
					Yii::app()->session['valid'] = 0;
				}ELSE{
					Yii::app()->session['valid'] = 1;					
				}				

				
				if($model->save()){
					$this->redirect(array('view','pegawai_id'=>$model->pegawai_id));
				}ELSE{
					//$model->addError('Terjadi kesalahan, Periksa kembali data anda.');
					var_dump($model->getErrors());
				}
			}
	
			$this->render('create',array(
				'model'=>$model,
				'sisa_cuti'=>$sisa_cuti, 
				'cekek'=>$cekek,
			));			
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
	*/
	public function actionView($pegawai_id)
	{
		IF(Yii::app()->session['group_user']['bidang_id']==1 || Yii::app()->session['group_user']['bidang_id'] == 0){		
			$criteria = new CDbCriteria(array(
						'condition' => 'pegawai_id='.$pegawai_id,
						));
			$dataProvider = new CArrayDataProvider(TcutiMohon::model()->findAll($criteria));
			$model=new TcutiMohon('search');					
			$model->unsetAttributes();  // clear any default values	
			if(isset($_GET['TcutiMohon']))
				$model->attributes=$_GET['TcutiMohon'];					
	
			$this->render('admin', array('model' => $model,'dataProvider' => $dataProvider));	
		}ELSE{
			$criteria = new CDbCriteria(array(
						'condition' => 'pegawai_id='.$pegawai_id,
						));
			$dataProvider = new CArrayDataProvider(TcutiMohon::model()->findAll($criteria));
			$model=new TcutiMohon('search');					
			$model->unsetAttributes();  // clear any default values	
			if(isset($_GET['TcutiMohon']))
				$model->attributes=$_GET['TcutiMohon'];					
	
			$this->render('index', array('model' => $model,'dataProvider' => $dataProvider));				
		}
		
//aslinya				
/*		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
		*/
	}
	
	
	public function actionCmohon($mohon_id)
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
		
			$list= Yii::app()->db->createCommand('SELECT a.id, b.name AS pegawai_id,b.NIP,b.pangkat, b.gol, b.ruang, c.name AS cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, d.name AS user_id FROM
(
SELECT a.id, a.pegawai_id, a.cuti_id, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, a.user_id  FROM tcuti_mohon a LEFT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id WHERE a.id = '.$mohon_id.'
)a 
INNER JOIN ref_pegawai b ON a.pegawai_id = b.id
INNER JOIN ref_cuti_jn c ON a.cuti_id = c.id
INNER JOIN users d ON a.user_id = d.id'
)->queryAll();
			
			$cuti_tini=Yii::app()->db->createCommand('SELECT
a.cuti_id, SUM(jml_hari) AS jml_hari
FROM
(
SELECT a.id, a.pegawai_id, a.cuti_id, a.thn_cuti, b.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, a.user_id  FROM tcuti_mohon a RIGHT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id 
WHERE a.pegawai_id = '.Yii::app()->session['ref_pegawai']['id'].' AND thn_cuti = '.date('Y').'
)a 
GROUP BY a.cuti_id'
)->queryAll();
	/*		
			IF($list['0']['thn_cuti'] = 1){
				$list['0']['thn_cuti'] = '1 (satu) ';
			}
*/		
		$this->render('lap', array('tgl_cetak' => $tgl_cetak, 'list'=>$list,));

	}


}