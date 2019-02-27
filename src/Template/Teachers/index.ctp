<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher[]|\Cake\Collection\CollectionInterface $teachers
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">

        <li><?= __('Actions') ?></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="schoolDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Teacher
            </a>
            <div class="dropdown-menu" aria-labelledby="schoolDropdown">
                <a class="dropdown-item" ><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?></a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="teacherDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                School
            </a>
            <div class="dropdown-menu" aria-labelledby="teacherDropdown">
                <a class="dropdown-item" ><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></a>
                <a class="dropdown-item" ><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></a>
            </div>
        </li>
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
                            <?= $this->Html->link(__('View'),
                                ['action' => 'view', $teacher->id],
                                ['class'=>'btn btn-info']) ?>
                            <?= $this->Html->link(__('Edit'),
                                ['action' => 'edit', $teacher->id],
                                ['class'=>'btn btn-warning ']) ?>
                            <?= $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $teacher->id],
                                ['class'=>'btn btn-danger'],
                                ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->Html->link(__('New Teacher'),
                ['controller' => 'Teachers', 'action' => 'add'],
                ['class'=>'btn btn-success  btn-lg']) ?>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
            </div>
        </div>
    </div>
</div>
