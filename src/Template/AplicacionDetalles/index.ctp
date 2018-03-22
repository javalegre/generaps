<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AplicacionDetalle[]|\Cake\Collection\CollectionInterface $aplicacionDetalles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aplicacion Detalle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['controller' => 'Aplicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['controller' => 'Aplicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aplicacionDetalles index large-9 medium-8 columns content">
    <h3><?= __('Aplicacion Detalles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aplicacione_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dosis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aplicacionDetalles as $aplicacionDetalle): ?>
            <tr>
                <td><?= $this->Number->format($aplicacionDetalle->id) ?></td>
                <td><?= $aplicacionDetalle->has('aplicacione') ? $this->Html->link($aplicacionDetalle->aplicacione->id, ['controller' => 'Aplicaciones', 'action' => 'view', $aplicacionDetalle->aplicacione->id]) : '' ?></td>
                <td><?= $aplicacionDetalle->has('producto') ? $this->Html->link($aplicacionDetalle->producto->id, ['controller' => 'Productos', 'action' => 'view', $aplicacionDetalle->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($aplicacionDetalle->dosis) ?></td>
                <td><?= h($aplicacionDetalle->created) ?></td>
                <td><?= h($aplicacionDetalle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aplicacionDetalle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aplicacionDetalle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aplicacionDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplicacionDetalle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
