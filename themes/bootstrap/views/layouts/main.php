<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" /> 
  <!-- End Style -->
</head>

<body>
  <!-- Navbar header -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-togglet="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Smart Wallet</a>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Promotion</a></li>
          <li><a href="#">Coupon</a></li>
          <li><a href="#">Statistic</a></li>
          <li><a href="#">About us</a></li>
        </ul>
        <form class="navbar-form navbar-right" role="Sign in">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter email">
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-default">Sign in</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Navbar header -->

  <script src="<?php echo Yii::app()->theme->baseUrl; ?> js/jquery.min.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?> js/bootstrap.min.js"></script>
</body>
</html>