<?php
class AccessoriesController extends Controller

{
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
        
	public $layout='//layouts/accessories_template';
        
        public function actionIndex()
	{
		$this->render('index');
	}
         public function actionView()
	{
		$this->render('view',array('cat_id'=>$_GET['category_id']));
	}
}
?>