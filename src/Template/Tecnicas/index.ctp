<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnica[]|\Cake\Collection\CollectionInterface $tecnicas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tecnica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campanias'), ['controller' => 'Campanias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campania'), ['controller' => 'Campanias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistema Laboreos'), ['controller' => 'SistemaLaboreos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema Laboreo'), ['controller' => 'SistemaLaboreos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Arroz Variedades'), ['controller' => 'ArrozVariedades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arroz Variedade'), ['controller' => 'ArrozVariedades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Arroz Tipo Curados'), ['controller' => 'ArrozTipoCurados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arroz Tipo Curado'), ['controller' => 'ArrozTipoCurados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnica Responsables'), ['controller' => 'Tecnicaresponsables', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnica Responsable'), ['controller' => 'Tecnicaresponsables', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tecnicas index large-9 medium-8 columns content">
    <h3><?= __('Tecnicas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campania_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_laboreo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arroz_variedade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arroz_tipo_curado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hectareas_sembradas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_siembra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('densidad_siembra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_emergencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('densidad_planta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_diferenciacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicioriego') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_chacracompleta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_finriego') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_floracion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('panojas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grano_lleno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grano_vano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_cosecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hectareas_cosechadas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('humedad_cosecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_kgsecos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('factor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tecnicas as $tecnica): ?>
            <tr>
                <td><?= $this->Number->format($tecnica->id) ?></td>
                <td><?= $tecnica->has('campania') ? $this->Html->link($tecnica->campania->id, ['controller' => 'Campanias', 'action' => 'view', $tecnica->campania->id]) : '' ?></td>
                <td><?= $tecnica->has('lote') ? $this->Html->link($tecnica->lote->id, ['controller' => 'Lotes', 'action' => 'view', $tecnica->lote->id]) : '' ?></td>
                <td><?= $tecnica->has('sistema_laboreo') ? $this->Html->link($tecnica->sistema_laboreo->id, ['controller' => 'SistemaLaboreos', 'action' => 'view', $tecnica->sistema_laboreo->id]) : '' ?></td>
                <td><?= $tecnica->has('arroz_variedade') ? $this->Html->link($tecnica->arroz_variedade->id, ['controller' => 'ArrozVariedades', 'action' => 'view', $tecnica->arroz_variedade->id]) : '' ?></td>
                <td><?= $tecnica->has('arroz_tipo_curado') ? $this->Html->link($tecnica->arroz_tipo_curado->id, ['controller' => 'ArrozTipoCurados', 'action' => 'view', $tecnica->arroz_tipo_curado->id]) : '' ?></td>
                <td><?= $this->Number->format($tecnica->hectareas_sembradas) ?></td>
                <td><?= h($tecnica->fecha_siembra) ?></td>
                <td><?= $this->Number->format($tecnica->densidad_siembra) ?></td>
                <td><?= h($tecnica->fecha_emergencia) ?></td>
                <td><?= $this->Number->format($tecnica->densidad_planta) ?></td>
                <td><?= h($tecnica->fecha_diferenciacion) ?></td>
                <td><?= h($tecnica->fecha_inicioriego) ?></td>
                <td><?= h($tecnica->fecha_chacracompleta) ?></td>
                <td><?= h($tecnica->fecha_finriego) ?></td>
                <td><?= h($tecnica->fecha_floracion) ?></td>
                <td><?= $this->Number->format($tecnica->panojas) ?></td>
                <td><?= $this->Number->format($tecnica->grano_lleno) ?></td>
                <td><?= $this->Number->format($tecnica->grano_vano) ?></td>
                <td><?= h($tecnica->fecha_cosecha) ?></td>
                <td><?= $this->Number->format($tecnica->hectareas_cosechadas) ?></td>
                <td><?= $this->Number->format($tecnica->humedad_cosecha) ?></td>
                <td><?= $this->Number->format($tecnica->total_kgsecos) ?></td>
                <td><?= $this->Number->format($tecnica->factor) ?></td>
                <td><?= h($tecnica->created) ?></td>
                <td><?= h($tecnica->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tecnica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tecnica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tecnica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnica->id)]) ?>
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
