<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnica $tecnica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tecnica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tecnica->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['action' => 'index']) ?></li>
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
<div class="tecnicas form large-9 medium-8 columns content">
    <?= $this->Form->create($tecnica) ?>
    <fieldset>
        <legend><?= __('Edit Tecnica') ?></legend>
        <?php
            echo $this->Form->control('campania_id', ['options' => $campanias, 'empty' => true]);
            echo $this->Form->control('lote_id', ['options' => $lotes, 'empty' => true]);
            echo $this->Form->control('sistema_laboreo_id', ['options' => $sistemaLaboreos, 'empty' => true]);
            echo $this->Form->control('arroz_variedade_id', ['options' => $arrozVariedades, 'empty' => true]);
            echo $this->Form->control('arroz_tipo_curado_id', ['options' => $arrozTipoCurados, 'empty' => true]);
            echo $this->Form->control('hectareas_sembradas');
            echo $this->Form->control('fecha_siembra', ['empty' => true]);
            echo $this->Form->control('densidad_siembra');
            echo $this->Form->control('fecha_emergencia', ['empty' => true]);
            echo $this->Form->control('densidad_planta');
            echo $this->Form->control('fecha_diferenciacion', ['empty' => true]);
            echo $this->Form->control('fecha_inicioriego', ['empty' => true]);
            echo $this->Form->control('fecha_chacracompleta', ['empty' => true]);
            echo $this->Form->control('fecha_finriego', ['empty' => true]);
            echo $this->Form->control('fecha_floracion', ['empty' => true]);
            echo $this->Form->control('panojas');
            echo $this->Form->control('grano_lleno');
            echo $this->Form->control('grano_vano');
            echo $this->Form->control('fecha_cosecha', ['empty' => true]);
            echo $this->Form->control('hectareas_cosechadas');
            echo $this->Form->control('humedad_cosecha');
            echo $this->Form->control('total_kgsecos');
            echo $this->Form->control('factor');
            echo $this->Form->control('observacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
