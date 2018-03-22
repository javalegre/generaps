<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArrozTipoCurado $arrozTipoCurado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $arrozTipoCurado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $arrozTipoCurado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Arroz Tipo Curados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arrozTipoCurados form large-9 medium-8 columns content">
    <?= $this->Form->create($arrozTipoCurado) ?>
    <fieldset>
        <legend><?= __('Edit Arroz Tipo Curado') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
