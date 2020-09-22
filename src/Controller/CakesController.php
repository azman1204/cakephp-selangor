<?php
namespace App\Controller;

class CakesController extends AppController {
    public function edit() {
        $id = $this->request->query('id'); // read id from URL ..?id=2
        $cake = $this->Cakes->get($id); // find by primary key
        
        if($this->request->is('post')) {
            // update data
            $data = $this->request->getData();
            $cake->name = $data['name'];
            $cake->price = $data['price'];
            $this->Cakes->save($cake);
            $this->redirect('/cakes/listing');
        } else {
            // show form with previous data
            $this->set(compact('cake')); // send data to view
        }
    }

    public function delete() {
        $id = $this->request->query('id'); // baca data dari URL ?id=...
        $cake = $this->Cakes->get($id); // find by primary key
        $this->Cakes->delete($cake);
        $this->redirect('/cakes/listing');
    }

    public function create() {
        if($this->request->is('post')) {
            // submit form
            $cake = $this->Cakes->newEntity(['validate' => 'update']);
            $data = $this->request->getData(); // baca semua data dari form
            $cake->name = $data['name'];
            $cake->price = $data['price'];
            if($this->Cakes->save($cake)) {
                // validation ok
                $this->redirect('/cakes/listing');
            } else {
                // validation x ok
                echo 'validation not ok';
            }
        }
    }

    public function listing() {
        $cakes = $this->Cakes->find();
        $this->set(compact('cakes')); 
    }
}