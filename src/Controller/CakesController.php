<?php
namespace App\Controller;

class CakesController extends AppController {
    public function delete() {
        $id = $this->request->query('id'); // baca data dari URL ?id=...
        $cake = $this->Cakes->get($id); // find by primary key
        $this->Cakes->delete($cake);
        $this->redirect('/cakes/listing');
    }

    public function create() {
        if($this->request->is('post')) {
            // submit form
            $cake = $this->Cakes->newEntity();
            $data = $this->request->getData(); // baca semua data dari form
            $cake->name = $data['name'];
            $cake->price = $data['price'];
            $this->Cakes->save($cake);
            $this->redirect('/cakes/listing');
        }
    }

    public function listing() {
        $cakes = $this->Cakes->find();
        $this->set(compact('cakes')); 
    }
}