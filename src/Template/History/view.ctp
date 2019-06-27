<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit History'), ['action' => 'edit', $history->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete History'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?> </li>
        <li><?= $this->Html->link(__('List History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demands'), ['controller' => 'Demands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand'), ['controller' => 'Demands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="history view large-9 medium-8 columns content">
    <h3><?= h($history->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('From') ?></th>
            <td><?= h($history->from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receipt') ?></th>
            <td><?= h($history->receipt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($history->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demands Id') ?></th>
            <td><?= h($history->demands_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demand') ?></th>
            <td><?= $history->has('demand') ? $this->Html->link($history->demand->id, ['controller' => 'Demands', 'action' => 'view', $history->demand->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($history->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demands Services Id') ?></th>
            <td><?= $this->Number->format($history->demands_services_id) ?></td>
        </tr>
    </table>
</div>
