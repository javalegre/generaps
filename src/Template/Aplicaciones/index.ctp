<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aplicacione[]|\Cake\Collection\CollectionInterface $aplicaciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campanias'), ['controller' => 'Campanias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campania'), ['controller' => 'Campanias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicacion Tipos'), ['controller' => 'AplicacionTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacion Tipo'), ['controller' => 'AplicacionTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicacion Detalles'), ['controller' => 'AplicacionDetalles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacion Detalle'), ['controller' => 'AplicacionDetalles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aplicaciones index large-9 medium-8 columns content">
    <h3><?= __('Aplicaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campania_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_aerea') ?></th>
                <th scope="col"><?= $this->Paginator->sort('humedad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('viento_vel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('temperatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caudal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('superficie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aplicacion_tipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aplicaciones as $aplicacione): ?>
            <tr>
                <td><?= $this->Number->format($aplicacione->id) ?></td>
                <td><?= $aplicacione->has('campania') ? $this->Html->link($aplicacione->campania->id, ['controller' => 'Campanias', 'action' => 'view', $aplicacione->campania->id]) : '' ?></td>
                <td><?= $aplicacione->has('lote') ? $this->Html->link($aplicacione->lote->id, ['controller' => 'Lotes', 'action' => 'view', $aplicacione->lote->id]) : '' ?></td>
                <td><?= h($aplicacione->fecha) ?></td>
                <td><?= $this->Number->format($aplicacione->is_aerea) ?></td>
                <td><?= $this->Number->format($aplicacione->humedad) ?></td>
                <td><?= $this->Number->format($aplicacione->viento_vel) ?></td>
                <td><?= $this->Number->format($aplicacione->temperatura) ?></td>
                <td><?= $this->Number->format($aplicacione->caudal) ?></td>
                <td><?= $this->Number->format($aplicacione->superficie) ?></td>
                <td><?= $this->Number->format($aplicacione->cantidad) ?></td>
                <td><?= $aplicacione->has('aplicacion_tipo') ? $this->Html->link($aplicacione->aplicacion_tipo->id, ['controller' => 'AplicacionTipos', 'action' => 'view', $aplicacione->aplicacion_tipo->id]) : '' ?></td>
                <td><?= h($aplicacione->created) ?></td>
                <td><?= h($aplicacione->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aplicacione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aplicacione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aplicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplicacione->id)]) ?>
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
