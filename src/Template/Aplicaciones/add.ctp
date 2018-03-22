<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aplicacione $aplicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campanias'), ['controller' => 'Campanias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campania'), ['controller' => 'Campanias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicacion Tipos'), ['controller' => 'AplicacionTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacion Tipo'), ['controller' => 'AplicacionTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicacion Detalles'), ['controller' => 'AplicacionDetalles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacion Detalle'), ['controller' => 'AplicacionDetalles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aplicaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($aplicacione) ?>
    <fieldset>
        <legend><?= __('Add Aplicacione') ?></legend>
        <?php
            echo $this->Form->control('campania_id', ['options' => $campanias, 'empty' => true]);
            echo $this->Form->control('lote_id', ['options' => $lotes, 'empty' => true]);
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('is_aerea');
            echo $this->Form->control('humedad');
            echo $this->Form->control('viento_vel');
            echo $this->Form->control('viento_dir');
            echo $this->Form->control('temperatura');
            echo $this->Form->control('caudal');
            echo $this->Form->control('superficie');
            echo $this->Form->control('cantidad');
            echo $this->Form->control('detalle');
            echo $this->Form->control('aplicacion_tipo_id', ['options' => $aplicacionTipos, 'empty' => true]);
            echo $this->Form->control('id_usuario_cargo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
