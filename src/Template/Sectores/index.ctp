<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sectore[]|\Cake\Collection\CollectionInterface $sectores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sectore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establecimientos'), ['controller' => 'Establecimientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establecimiento'), ['controller' => 'Establecimientos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campanias'), ['controller' => 'Campanias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campania'), ['controller' => 'Campanias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sectores index large-9 medium-8 columns content">
    <h3><?= __('Sectores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('establecimiento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campania_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sectores as $sectore): ?>
            <tr>
                <td><?= $this->Number->format($sectore->id) ?></td>
                <td><?= $sectore->has('establecimiento') ? $this->Html->link($sectore->establecimiento->id, ['controller' => 'Establecimientos', 'action' => 'view', $sectore->establecimiento->id]) : '' ?></td>
                <td><?= $sectore->has('campania') ? $this->Html->link($sectore->campania->id, ['controller' => 'Campanias', 'action' => 'view', $sectore->campania->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sectore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sectore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sectore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sectore->id)]) ?>
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
