<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstablecimientoTipo $establecimientoTipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $establecimientoTipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $establecimientoTipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Establecimiento Tipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Establecimientos'), ['controller' => 'Establecimientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establecimiento'), ['controller' => 'Establecimientos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establecimientoTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($establecimientoTipo) ?>
    <fieldset>
        <legend><?= __('Edit Establecimiento Tipo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('detalle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
