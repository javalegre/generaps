<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Producto Tipos'), ['controller' => 'ProductoTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto Tipo'), ['controller' => 'ProductoTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicacion Detalles'), ['controller' => 'AplicacionDetalles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacion Detalle'), ['controller' => 'AplicacionDetalles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productos form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Edit Producto') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('dosis_min');
            echo $this->Form->control('dosis_max');
            echo $this->Form->control('producto_tipo_id', ['options' => $productoTipos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
