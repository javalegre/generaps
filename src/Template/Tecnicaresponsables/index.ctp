<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnicaresponsable[]|\Cake\Collection\CollectionInterface $tecnicaresponsables
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tecnicaresponsable'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tecnicaresponsables index large-9 medium-8 columns content">
    <h3><?= __('Tecnicaresponsables') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('es_responsable') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tecnica_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tecnicaresponsables as $tecnicaresponsable): ?>
            <tr>
                <td><?= $this->Number->format($tecnicaresponsable->id) ?></td>
                <td><?= $tecnicaresponsable->has('user') ? $this->Html->link($tecnicaresponsable->user->id, ['controller' => 'Users', 'action' => 'view', $tecnicaresponsable->user->id]) : '' ?></td>
                <td><?= $this->Number->format($tecnicaresponsable->es_responsable) ?></td>
                <td><?= $tecnicaresponsable->has('tecnica') ? $this->Html->link($tecnicaresponsable->tecnica->id, ['controller' => 'Tecnicas', 'action' => 'view', $tecnicaresponsable->tecnica->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tecnicaresponsable->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tecnicaresponsable->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tecnicaresponsable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicaresponsable->id)]) ?>
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
