<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requirement[]|\Cake\Collection\CollectionInterface $requirements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Requirement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents Type'), ['controller' => 'DocumentsType', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documents Type'), ['controller' => 'DocumentsType', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requirements index large-9 medium-8 columns content">
    <h3><?= __('Requirements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('services_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('text') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documents_type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requirements as $requirement): ?>
            <tr>
                <td><?= $this->Number->format($requirement->id) ?></td>
                <td><?= $requirement->has('service') ? $this->Html->link($requirement->service->name, ['controller' => 'Services', 'action' => 'view', $requirement->service->id]) : '' ?></td>
                <td><?= h($requirement->text) ?></td>
                <td><?= $requirement->has('documents_type') ? $this->Html->link($requirement->documents_type->name, ['controller' => 'DocumentsType', 'action' => 'view', $requirement->documents_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $requirement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $requirement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $requirement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requirement->id)]) ?>
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
