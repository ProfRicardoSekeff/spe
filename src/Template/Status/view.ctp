<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status $status
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Status'), ['action' => 'edit', $status->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Status'), ['action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demands'), ['controller' => 'Demands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand'), ['controller' => 'Demands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="status view large-9 medium-8 columns content">
    <h3><?= h($status->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($status->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($status->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Demands') ?></h4>
        <?php if (!empty($status->demands)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Services Id') ?></th>
                <th scope="col"><?= __('People Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Date Time') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Tags') ?></th>
                <th scope="col"><?= __('Paid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($status->demands as $demands): ?>
            <tr>
                <td><?= h($demands->id) ?></td>
                <td><?= h($demands->services_id) ?></td>
                <td><?= h($demands->people_id) ?></td>
                <td><?= h($demands->description) ?></td>
                <td><?= h($demands->date_time) ?></td>
                <td><?= h($demands->status_id) ?></td>
                <td><?= h($demands->tags) ?></td>
                <td><?= h($demands->paid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Demands', 'action' => 'view', $demands->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Demands', 'action' => 'edit', $demands->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Demands', 'action' => 'delete', $demands->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demands->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
