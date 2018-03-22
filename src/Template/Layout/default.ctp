<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= 'Plataforma de Gestión productiva de ADECOAGRO' ?>:
        <?= $this->fetch("The ADECO's platform") ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap','custom','font-awesome']) ?>
    <?= $this->Html->script(['jquery.min']) ?>
    
</head>
<body class="nav-md footer_fixed_menu_fixed">
    <div class="container body">
        <div class="main_container">

            <!-- Left side column. contains the sidebar -->
            <?php echo $this->element('aside-main-sidebar'); ?>

            <!-- Header Navbar: style can be found in header.less -->
            <?php echo $this->element('nav-top') ?>

            <!-- page content -->
            <div class="right_col" role="main">
                <?php echo $this->Flash->render('auth'); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <?php echo $this->element('footer'); ?>
            <!-- /footer content -->            
        </div>
    </div>
    <?= $this->Html->script(['bootstrap.min','custom']) ?>    
</body>
</html>
