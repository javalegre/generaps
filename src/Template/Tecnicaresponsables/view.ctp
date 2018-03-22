<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnicaresponsable $tecnicaresponsable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tecnicaresponsable'), ['action' => 'edit', $tecnicaresponsable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tecnicaresponsable'), ['action' => 'delete', $tecnicaresponsable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicaresponsable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tecnicaresponsables'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnicaresponsable'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tecnicaresponsables view large-9 medium-8 columns content">
    <h3><?= h($tecnicaresponsable->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $tecnicaresponsable->has('user') ? $this->Html->link($tecnicaresponsable->user->id, ['controller' => 'Users', 'action' => 'view', $tecnicaresponsable->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tecnica') ?></th>
            <td><?= $tecnicaresponsable->has('tecnica') ? $this->Html->link($tecnicaresponsable->tecnica->id, ['controller' => 'Tecnicas', 'action' => 'view', $tecnicaresponsable->tecnica->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tecnicaresponsable->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Es Responsable') ?></th>
            <td><?= $this->Number->format($tecnicaresponsable->es_responsable) ?></td>
        </tr>
    </table>
</div>
