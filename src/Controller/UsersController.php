<?php

/*
 * framework_course's cakephp training
 */

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController {

    public function register() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $this->Users->save($user);

            $this->Flash->success('Register successful.');
            return $this->redirect(['action' => 'login']);
        }
        $this->set(["user" => $user]);
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl(['controller' => 'Posts',
                                    'action' => 'index']));
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }

    public function logout() {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

}
