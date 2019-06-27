<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $documents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Document'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents Type'), ['controller' => 'DocumentsType', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documents Type'), ['controller' => 'DocumentsType', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demands'), ['controller' => 'Demands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demand'), ['controller' => 'Demands', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documents index large-9 medium-8 columns content">
    <h3><?= __('Documents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uri') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documents_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demands_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demands_services_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demands_people_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($documents as $document): ?>
            <tr>
                <td><?= $this->Number->format($document->id) ?></td>
                <td><?= h($document->uri) ?></td>
                <td><?= h($document->date_time) ?></td>
                <td><?= $document->has('documents_type') ? $this->Html->link($document->documents_type->name, ['controller' => 'DocumentsType', 'action' => 'view', $document->documents_type->id]) : '' ?></td>
                <td><?= h($document->demands_id) ?></td>
                <td><?= $this->Number->format($document->demands_services_id) ?></td>
                <td><?= $document->has('demand') ? $this->Html->link($document->demand->id, ['controller' => 'Demands', 'action' => 'view', $document->demand->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $document->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $document->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?>
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
