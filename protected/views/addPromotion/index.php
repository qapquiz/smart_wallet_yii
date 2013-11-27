<!DOCTYPE HTML>
<html>
<head>
	<title>Add Promotion</title>
</head>
<body>
<?php
/* @var $this AddPromotionController */

$this->breadcrumbs=array(
	'Add Promotion',
);
?>

  <form method="GET">
    Title: <input type="text" name="titleTextField"><br>
    Description: <textarea name="descriptionTextField"></textarea><br>
    Image url: <input type="file" name="imageUrlTextField"><br>
    Brand: <input type="text" name="brandTextField"><br>
    Category: <input type="text" name="categoryTextField"><br>
    Start date: <input type="text" name="startDateTextField"><br>
    End date: <input type="text" name="endDateTextField"><br>
    <input type="submit" value="Add Promotion">
  </form>

<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>



</body>
</html>