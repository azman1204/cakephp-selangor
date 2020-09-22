
<a href='create' class='btn btn-primary'>New Cake</a>

<?php foreach ($cakes as $cake) : ?>
    <li><?= $cake->name ?> <?= $cake->price ?></li>
<?php endforeach; ?>