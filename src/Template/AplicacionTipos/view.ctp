<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AplicacionTipo $aplicacionTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aplicacion Tipo'), ['action' => 'edit', $aplicacionTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aplicacion Tipo'), ['action' => 'delete', $aplicacionTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplicacionTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aplicacion Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacion Tipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['controller' => 'Aplicaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['controller' => 'Aplicaciones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aplicacionTipos view large-9 medium-8 columns content">
    <h3><?= h($aplicacionTipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aplicacionTipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aplicacionTipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aplicacionTipo->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nombre') ?></h4>
        <?= $this->Text->autoParagraph(h($aplicacionTipo->nombre)); ?>
    </div>
    <div class="row">
        <h4><?= __('Detalle') ?></h4>
        <?= $this->Text->autoParagraph(h($aplicacionTipo->detalle)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Aplicaciones') ?></h4>
        <?php if (!empty($aplicacionTipo->aplicaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Campania Id') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Is Aerea') ?></th>
                <th scope="col"><?= __('Humedad') ?></th>
                <th scope="col"><?= __('Viento Vel') ?></th>
                <th scope="col"><?= __('Viento Dir') ?></th>
                <th scope="col"><?= __('Temperatura') ?></th>
                <th scope="col"><?= __('Caudal') ?></th>
                <th scope="col"><?= __('Superficie') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Detalle') ?></th>
                <th scope="col"><?= __('Aplicacion Tipo Id') ?></th>
                <th scope="col"><?= __('Id Usuario Cargo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aplicacionTipo->aplicaciones as $aplicaciones): ?>
            <tr>
                <td><?= h($aplicaciones->id) ?></td>
                <td><?= h($aplicaciones->campania_id) ?></td>
                <td><?= h($aplicaciones->lote_id) ?></td>
                <td><?= h($aplicaciones->fecha) ?></td>
                <td><?= h($aplicaciones->is_aerea) ?></td>
                <td><?= h($aplicaciones->humedad) ?></td>
                <td><?= h($aplicaciones->viento_vel) ?></td>
                <td><?= h($aplicaciones->viento_dir) ?></td>
                <td><?= h($aplicaciones->temperatura) ?></td>
                <td><?= h($aplicaciones->caudal) ?></td>
                <td><?= h($aplicaciones->superficie) ?></td>
                <td><?= h($aplicaciones->cantidad) ?></td>
                <td><?= h($aplicaciones->detalle) ?></td>
                <td><?= h($aplicaciones->aplicacion_tipo_id) ?></td>
                <td><?= h($aplicaciones->id_usuario_cargo) ?></td>
                <td><?= h($aplicaciones->created) ?></td>
                <td><?= h($aplicaciones->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Aplicaciones', 'action' => 'view', $aplicaciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Aplicaciones', 'action' => 'edit', $aplicaciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aplicaciones', 'action' => 'delete', $aplicaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplicaciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
