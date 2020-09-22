
<a href='create' class='btn btn-primary'>New Cake</a>

<table class='table table-striped  table-bordered table-hover'>
    <?php 
    $no = 1;
    foreach ($cakes as $cake) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $cake->name ?></td>
        <td><?= $cake->price ?></td>
        <td>
            <a href="delete?id=<?= $cake->id ?>"><span class='glyphicon glyphicon-trash'></span></a>
            <a href=""><span class='glyphicon glyphicon-pencil'></span></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>