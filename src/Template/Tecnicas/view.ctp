<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnica $tecnica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tecnica'), ['action' => 'edit', $tecnica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tecnica'), ['action' => 'delete', $tecnica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campanias'), ['controller' => 'Campanias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campania'), ['controller' => 'Campanias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistema Laboreos'), ['controller' => 'SistemaLaboreos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema Laboreo'), ['controller' => 'SistemaLaboreos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Arroz Variedades'), ['controller' => 'ArrozVariedades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arroz Variedade'), ['controller' => 'ArrozVariedades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Arroz Tipo Curados'), ['controller' => 'ArrozTipoCurados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arroz Tipo Curado'), ['controller' => 'ArrozTipoCurados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnica Responsables'), ['controller' => 'Tecnicaresponsables', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnica Responsable'), ['controller' => 'Tecnicaresponsables', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tecnicas view large-9 medium-8 columns content">
    <h3><?= h($tecnica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Campania') ?></th>
            <td><?= $tecnica->has('campania') ? $this->Html->link($tecnica->campania->id, ['controller' => 'Campanias', 'action' => 'view', $tecnica->campania->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= $tecnica->has('lote') ? $this->Html->link($tecnica->lote->id, ['controller' => 'Lotes', 'action' => 'view', $tecnica->lote->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema Laboreo') ?></th>
            <td><?= $tecnica->has('sistema_laboreo') ? $this->Html->link($tecnica->sistema_laboreo->id, ['controller' => 'SistemaLaboreos', 'action' => 'view', $tecnica->sistema_laboreo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arroz Variedade') ?></th>
            <td><?= $tecnica->has('arroz_variedade') ? $this->Html->link($tecnica->arroz_variedade->id, ['controller' => 'ArrozVariedades', 'action' => 'view', $tecnica->arroz_variedade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arroz Tipo Curado') ?></th>
            <td><?= $tecnica->has('arroz_tipo_curado') ? $this->Html->link($tecnica->arroz_tipo_curado->id, ['controller' => 'ArrozTipoCurados', 'action' => 'view', $tecnica->arroz_tipo_curado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tecnica->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hectareas Sembradas') ?></th>
            <td><?= $this->Number->format($tecnica->hectareas_sembradas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Densidad Siembra') ?></th>
            <td><?= $this->Number->format($tecnica->densidad_siembra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Densidad Planta') ?></th>
            <td><?= $this->Number->format($tecnica->densidad_planta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Panojas') ?></th>
            <td><?= $this->Number->format($tecnica->panojas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grano Lleno') ?></th>
            <td><?= $this->Number->format($tecnica->grano_lleno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grano Vano') ?></th>
            <td><?= $this->Number->format($tecnica->grano_vano) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hectareas Cosechadas') ?></th>
            <td><?= $this->Number->format($tecnica->hectareas_cosechadas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Humedad Cosecha') ?></th>
            <td><?= $this->Number->format($tecnica->humedad_cosecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Kgsecos') ?></th>
            <td><?= $this->Number->format($tecnica->total_kgsecos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Factor') ?></th>
            <td><?= $this->Number->format($tecnica->factor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Siembra') ?></th>
            <td><?= h($tecnica->fecha_siembra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Emergencia') ?></th>
            <td><?= h($tecnica->fecha_emergencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Diferenciacion') ?></th>
            <td><?= h($tecnica->fecha_diferenciacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicioriego') ?></th>
            <td><?= h($tecnica->fecha_inicioriego) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Chacracompleta') ?></th>
            <td><?= h($tecnica->fecha_chacracompleta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Finriego') ?></th>
            <td><?= h($tecnica->fecha_finriego) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Floracion') ?></th>
            <td><?= h($tecnica->fecha_floracion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Cosecha') ?></th>
            <td><?= h($tecnica->fecha_cosecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tecnica->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tecnica->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacion') ?></h4>
        <?= $this->Text->autoParagraph(h($tecnica->observacion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tecnicaresponsables') ?></h4>
        <?php if (!empty($tecnica->tecnica_responsables)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Es Responsable') ?></th>
                <th scope="col"><?= __('Tecnica Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tecnica->tecnica_responsables as $tecnicaResponsables): ?>
            <tr>
                <td><?= h($tecnicaResponsables->id) ?></td>
                <td><?= h($tecnicaResponsables->user_id) ?></td>
                <td><?= h($tecnicaResponsables->es_responsable) ?></td>
                <td><?= h($tecnicaResponsables->tecnica_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tecnicaresponsables', 'action' => 'view', $tecnicaResponsables->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tecnicaresponsables', 'action' => 'edit', $tecnicaResponsables->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tecnicaresponsables', 'action' => 'delete', $tecnicaResponsables->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicaResponsables->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
