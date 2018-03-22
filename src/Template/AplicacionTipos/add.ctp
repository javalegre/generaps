<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AplicacionTipo $aplicacionTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aplicacion Tipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['controller' => 'Aplicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['controller' => 'Aplicaciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aplicacionTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($aplicacionTipo) ?>
    <fieldset>
        <legend><?= __('Add Aplicacion Tipo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('detalle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
