<?php
namespace App\Controller;

class FilmsController extends AppController {
    public function index() {
        if($this->request->is('post')) {
            // filter by title
            $title = $this->request->getData('title');
            $query = $this->Films->find('all', ['conditions' => ["title LIKE" => "%$title%"]]);
            $films = $this->paginate($query);
            //$films = $this->paginate($this->Films);
        } else {
            // list all
            $films = $this->paginate($this->Films);
        }
        
        $this->set(compact('films'));
        //$this->render('/film/index');
    }

    // demo Flash
    // Flash - Flash Session / quick session
    public function sample() {
        $this->Flash->success('Testing Flash');
        $this->Flash->error('Testing Flash Error');
        $this->render('/films/contoh'); // contoh.ctp
        // automatic render view sample.ctp
    }
}