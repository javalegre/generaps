<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aplicacione $aplicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aplicacione'), ['action' => 'edit', $aplicacione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aplicacione'), ['action' => 'delete', $aplicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplicacione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campanias'), ['controller' => 'Campanias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campania'), ['controller' => 'Campanias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aplicacion Tipos'), ['controller' => 'AplicacionTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacion Tipo'), ['controller' => 'AplicacionTipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aplicacion Detalles'), ['controller' => 'AplicacionDetalles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacion Detalle'), ['controller' => 'AplicacionDetalles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aplicaciones view large-9 medium-8 columns content">
    <h3><?= h($aplicacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Campania') ?></th>
            <td><?= $aplicacione->has('campania') ? $this->Html->link($aplicacione->campania->id, ['controller' => 'Campanias', 'action' => 'view', $aplicacione->campania->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= $aplicacione->has('lote') ? $this->Html->link($aplicacione->lote->id, ['controller' => 'Lotes', 'action' => 'view', $aplicacione->lote->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aplicacion Tipo') ?></th>
            <td><?= $aplicacione->has('aplicacion_tipo') ? $this->Html->link($aplicacione->aplicacion_tipo->id, ['controller' => 'AplicacionTipos', 'action' => 'view', $aplicacione->aplicacion_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aplicacione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Aerea') ?></th>
            <td><?= $this->Number->format($aplicacione->is_aerea) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Humedad') ?></th>
            <td><?= $this->Number->format($aplicacione->humedad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Viento Vel') ?></th>
            <td><?= $this->Number->format($aplicacione->viento_vel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Temperatura') ?></th>
            <td><?= $this->Number->format($aplicacione->temperatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caudal') ?></th>
            <td><?= $this->Number->format($aplicacione->caudal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Superficie') ?></th>
            <td><?= $this->Number->format($aplicacione->superficie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($aplicacione->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($aplicacione->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aplicacione->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aplicacione->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Viento Dir') ?></h4>
        <?= $this->Text->autoParagraph(h($aplicacione->viento_dir)); ?>
    </div>
    <div class="row">
        <h4><?= __('Detalle') ?></h4>
        <?= $this->Text->autoParagraph(h($aplicacione->detalle)); ?>
    </div>
    <div class="row">
        <h4><?= __('Id Usuario Cargo') ?></h4>
        <?= $this->Text->autoParagraph(h($aplicacione->id_usuario_cargo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Aplicacion Detalles') ?></h4>
        <?php if (!empty($aplicacione->aplicacion_detalles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Aplicacione Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Dosis') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aplicacione->aplicacion_detalles as $aplicacionDetalles): ?>
            <tr>
                <td><?= h($aplicacionDetalles->id) ?></td>
                <td><?= h($aplicacionDetalles->aplicacione_id) ?></td>
                <td><?= h($aplicacionDetalles->producto_id) ?></td>
                <td><?= h($aplicacionDetalles->dosis) ?></td>
                <td><?= h($aplicacionDetalles->created) ?></td>
                <td><?= h($aplicacionDetalles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AplicacionDetalles', 'action' => 'view', $aplicacionDetalles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AplicacionDetalles', 'action' => 'edit', $aplicacionDetalles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AplicacionDetalles', 'action' => 'delete', $aplicacionDetalles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplicacionDetalles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
