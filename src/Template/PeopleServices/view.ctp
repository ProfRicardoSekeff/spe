<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PeopleService $peopleService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Service'), ['action' => 'edit', $peopleService->services_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Service'), ['action' => 'delete', $peopleService->services_id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleService->services_id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleServices view large-9 medium-8 columns content">
    <h3><?= h($peopleService->services_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $peopleService->has('service') ? $this->Html->link($peopleService->service->name, ['controller' => 'Services', 'action' => 'view', $peopleService->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $peopleService->has('person') ? $this->Html->link($peopleService->person->name, ['controller' => 'People', 'action' => 'view', $peopleService->person->id]) : '' ?></td>
        </tr>
    </table>
</div>
