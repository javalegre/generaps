<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArrozVariedade[]|\Cake\Collection\CollectionInterface $arrozVariedades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Arroz Variedade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arrozVariedades index large-9 medium-8 columns content">
    <h3><?= __('Arroz Variedades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_largoancho') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrozVariedades as $arrozVariedade): ?>
            <tr>
                <td><?= $this->Number->format($arrozVariedade->id) ?></td>
                <td><?= h($arrozVariedade->is_largoancho) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $arrozVariedade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arrozVariedade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $arrozVariedade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arrozVariedade->id)]) ?>
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
