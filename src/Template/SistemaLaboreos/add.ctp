<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SistemaLaboreo $sistemaLaboreo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistema Laboreos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaLaboreos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemaLaboreo) ?>
    <fieldset>
        <legend><?= __('Add Sistema Laboreo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
