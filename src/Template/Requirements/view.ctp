<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requirement $requirement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Requirement'), ['action' => 'edit', $requirement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Requirement'), ['action' => 'delete', $requirement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requirement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requirements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requirement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents Type'), ['controller' => 'DocumentsType', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Documents Type'), ['controller' => 'DocumentsType', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requirements view large-9 medium-8 columns content">
    <h3><?= h($requirement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $requirement->has('service') ? $this->Html->link($requirement->service->name, ['controller' => 'Services', 'action' => 'view', $requirement->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($requirement->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documents Type') ?></th>
            <td><?= $requirement->has('documents_type') ? $this->Html->link($requirement->documents_type->name, ['controller' => 'DocumentsType', 'action' => 'view', $requirement->documents_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($requirement->id) ?></td>
        </tr>
    </table>
</div>
