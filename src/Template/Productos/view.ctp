<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto Tipos'), ['controller' => 'ProductoTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto Tipo'), ['controller' => 'ProductoTipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aplicacion Detalles'), ['controller' => 'AplicacionDetalles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacion Detalle'), ['controller' => 'AplicacionDetalles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productos view large-9 medium-8 columns content">
    <h3><?= h($producto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Producto Tipo') ?></th>
            <td><?= $producto->has('producto_tipo') ? $this->Html->link($producto->producto_tipo->id, ['controller' => 'ProductoTipos', 'action' => 'view', $producto->producto_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($producto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dosis Min') ?></th>
            <td><?= $this->Number->format($producto->dosis_min) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dosis Max') ?></th>
            <td><?= $this->Number->format($producto->dosis_max) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nombre') ?></h4>
        <?= $this->Text->autoParagraph(h($producto->nombre)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Aplicacion Detalles') ?></h4>
        <?php if (!empty($producto->aplicacion_detalles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Aplicacione Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Dosis') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->aplicacion_detalles as $aplicacionDetalles): ?>
            <tr>
                <td><?= h($aplicacionDetalles->id) ?></td>
                <td><?= h($aplicacionDetalles->aplicacione_id) ?></td>
                <td><?= h($aplicacionDetalles->producto_id) ?></td>
                <td><?= h($aplicacionDetalles->dosis) ?></td>
                <td><?= h($aplicacionDetalles->created) ?></td>
                <td><?= h($aplicacionDetalles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AplicacionDetalles', 'action' => 'view', $aplicacionDetalles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AplicacionDetalles', 'action' => 'edit', $aplicacionDetalles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AplicacionDetalles', 'action' => 'delete', $aplicacionDetalles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplicacionDetalles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
