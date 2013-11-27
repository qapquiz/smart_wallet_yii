<?php

class PromotionsMongo extends EMongoDocument {
	public $title;
	public $description; 
	public $brand;
	public $category;
	public $image_url;
	public $start_date;
	public $end_date;

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getCollectionName() {
		return 'promotions';
	}

	public function rules() {
		return array(
			//add rule here
		);
	}

	public function attributeLabels() {
		return array(
			'title' => 'Title',
			'description' => 'Description',
			'brand' => 'Brand',
			'category' => 'Category',
			'image_url' => 'Image url',
			'start_date' => 'Start date',
			'end_date' => 'End date',
		);
	}

	public function insertPromotion($title, $description, $image_url, $brand, $category, $start_date, $end_date, $callback) {
		$this->title = $title;
		$this->description = $description;
		$this->brand = $brand;
		$this->category = $category;
		$this->image_url = $image_url;
		$this->start_date = $start_date;
		$this->end_date = $end_date;
		$this->save();
		$path = '/Promotions';
		call_user_func($callback, $path);
	}

}

?>