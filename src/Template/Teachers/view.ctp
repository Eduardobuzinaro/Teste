<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Teacher'), ['action' => 'edit', $teacher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Teacher'), ['action' => 'delete', $teacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teachers view large-10 medium-8 columns content">
    <h3><?= h($teacher->name) ?></h3>
    <div class="panel panel-primary ">
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
    </div>
</div>
