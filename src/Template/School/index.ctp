<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School[]|\Cake\Collection\CollectionInterface $school
 */
?>
<nav class="title-area large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<br>
<div class="school index view large-10 medium-8  columns content">
    <div class="panel panel-primary ">
        <legend><?= __('List of schools') ?></legend>
        <div class="panel-body">
            <table  class="table table-striped"">
                <thead>
                <tr>
                        <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($school as $school): ?>
                    <tr>
                        <td><?= $this->Number->format($school->school_id) ?></td>
                        <td><?= h($school->name) ?></td>
                        <td><?= h($school->phone) ?></td>
                        <td><?= h($school->email) ?></td>
                        <td class="actions">
                            <div class="btn-group">
                                <i class="fa fa-search"><?= $this->Html->link(__('View'), ['action' => 'view', $school->school_id]) ?></i>
                                <i class="fas fa-pencil-alt"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $school->school_id]) ?> </i>
                                <i class="fa fa-trash">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $school->school_id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->school_id)]) ?>
                                </i>
                            </div>
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
