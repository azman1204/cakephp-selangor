<?= $this->Form->create() ?>

User ID
<?= $this->form->text('username', ['class' => 'form-control']) ?>
Password
<?= $this->form->password('password', ['class' => 'form-control']) ?>
<?= $this->form->submit('Login', ['class' => 'btn btn-primary']) ?>

<?= $this->Form->end() ?>