<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArrozVariedade $arrozVariedade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Arroz Variedades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arrozVariedades form large-9 medium-8 columns content">
    <?= $this->Form->create($arrozVariedade) ?>
    <fieldset>
        <legend><?= __('Add Arroz Variedade') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('is_largoancho');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
