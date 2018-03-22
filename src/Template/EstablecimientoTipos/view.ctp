<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstablecimientoTipo $establecimientoTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Establecimiento Tipo'), ['action' => 'edit', $establecimientoTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Establecimiento Tipo'), ['action' => 'delete', $establecimientoTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establecimientoTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Establecimiento Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establecimiento Tipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establecimientos'), ['controller' => 'Establecimientos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establecimiento'), ['controller' => 'Establecimientos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="establecimientoTipos view large-9 medium-8 columns content">
    <h3><?= h($establecimientoTipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($establecimientoTipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($establecimientoTipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($establecimientoTipo->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nombre') ?></h4>
        <?= $this->Text->autoParagraph(h($establecimientoTipo->nombre)); ?>
    </div>
    <div class="row">
        <h4><?= __('Detalle') ?></h4>
        <?= $this->Text->autoParagraph(h($establecimientoTipo->detalle)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Establecimientos') ?></h4>
        <?php if (!empty($establecimientoTipo->establecimientos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Responsable Id') ?></th>
                <th scope="col"><?= __('Establecimiento Tipo Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Localidad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($establecimientoTipo->establecimientos as $establecimientos): ?>
            <tr>
                <td><?= h($establecimientos->id) ?></td>
                <td><?= h($establecimientos->responsable_id) ?></td>
                <td><?= h($establecimientos->establecimiento_tipo_id) ?></td>
                <td><?= h($establecimientos->nombre) ?></td>
                <td><?= h($establecimientos->localidad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Establecimientos', 'action' => 'view', $establecimientos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Establecimientos', 'action' => 'edit', $establecimientos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Establecimientos', 'action' => 'delete', $establecimientos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establecimientos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
