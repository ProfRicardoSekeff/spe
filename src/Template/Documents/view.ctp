<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Document'), ['action' => 'edit', $document->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Document'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents Type'), ['controller' => 'DocumentsType', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Documents Type'), ['controller' => 'DocumentsType', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demands'), ['controller' => 'Demands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand'), ['controller' => 'Demands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documents view large-9 medium-8 columns content">
    <h3><?= h($document->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uri') ?></th>
            <td><?= h($document->uri) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documents Type') ?></th>
            <td><?= $document->has('documents_type') ? $this->Html->link($document->documents_type->name, ['controller' => 'DocumentsType', 'action' => 'view', $document->documents_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demands Id') ?></th>
            <td><?= h($document->demands_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demand') ?></th>
            <td><?= $document->has('demand') ? $this->Html->link($document->demand->id, ['controller' => 'Demands', 'action' => 'view', $document->demand->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($document->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demands Services Id') ?></th>
            <td><?= $this->Number->format($document->demands_services_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time') ?></th>
            <td><?= h($document->date_time) ?></td>
        </tr>
    </table>
</div>
