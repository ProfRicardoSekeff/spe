<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PeopleType $peopleType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List People Type'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleType form large-9 medium-8 columns content">
    <?= $this->Form->create($peopleType) ?>
    <fieldset>
        <legend><?= __('Add People Type') ?></legend>
        <?php
            echo $this->Form->control('type_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
