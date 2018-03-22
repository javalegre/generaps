<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sectore $sectore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sectore'), ['action' => 'edit', $sectore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sectore'), ['action' => 'delete', $sectore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sectore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sectores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sectore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establecimientos'), ['controller' => 'Establecimientos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establecimiento'), ['controller' => 'Establecimientos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campanias'), ['controller' => 'Campanias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campania'), ['controller' => 'Campanias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sectores view large-9 medium-8 columns content">
    <h3><?= h($sectore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Establecimiento') ?></th>
            <td><?= $sectore->has('establecimiento') ? $this->Html->link($sectore->establecimiento->id, ['controller' => 'Establecimientos', 'action' => 'view', $sectore->establecimiento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Campania') ?></th>
            <td><?= $sectore->has('campania') ? $this->Html->link($sectore->campania->id, ['controller' => 'Campanias', 'action' => 'view', $sectore->campania->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sectore->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nombre') ?></h4>
        <?= $this->Text->autoParagraph(h($sectore->nombre)); ?>
    </div>
</div>
