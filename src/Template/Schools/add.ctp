<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= __('Actions') ?></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="schoolDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                School
            </a>
            <div class="dropdown-menu" aria-labelledby="schoolDropdown">
                <a class="dropdown-item" ><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?></a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="teacherDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Teacher
            </a>
            <div class="dropdown-menu" aria-labelledby="teacherDropdown">
                <a class="dropdown-item" ><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></a>
                <a class="dropdown-item" ><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></a>
            </div>
        </li>
    </ul>
</nav>
<div class="schools form large-10 medium-8 columns content">
    <?= $this->Form->create($school) ?>
    <fieldset>
        <legend><?= __('Add School') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),
        ['class' =>'btn btn-success btn-lg ']) ?>
    <?= $this->Form->end() ?>
</div>
