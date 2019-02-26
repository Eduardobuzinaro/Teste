<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<nav class="large-2 medium-9 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $school->school_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $school->school_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List School'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<br>
<div class="school form large-10  columns content">
    <div class="panel panel-primary ">
        <div class="panel-body">
            <?= $this->Form->create($school) ?>
            <fieldset>
                <legend><?= __('Edit School') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
