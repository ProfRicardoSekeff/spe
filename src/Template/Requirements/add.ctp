<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requirement $requirement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requirements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents Type'), ['controller' => 'DocumentsType', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documents Type'), ['controller' => 'DocumentsType', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requirements form large-9 medium-8 columns content">
    <?= $this->Form->create($requirement) ?>
    <fieldset>
        <legend><?= __('Add Requirement') ?></legend>
        <?php
            echo $this->Form->control('services_id', ['options' => $services]);
            echo $this->Form->control('text');
            echo $this->Form->control('documents_type_id', ['options' => $documentsType]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
