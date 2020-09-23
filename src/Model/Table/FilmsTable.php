<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class FilmsTable extends Table {
    // configuration
    public function initialize(array $config) {
        parent::initialize($config);
        $this->setTable('film');
    }
}