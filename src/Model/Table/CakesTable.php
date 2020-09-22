<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CakesTable extends Table {
    // validation
    public function validationDefault(Validator $v) {
        $v->minLength('name', 3);
        //$v->add('name', 'length', ['rule' => ['lengthBetween', 5, 50]]);
        return $v;
    }
}