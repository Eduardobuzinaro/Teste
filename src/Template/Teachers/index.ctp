<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher[]|\Cake\Collection\CollectionInterface $teachers
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teachers index large-10 medium-8 columns content">
    <div class="panel panel-primary ">
        <legend><?= __('List of teachers') ?></legend>
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teachers as $teacher): ?>
                    <tr>
                        <td><?= $this->Number->format($teacher->id) ?></td>
                        <td><?= h($teacher->name) ?></td>
                        <td><?= h($teacher->email) ?></td>
                        <td><?= h($teacher->phone) ?></td>
                        <td><?= $teacher->has('school') ? $this->Html->link($teacher->school->name, ['controller' => 'Schools', 'action' => 'view', $teacher->school->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $teacher->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teacher->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id)]) ?>
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
    </div>
</div>
