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