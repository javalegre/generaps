<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lote $lote
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lote'), ['action' => 'edit', $lote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lote'), ['action' => 'delete', $lote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['controller' => 'Aplicaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['controller' => 'Aplicaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lotes view large-9 medium-8 columns content">
    <h3><?= h($lote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hectareas Reales') ?></th>
            <td><?= $this->Number->format($lote->hectareas_reales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Sector') ?></th>
            <td><?= $this->Number->format($lote->id_sector) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nombre') ?></h4>
        <?= $this->Text->autoParagraph(h($lote->nombre)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Aplicaciones') ?></h4>
        <?php if (!empty($lote->aplicaciones)): ?>
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
            <?php foreach ($lote->aplicaciones as $aplicaciones): ?>
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
    <div class="related">
        <h4><?= __('Related Tecnicas') ?></h4>
        <?php if (!empty($lote->tecnicas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Campania Id') ?></th>
                <th scope="col"><?= __('Lote Id') ?></th>
                <th scope="col"><?= __('Sistema Laboreo Id') ?></th>
                <th scope="col"><?= __('Arroz Variedade Id') ?></th>
                <th scope="col"><?= __('Arroz Tipo Curado Id') ?></th>
                <th scope="col"><?= __('Hectareas Sembradas') ?></th>
                <th scope="col"><?= __('Fecha Siembra') ?></th>
                <th scope="col"><?= __('Densidad Siembra') ?></th>
                <th scope="col"><?= __('Fecha Emergencia') ?></th>
                <th scope="col"><?= __('Densidad Planta') ?></th>
                <th scope="col"><?= __('Fecha Diferenciacion') ?></th>
                <th scope="col"><?= __('Fecha Inicioriego') ?></th>
                <th scope="col"><?= __('Fecha Chacracompleta') ?></th>
                <th scope="col"><?= __('Fecha Finriego') ?></th>
                <th scope="col"><?= __('Fecha Floracion') ?></th>
                <th scope="col"><?= __('Panojas') ?></th>
                <th scope="col"><?= __('Grano Lleno') ?></th>
                <th scope="col"><?= __('Grano Vano') ?></th>
                <th scope="col"><?= __('Fecha Cosecha') ?></th>
                <th scope="col"><?= __('Hectareas Cosechadas') ?></th>
                <th scope="col"><?= __('Humedad Cosecha') ?></th>
                <th scope="col"><?= __('Total Kgsecos') ?></th>
                <th scope="col"><?= __('Factor') ?></th>
                <th scope="col"><?= __('Observacion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lote->tecnicas as $tecnicas): ?>
            <tr>
                <td><?= h($tecnicas->id) ?></td>
                <td><?= h($tecnicas->campania_id) ?></td>
                <td><?= h($tecnicas->lote_id) ?></td>
                <td><?= h($tecnicas->sistema_laboreo_id) ?></td>
                <td><?= h($tecnicas->arroz_variedade_id) ?></td>
                <td><?= h($tecnicas->arroz_tipo_curado_id) ?></td>
                <td><?= h($tecnicas->hectareas_sembradas) ?></td>
                <td><?= h($tecnicas->fecha_siembra) ?></td>
                <td><?= h($tecnicas->densidad_siembra) ?></td>
                <td><?= h($tecnicas->fecha_emergencia) ?></td>
                <td><?= h($tecnicas->densidad_planta) ?></td>
                <td><?= h($tecnicas->fecha_diferenciacion) ?></td>
                <td><?= h($tecnicas->fecha_inicioriego) ?></td>
                <td><?= h($tecnicas->fecha_chacracompleta) ?></td>
                <td><?= h($tecnicas->fecha_finriego) ?></td>
                <td><?= h($tecnicas->fecha_floracion) ?></td>
                <td><?= h($tecnicas->panojas) ?></td>
                <td><?= h($tecnicas->grano_lleno) ?></td>
                <td><?= h($tecnicas->grano_vano) ?></td>
                <td><?= h($tecnicas->fecha_cosecha) ?></td>
                <td><?= h($tecnicas->hectareas_cosechadas) ?></td>
                <td><?= h($tecnicas->humedad_cosecha) ?></td>
                <td><?= h($tecnicas->total_kgsecos) ?></td>
                <td><?= h($tecnicas->factor) ?></td>
                <td><?= h($tecnicas->observacion) ?></td>
                <td><?= h($tecnicas->created) ?></td>
                <td><?= h($tecnicas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tecnicas', 'action' => 'view', $tecnicas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tecnicas', 'action' => 'edit', $tecnicas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tecnicas', 'action' => 'delete', $tecnicas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
