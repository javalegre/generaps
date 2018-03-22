<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AplicacionDetalle $aplicacionDetalle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aplicacion Detalles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['controller' => 'Aplicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['controller' => 'Aplicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aplicacionDetalles form large-9 medium-8 columns content">
    <?= $this->Form->create($aplicacionDetalle) ?>
    <fieldset>
        <legend><?= __('Add Aplicacion Detalle') ?></legend>
        <?php
            echo $this->Form->control('aplicacione_id', ['options' => $aplicaciones]);
            echo $this->Form->control('producto_id', ['options' => $productos]);
            echo $this->Form->control('dosis');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
