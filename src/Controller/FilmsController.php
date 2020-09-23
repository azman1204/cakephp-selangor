<?php
namespace App\Controller;

class FilmsController extends AppController {
    public function index() {
        $films = $this->paginate($this->Films);
        $this->set(compact('films'));
        //$this->render('/film/index');
    }
}