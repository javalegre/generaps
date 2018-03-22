<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoTipo $productoTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productoTipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productoTipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Producto Tipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productoTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($productoTipo) ?>
    <fieldset>
        <legend><?= __('Edit Producto Tipo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
