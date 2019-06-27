<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demand $demand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demand'), ['action' => 'edit', $demand->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demand'), ['action' => 'delete', $demand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demand->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demands view large-9 medium-8 columns content">
    <h3><?= h($demand->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($demand->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $demand->has('service') ? $this->Html->link($demand->service->name, ['controller' => 'Services', 'action' => 'view', $demand->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $demand->has('person') ? $this->Html->link($demand->person->name, ['controller' => 'People', 'action' => 'view', $demand->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($demand->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $demand->has('status') ? $this->Html->link($demand->status->name, ['controller' => 'Status', 'action' => 'view', $demand->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tags') ?></th>
            <td><?= h($demand->tags) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time') ?></th>
            <td><?= h($demand->date_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paid') ?></th>
            <td><?= $demand->paid ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
