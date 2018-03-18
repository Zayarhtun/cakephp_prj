<?php

/*
 * framework_course's cakephp training
 */

namespace App\Controller;

use App\Controller\AppController;

class CategoriesController extends AppController {

    //03March2018
    public function index() {
        $categories = $this->Categories->find("all");

        /* this method can use in cakephp */
        //$this->set(compact("posts"));

        $this->set(["categories" => $categories]);
    }

    //11March2018
    public function add() {
        $cat = $this->Categories->newEntity();
        
        if ($this->request->is('post')) {
            $post = $this->Categories->patchEntity($cat, $this->request->getData());
            $this->Categories->save($cat);

            $this->Flash->success('The category has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set([
            "cat" => $cat,
        ]);
    }

    public function edit($id) {
        $cat = $this->Categories->get($id);
       
        if ($this->request->is('put')) {
            $post = $this->Categories->patchEntity($cat, $this->request->getData());
            $this->Categories->save($cat);

            $this->Flash->success('The Category has been edited.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set([
            "cat" => $cat
        ]);
    }

    public function delete($id) {
        $post = $this->Categories->get($id);
        $this->Categories->delete($post);

        $this->Flash->success('The Category has been deleted.');
        return $this->redirect(['action' => 'index']);
    }

    public function view($id) {
        $cat = $this->Categories->get($id,['contain' => 'Posts']);
        $this->set(["cat" => $cat]);
    }

}
