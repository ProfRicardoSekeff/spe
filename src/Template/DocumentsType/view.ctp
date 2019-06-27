<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocumentsType $documentsType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Documents Type'), ['action' => 'edit', $documentsType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Documents Type'), ['action' => 'delete', $documentsType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentsType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Documents Type'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Documents Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requirements'), ['controller' => 'Requirements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requirement'), ['controller' => 'Requirements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documentsType view large-9 medium-8 columns content">
    <h3><?= h($documentsType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($documentsType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= h($documentsType->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($documentsType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Documents') ?></h4>
        <?php if (!empty($documentsType->documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uri') ?></th>
                <th scope="col"><?= __('Date Time') ?></th>
                <th scope="col"><?= __('Documents Type Id') ?></th>
                <th scope="col"><?= __('Demands Id') ?></th>
                <th scope="col"><?= __('Demands Services Id') ?></th>
                <th scope="col"><?= __('Demands People Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($documentsType->documents as $documents): ?>
            <tr>
                <td><?= h($documents->id) ?></td>
                <td><?= h($documents->uri) ?></td>
                <td><?= h($documents->date_time) ?></td>
                <td><?= h($documents->documents_type_id) ?></td>
                <td><?= h($documents->demands_id) ?></td>
                <td><?= h($documents->demands_services_id) ?></td>
                <td><?= h($documents->demands_people_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $documents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Documents', 'action' => 'delete', $documents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Requirements') ?></h4>
        <?php if (!empty($documentsType->requirements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Services Id') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Documents Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($documentsType->requirements as $requirements): ?>
            <tr>
                <td><?= h($requirements->id) ?></td>
                <td><?= h($requirements->services_id) ?></td>
                <td><?= h($requirements->text) ?></td>
                <td><?= h($requirements->documents_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Requirements', 'action' => 'view', $requirements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Requirements', 'action' => 'edit', $requirements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Requirements', 'action' => 'delete', $requirements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requirements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
