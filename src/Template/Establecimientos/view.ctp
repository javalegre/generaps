<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Establecimiento $establecimiento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Establecimiento'), ['action' => 'edit', $establecimiento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Establecimiento'), ['action' => 'delete', $establecimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establecimiento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Establecimientos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establecimiento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establecimiento Tipos'), ['controller' => 'EstablecimientoTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establecimiento Tipo'), ['controller' => 'EstablecimientoTipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sectores'), ['controller' => 'Sectores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sectore'), ['controller' => 'Sectores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="establecimientos view large-9 medium-8 columns content">
    <h3><?= h($establecimiento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Establecimiento Tipo') ?></th>
            <td><?= $establecimiento->has('establecimiento_tipo') ? $this->Html->link($establecimiento->establecimiento_tipo->id, ['controller' => 'EstablecimientoTipos', 'action' => 'view', $establecimiento->establecimiento_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($establecimiento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsable Id') ?></th>
            <td><?= $this->Number->format($establecimiento->responsable_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nombre') ?></h4>
        <?= $this->Text->autoParagraph(h($establecimiento->nombre)); ?>
    </div>
    <div class="row">
        <h4><?= __('Localidad') ?></h4>
        <?= $this->Text->autoParagraph(h($establecimiento->localidad)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sectores') ?></h4>
        <?php if (!empty($establecimiento->sectores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Establecimiento Id') ?></th>
                <th scope="col"><?= __('Campania Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($establecimiento->sectores as $sectores): ?>
            <tr>
                <td><?= h($sectores->id) ?></td>
                <td><?= h($sectores->nombre) ?></td>
                <td><?= h($sectores->establecimiento_id) ?></td>
                <td><?= h($sectores->campania_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sectores', 'action' => 'view', $sectores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sectores', 'action' => 'edit', $sectores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sectores', 'action' => 'delete', $sectores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sectores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
