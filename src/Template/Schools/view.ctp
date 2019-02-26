<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schools view large-10 medium-8 columns content">
    <h3><?= h($school->name) ?></h3>
    <div class="panel panel-primary ">
        <table class="vertical-table table-striped">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($school->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($school->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Phone') ?></th>
                <td><?= h($school->phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($school->id) ?></td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('Related Teachers') ?></h4>
            <?php if (!empty($school->teachers)): ?>
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Phone') ?></th>
                    <th scope="col"><?= __('School Id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($school->teachers as $teachers): ?>
                <tr>
                    <td><?= h($teachers->id) ?></td>
                    <td><?= h($teachers->name) ?></td>
                    <td><?= h($teachers->email) ?></td>
                    <td><?= h($teachers->phone) ?></td>
                    <td><?= h($teachers->school_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Teachers', 'action' => 'view', $teachers->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Teachers', 'action' => 'edit', $teachers->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teachers', 'action' => 'delete', $teachers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teachers->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>
