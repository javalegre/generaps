<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sectore $sectore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sectores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Establecimientos'), ['controller' => 'Establecimientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establecimiento'), ['controller' => 'Establecimientos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campanias'), ['controller' => 'Campanias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campania'), ['controller' => 'Campanias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sectores form large-9 medium-8 columns content">
    <?= $this->Form->create($sectore) ?>
    <fieldset>
        <legend><?= __('Add Sectore') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('establecimiento_id', ['options' => $establecimientos, 'empty' => true]);
            echo $this->Form->control('campania_id', ['options' => $campanias, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
