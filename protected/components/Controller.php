<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column2';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
    public $log_pegawai;
    public $user_log;

    public function init(){
		
		if(Yii::app()->session['ref_pegawai'] == NULL){
			$log_pegawai=array('nip'=>0, 'id'=> 0, 'bidang_id'=>0);				
		}ELSE{
			$log_pegawai = Yii::app()->session['ref_pegawai'];
		}
		$this->log_pegawai = $log_pegawai;
            IF(isset(Yii::app()->user->Id)){
                $this->user_log=User::model()->find(array(
					'select'=>'*',
					'condition'=>'id=:id',
					'params'=>array(':id'=>Yii::app()->user->Id),
				));   
            }                
		Yii::app()->theme = 'sbadm';									
      parent::init();

    }	

	public function bulan($bulan){
		Switch ($bulan){
		    case 1 : $bulan="Januari";
		        Break;
		    case 2 : $bulan="Februari";
		        Break;
		    case 3 : $bulan="Maret";
		        Break;
		    case 4 : $bulan="April";
		        Break;
		    case 5 : $bulan="Mei";
		        Break;
		    case 6 : $bulan="Juni";
		        Break;
		    case 7 : $bulan="Juli";
		        Break;
		    case 8 : $bulan="Agustus";
		        Break;
		    case 9 : $bulan="September";
		        Break;
		    case 10 : $bulan="Oktober";
		        Break;
		    case 11 : $bulan="November";
		        Break;
		    case 12 : $bulan="Desember";
		        Break;
		    }
		return $bulan;
	}


	public function nama_hari($hari){
		//$hari berformat DATE('w');
	    switch($hari){      
	        case 0 : {
	                    $hari='Minggu';
	                }break;
	        case 1 : {
	                    $hari='Senin';
	                }break;
	        case 2 : {
	                    $hari='Selasa';
	                }break;
	        case 3 : {
	                    $hari='Rabu';
	                }break;
	        case 4 : {
	                    $hari='Kamis';
	                }break;
	        case 5 : {
	                    $hari="Jumat";
	                }break;
	        case 6 : {
	                    $hari='Sabtu';
	                }break;
	        default: {
	                    $hari='UnKnown';
	                }break;
	    }	
	    return $hari;
	}

/*	public function init()
        {
		Yii::app()->theme = 'trond';
                parent::init();
        }	

	public function init(){
		Yii::app()->theme = Yii::app()->user->getCurrentTheme();
		
		parent::init();
	}	 */	
}
