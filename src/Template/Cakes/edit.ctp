<?= $this->Form->create() ?>
    Name <br>
    <input type='text' name='name' value="<?= $cake->name ?>" class='form-control'>
    <br>
    Price <br>
    <input type='text' name='price' value="<?= $cake->price ?>" class='form-control'>
    <br>
    <input type='submit' value='Save' class='btn btn-primary'>
<?= $this->Form->end() ?>