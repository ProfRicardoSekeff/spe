<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PeopleService[]|\Cake\Collection\CollectionInterface $peopleServices
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People Service'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleServices index large-9 medium-8 columns content">
    <h3><?= __('People Services') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('services_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('people_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peopleServices as $peopleService): ?>
            <tr>
                <td><?= $peopleService->has('service') ? $this->Html->link($peopleService->service->name, ['controller' => 'Services', 'action' => 'view', $peopleService->service->id]) : '' ?></td>
                <td><?= $peopleService->has('person') ? $this->Html->link($peopleService->person->name, ['controller' => 'People', 'action' => 'view', $peopleService->person->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peopleService->services_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peopleService->services_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peopleService->services_id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleService->services_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
