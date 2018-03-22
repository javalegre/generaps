<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title><?= 'Adecoagro' ?></title>
	  <!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  
	  <?= $this->Html->css(['bootstrap','custom']) ?>
	  
	</head>
	<body class="login">
  		<!--< ?php echo $this->Flash->render(); ?>-->
  		<?php echo $this->Flash->render('auth'); ?>
  		<?php echo $this->fetch('content'); ?>
	</body>
</html>
