<?php

/*
 * framework_course's cakephp training
 */

namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index']);
    }

    //03March2018
    public function index() {
        $posts = $this->Posts->find("all");
        
        /* this method can use in cakephp */
        //$this->set(compact("posts"));

        $this->set(["posts" => $posts]);
    }

    //11March2018
    public function add() {
        $post = $this->Posts->newEntity();
        $cats = $this->Posts->Categories->find('list');
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $this->Posts->save($post);

            $this->Flash->success('The post has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set([
            "post" => $post,
            "categories" => $cats
        ]);
    }

    public function edit($id) {
        $post = $this->Posts->get($id);
        $cats = $this->Posts->Categories->find('list');
        if ($this->request->is('put')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $this->Posts->save($post);

            $this->Flash->success('The post has been edited.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set([
            "post" => $post,
            "categories" => $cats
        ]);
    }

    public function delete($id) {
        $post = $this->Posts->get($id);
        $this->Posts->delete($post);

        $this->Flash->success('The post has been deleted.');
        return $this->redirect(['action' => 'index']);
    }

    public function view($id) {
        $post = $this->Posts->get($id, ['contain' => 'Categories']);
        $this->set(["post" => $post]);
    }

}
