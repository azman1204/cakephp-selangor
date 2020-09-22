<?php
namespace App\Controller;

class CakesController extends AppController {
    public function listing() {
        $cakes = $this->Cakes->find();
        $this->set(compact('cakes')); 
    }
}