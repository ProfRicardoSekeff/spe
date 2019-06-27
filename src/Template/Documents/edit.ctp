<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $document->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Documents Type'), ['controller' => 'DocumentsType', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documents Type'), ['controller' => 'DocumentsType', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demands'), ['controller' => 'Demands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demand'), ['controller' => 'Demands', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documents form large-9 medium-8 columns content">
    <?= $this->Form->create($document) ?>
    <fieldset>
        <legend><?= __('Edit Document') ?></legend>
        <?php
            echo $this->Form->control('uri');
            echo $this->Form->control('date_time', ['empty' => true]);
            echo $this->Form->control('documents_type_id', ['options' => $documentsType]);
            echo $this->Form->control('demands_id');
            echo $this->Form->control('demands_services_id');
            echo $this->Form->control('demands_people_id', ['options' => $demands]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
