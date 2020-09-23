<?php
namespace App\Controller;

class LoginController extends AppController {
    public function index() {
        if($this->request->is('post')) {
            // submit login screen
            $user = $this->Auth->identify(); // check form dan staff table
            if($user) {
                $this->Auth->setUser($user);
                $this->redirect('/articles');
            } else {
                $this->Flash->error('Wrong username and password');
            }
        }
    }

    public function passwordGenerator() {
        $hasher = new \Cake\Auth\DefaultPasswordHasher();
        die($hasher->hash('1234'));
    }
}