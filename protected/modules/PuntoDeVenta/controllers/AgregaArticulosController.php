<?php

class AgregaArticulosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	public $entidad;
	public $numeroPaciente;
	public $seguro;
	public $credencial;
	public $medico;
	public $almacenSolicitante;
	public $nCuenta;
	public $tipoCargo;
	public $almacenDestino;
	public $tipoPaciente;
	public $banderaCXC;
	public $fechaSolicitud;
	public $horaSolicitud;
	public $keyClientesInternos;
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
	
	public function init()
	{
	  
		$this->numeroPaciente = $_GET['numeroE'];
		$this->seguro = $_GET['seguro'];
		$this->credencial = $_GET['credencial'];
		$this->medico = $_GET['medico'];
		$this->almacenSolicitante = $_GET['almacen'];
		$this->nCuenta = $_GET['nCuenta'];
		$this->tipoCargo = isset($_GET['tipoCargo'])?$_GET['tipoCargo']:null;
		$this->almacenDestino = isset($_POST['almacenDestino'])?$_POST['almacenDestino']:null;;
		$this->tipoPaciente = $_GET['tipoPaciente'];
		$this->banderaCXC = $_GET['banderaCXC'];
		$this->fechaSolicitud = $_GET['fechaSolicitud'];
		$this->horaSolicitud = $_GET['horaSolicitud'];
		$this->keyClientesInternos = $_GET['keyClientesInternos'];
		
		$currentUser = UsuariosSima::model()->findByAttributes(
		
			array('usuario'=>Yii::app()->user->getname())
		);
		//$entidad = Yii::app()->user->getname();
	  $this->entidad = $currentUser->getAttributes(array('entidad'));
	}/**/
	
	public function actionBuscar()
	{
		$this->render('buscar');
	}

	public function actionCalcularBeneficencia()
	{
		$this->render('calcularBeneficencia');
	}

	public function actionCalcularCantidadAseguradora()
	{
		$this->render('calcularCantidadAseguradora');
	}

	public function actionCalcularCantidadAseguradoraTipoConvenio()
	{
		$this->render('calcularCantidadAseguradoraTipoConvenio');
	}

	public function actionCalcularDescuentos()
	{
		$this->render('calcularDescuentos');
	}

	public function actionComprobarCentroCosto()
	{
		$this->render('comprobarCentroCosto');
	}

	public function actionComprobarCuentaMayor()
	{
		$this->render('comprobarCuentaMayor');
	}

	public function actionCrearQueryArticulosConvenios()
	{
		$this->render('crearQueryArticulosConvenios');
	}

	public function actionGetArticulosConvenios()
	{
		$this->render('getArticulosConvenios');
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return String el tipo de paciente
	 */
	public function actionGetTipoPaciente()
	{
			$tipoPaciente= "";
		if ($seguro != NULL) {
			 $sSQL3113 = "Select nomCliente,clientePrincipal From clientes WHERE  entidad='" . $entidad . "' and numCliente='" . $seguro . "' ";
			 $result3113= Yii::app()->db->createCommand($sSQL3113)->queryAll();
			 //$result3113 = mysql_db_query($basedatos, $sSQL3113);
			 $myrow3113 = mysql_fetch_array($result3113);

			 $sSQL311 = "Select cantidad From segurosLimites WHERE  entidad='" . $entidad . "' and seguro='" . $seguro . "' ";
			 $result311 = Yii::app()->db->createCommand($sSQL311)->queryAll();
			 $myrow311 = mysql_fetch_array($result311);

			 $tipoPaciente=$myrow3113['nomCliente'];


			 $sSQL18 = "SELECT tipoConvenio,incluirReferidos FROM convenios
			WHERE entidad='" . $entidad . "' and numCliente='" . $seguro . "' 
			and (departamento='" . $almacen . "' or departamento='*')";
			 $result18 = Yii::app()->db->createCommand($sSQL18)->queryAll();
			 $myrow18 = mysql_fetch_array($result18);
			 
			 if ($myrow18['tipoConvenio'] != NULL) {
				  $tipoPaciente=$tipoPaciente. '<br>';
				  $tipoPaciente=$tipoPaciente. 'Tipo de Convenio: ' . $myrow18['tipoConvenio'];
			 }
		} else {
			$tipoPaciente = "Cliente Particular";
		}
		
		return $tipoPaciente;
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionInsertarArticulos()
	{
		$this->render('insertarArticulos');
	}

	public function actionValidacionDescuentosAutomaticos()
	{
		$this->render('validacionDescuentosAutomaticos');
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
