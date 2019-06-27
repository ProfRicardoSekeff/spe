<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PeopleType $peopleType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Type'), ['action' => 'edit', $peopleType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Type'), ['action' => 'delete', $peopleType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Type'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleType view large-9 medium-8 columns content">
    <h3><?= h($peopleType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type Name') ?></th>
            <td><?= h($peopleType->type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($peopleType->people)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Cellphone') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('People Type Id') ?></th>
                <th scope="col"><?= __('Departments Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($peopleType->people as $people): ?>
            <tr>
                <td><?= h($people->id) ?></td>
                <td><?= h($people->name) ?></td>
                <td><?= h($people->email) ?></td>
                <td><?= h($people->cellphone) ?></td>
                <td><?= h($people->cpf) ?></td>
                <td><?= h($people->people_type_id) ?></td>
                <td><?= h($people->departments_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $people->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $people->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
