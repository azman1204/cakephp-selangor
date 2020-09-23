<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakePHP Training</title>
    <?= $this->Html->css('/bootstrap-3.4.1/css/bootstrap.css') ?>
    <?= $this->Html->css('/css/global.css') ?>
    <?= $this->Html->script('/js/jquery.js') ?>
    <?= $this->Html->script('/bootstrap-3.4.1/js/bootstrap.js') ?>
</head>
<body>
    <?= $this->element('menu') ?>
    <div class='container'>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
