<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List History'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Demands'), ['controller' => 'Demands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demand'), ['controller' => 'Demands', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="history form large-9 medium-8 columns content">
    <?= $this->Form->create($history) ?>
    <fieldset>
        <legend><?= __('Add History') ?></legend>
        <?php
            echo $this->Form->control('from');
            echo $this->Form->control('receipt');
            echo $this->Form->control('text');
            echo $this->Form->control('demands_id');
            echo $this->Form->control('demands_services_id');
            echo $this->Form->control('demands_people_id', ['options' => $demands]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
