<?php

class CetakController extends Controller
{
	public $Ctitle='Cetak';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionRptjadwaltanggal()
	{
       $data= Yii::app()->db->createCommand('CALL rpt_jadwaltanggal(1)')->queryAll();		

		$this->render('jadwaltanggal', ['data' => $data]);
	}	

	public function actionRptjadwaldosen()
	{
       $data= Yii::app()->db->createCommand('CALL rpt_jadwaldosen(1)')->queryAll();		

		$this->render('jadwaldosen', ['data' => $data]);
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