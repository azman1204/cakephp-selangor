<?= $this->Form->create() ?>
<div class='well'>
    <?= $this->Form->input('title') ?>
    <?= $this->form->submit('Cari') ?>
</div>
<?= $this->form->end() ?>

<table class='table table-bordered table-striped table-hover'>
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Release Year</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $no = 1;
    foreach ($films as $film) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $film->title ?></td>
            <td><?= $film->description ?></td>
            <td><?= $film->release_year ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('Mula')) ?>
        <?= $this->Paginator->prev('< ' . __('Sebelum')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('Seterus') . ' >') ?>
        <?= $this->Paginator->last(__('Akhir') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Mukasurat {{page}} dari {{pages}}, Papar {{current}} rekod(s) dari {{count}} jumlah')]) ?></p>
</div>