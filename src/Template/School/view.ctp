<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->school_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->school_id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->school_id)]) ?> </li>
        <li><?= $this->Html->link(__('List School'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<br>
<div class="school view large-10 medium-8 columns content">
    <h3><?= h($school->name) ?></h3>
    <div class="panel panel-primary ">
        <table class="vertical-table  table-striped">
            <tr>
                <th scope="row "><?= __('Name') ?></th>
                <td><?= h($school->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Phone') ?></th>
                <td><?= h($school->phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($school->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('School Id') ?></th>
                <td><?= $this->Number->format($school->school_id) ?></td>
            </tr>

        </table>
    </div>
</div>
