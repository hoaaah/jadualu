<?php

class DefaultController extends Controller
{
	public $Ctitle='Ujian Skripsi';
	public function actionIndex()
	{
		$this->render('index');
	}
}