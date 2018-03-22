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
    <?= $this->Html->css(['base','cake']) ?>
</head>
<body class="nav-md footer_fixed_menu_fixed">
    <div class="container body">
        <div>
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
</body>
</html>
