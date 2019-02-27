<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= __('Actions') ?></li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="schoolDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Teacher
            </a>
            <div class=" dropdown-menu" aria-labelledby="schoolDropdown">
                <a class="dropdown-item " ><?= $this->Html->link(__('List Teachers'), ['action' => 'index']) ?></a>
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
<div class="teachers view large-10 medium-8 columns content">
    <h4><?= h($teacher->name) ?></h4>
    <div class="panel panel-primary btn-lg">
        <table class="vertical-table table-striped">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($teacher->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($teacher->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Phone') ?></th>
                <td><?= h($teacher->phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('School') ?></th>
                <td><?= $teacher->has('school') ? $this->Html->link($teacher->school->name, ['controller' => 'Schools', 'action' => 'view', $teacher->school->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($teacher->id) ?></td>
            </tr>
        </table>
        <?= $this->Html->link(__('Edit  '),
            ['action' => 'edit', $teacher->id],
            ['class' =>'btn btn-primary btn-lg']) ?>
        <?= $this->Form->postLink(__('Delete'),
                    ['action' => 'delete', $teacher->id],
                    ['class' =>'btn btn-danger btn-lg '],
                    ['confirm' => __('Are you sure you want to delete  {0}?', $teacher->name)])
        ?>
    </div>
</div>
