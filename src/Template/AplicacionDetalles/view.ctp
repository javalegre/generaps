<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AplicacionDetalle $aplicacionDetalle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aplicacion Detalle'), ['action' => 'edit', $aplicacionDetalle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aplicacion Detalle'), ['action' => 'delete', $aplicacionDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplicacionDetalle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aplicacion Detalles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacion Detalle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['controller' => 'Aplicaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['controller' => 'Aplicaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aplicacionDetalles view large-9 medium-8 columns content">
    <h3><?= h($aplicacionDetalle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aplicacione') ?></th>
            <td><?= $aplicacionDetalle->has('aplicacione') ? $this->Html->link($aplicacionDetalle->aplicacione->id, ['controller' => 'Aplicaciones', 'action' => 'view', $aplicacionDetalle->aplicacione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $aplicacionDetalle->has('producto') ? $this->Html->link($aplicacionDetalle->producto->id, ['controller' => 'Productos', 'action' => 'view', $aplicacionDetalle->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aplicacionDetalle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dosis') ?></th>
            <td><?= $this->Number->format($aplicacionDetalle->dosis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aplicacionDetalle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aplicacionDetalle->modified) ?></td>
        </tr>
    </table>
</div>
