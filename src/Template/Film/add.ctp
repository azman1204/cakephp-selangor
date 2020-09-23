<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $film
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Film'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="film form large-9 medium-8 columns content">
    <?= $this->Form->create($film) ?>
    <fieldset>
        <legend><?= __('Add Film') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('release_year');
            echo $this->Form->control('language_id');
            echo $this->Form->control('original_language_id');
            echo $this->Form->control('rental_duration');
            echo $this->Form->control('rental_rate');
            echo $this->Form->control('length');
            echo $this->Form->control('replacement_cost');
            echo $this->Form->control('rating');
            echo $this->Form->control('special_features');
            echo $this->Form->control('last_update');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
