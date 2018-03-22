<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Establecimiento $establecimiento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Establecimientos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Establecimiento Tipos'), ['controller' => 'EstablecimientoTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establecimiento Tipo'), ['controller' => 'EstablecimientoTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sectores'), ['controller' => 'Sectores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sectore'), ['controller' => 'Sectores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establecimientos form large-9 medium-8 columns content">
    <?= $this->Form->create($establecimiento) ?>
    <fieldset>
        <legend><?= __('Add Establecimiento') ?></legend>
        <?php
            echo $this->Form->control('responsable_id');
            echo $this->Form->control('establecimiento_tipo_id', ['options' => $establecimientoTipos, 'empty' => true]);
            echo $this->Form->control('nombre');
            echo $this->Form->control('localidad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
