<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campania $campania
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campania->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campania->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Campanias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aplicaciones'), ['controller' => 'Aplicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicacione'), ['controller' => 'Aplicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sectores'), ['controller' => 'Sectores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sectore'), ['controller' => 'Sectores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="campanias form large-9 medium-8 columns content">
    <?= $this->Form->create($campania) ?>
    <fieldset>
        <legend><?= __('Edit Campania') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('anio');
            echo $this->Form->control('detalle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
