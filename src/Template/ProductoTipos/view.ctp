<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoTipo $productoTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Producto Tipo'), ['action' => 'edit', $productoTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producto Tipo'), ['action' => 'delete', $productoTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Producto Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto Tipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productoTipos view large-9 medium-8 columns content">
    <h3><?= h($productoTipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productoTipo->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nombre') ?></h4>
        <?= $this->Text->autoParagraph(h($productoTipo->nombre)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Productos') ?></h4>
        <?php if (!empty($productoTipo->productos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Dosis Min') ?></th>
                <th scope="col"><?= __('Dosis Max') ?></th>
                <th scope="col"><?= __('Producto Tipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($productoTipo->productos as $productos): ?>
            <tr>
                <td><?= h($productos->id) ?></td>
                <td><?= h($productos->nombre) ?></td>
                <td><?= h($productos->dosis_min) ?></td>
                <td><?= h($productos->dosis_max) ?></td>
                <td><?= h($productos->producto_tipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $productos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $productos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $productos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
