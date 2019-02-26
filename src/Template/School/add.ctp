<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List School'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="school form large-9 medium-8 columns content">
    <?= $this->Form->create($school) ?>
    <fieldset>
        <legend><?= __('Add School') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('created_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
