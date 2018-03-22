<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnicaresponsable $tecnicaresponsable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tecnicaresponsable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicaresponsable->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tecnicaresponsables'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicas'), ['controller' => 'Tecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnica'), ['controller' => 'Tecnicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tecnicaresponsables form large-9 medium-8 columns content">
    <?= $this->Form->create($tecnicaresponsable) ?>
    <fieldset>
        <legend><?= __('Edit Tecnicaresponsable') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('es_responsable');
            echo $this->Form->control('tecnica_id', ['options' => $tecnicas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
