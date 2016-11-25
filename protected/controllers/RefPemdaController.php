<?php

class RefPemdaController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

  public function actions()
  {
    return array(
      'aclist'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'RefPemda', //My model's class name
        'attribute'=>'name', //The attribute of the model i will search
      ),
    );
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