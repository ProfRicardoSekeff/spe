<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demands'), ['controller' => 'Demands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand'), ['controller' => 'Demands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payments view large-9 medium-8 columns content">
    <h3><?= h($payment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= h($payment->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demands Id') ?></th>
            <td><?= h($payment->demands_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demand') ?></th>
            <td><?= $payment->has('demand') ? $this->Html->link($payment->demand->id, ['controller' => 'Demands', 'action' => 'view', $payment->demand->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demands Services Id') ?></th>
            <td><?= $this->Number->format($payment->demands_services_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time') ?></th>
            <td><?= h($payment->date_time) ?></td>
        </tr>
    </table>
</div>
