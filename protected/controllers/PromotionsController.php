<?php

class PromotionsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');

		$promotionsModel = new PromotionsMongo();
		$promotionsModel = PromotionsMongo::model()->findAll();

		//if you wanna print array use print_r function
		//print_r($promotionsModel);

		echo "<table>";		
		echo "<tr>";
		echo "<th>Promotion</th><th>Date</th>";
		echo "</tr>";
		foreach ($promotionsModel as $promotion) {
			echo "<tr>";
			echo "<td>" . $promotion['title'] . "</td>";
			echo "<td>" . $promotion['start_date'] . "</td>";
			echo "</tr>";
		}

		echo "</table>";
	}

	public function actionAddPromotion() {
		$promotionsModel = new PromotionsMongo();

		// check if add promotion event occur
		if (isset($_REQUEST['titleTextField'])) {
			$promotionsModel->insertPromotion(
				$_REQUEST['titleTextField'], 
				$_REQUEST['descriptionTextField'],
				$_REQUEST['imageUrlTextField'],
				$_REQUEST['brandTextField'],
				$_REQUEST['categoryTextField'],
				$_REQUEST['startDateTextField'],
				$_REQUEST['endDateTextField'],
				'PromotionsController::callbackRedirect'
			);

			//call_user_func('PromotionsController::callbackRedirect', '/Promotions');
		}
		// end check

		$this->render('addPromotion');
	}

	public function callbackRedirect($path) {
		$this->redirect(array($path));
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