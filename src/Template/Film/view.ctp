<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $film
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Film'), ['action' => 'edit', $film->film_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Film'), ['action' => 'delete', $film->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $film->film_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Film'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="film view large-9 medium-8 columns content">
    <h3><?= h($film->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($film->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Release Year') ?></th>
            <td><?= h($film->release_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rating') ?></th>
            <td><?= h($film->rating) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Special Features') ?></th>
            <td><?= h($film->special_features) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Film Id') ?></th>
            <td><?= $this->Number->format($film->film_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language Id') ?></th>
            <td><?= $this->Number->format($film->language_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Original Language Id') ?></th>
            <td><?= $this->Number->format($film->original_language_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental Duration') ?></th>
            <td><?= $this->Number->format($film->rental_duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental Rate') ?></th>
            <td><?= $this->Number->format($film->rental_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= $this->Number->format($film->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Replacement Cost') ?></th>
            <td><?= $this->Number->format($film->replacement_cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($film->last_update) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($film->description)); ?>
    </div>
</div>
