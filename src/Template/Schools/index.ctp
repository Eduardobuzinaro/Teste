<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School[]|\Cake\Collection\CollectionInterface $schools
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= __('Actions') ?></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="teacherDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                School
            </a>
            <div class="dropdown-menu" aria-labelledby="teacherDropdown">
                <a class="dropdown-item" ><?= $this->Html->link(__('New School'), ['action' => 'add']) ?></a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="schoolDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Teacher
            </a>
            <div class="dropdown-menu" aria-labelledby="schoolDropdown">
                <a class="dropdown-item" ><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></a>
                <a class="dropdown-item" ><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></a>
            </div>
        </li>
    </ul>
</nav>
<div class="schools index large-10 medium-8 columns content">
    <div class="panel panel-primary ">
        <legend><?= __('List of schools') ?></legend>
        <div class="panel-body">
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($schools as $school): ?>
                    <tr>
                        <td><?= $this->Number->format($school->id) ?></td>
                        <td><?= h($school->name) ?></td>
                        <td><?= h($school->email) ?></td>
                        <td><?= h($school->phone) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'),
                                ['action' => 'view', $school->id],
                                ['class'=>'btn btn-info']) ?>
                            <?= $this->Html->link(__('Edit'),
                                ['action' => 'edit', $school->id],
                                ['class'=>'btn btn-warning']) ?>
                            <?= $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $school->id],
                                ['class'=>'btn btn-danger'],
                                ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->Html->link(__('New School'),
                ['controller' => 'Schools', 'action' => 'add'],
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
