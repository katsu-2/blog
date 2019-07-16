<?php

namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
{
  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Flash');
  }

  public function index()
  {
    $posts = $this->Posts->find('all');
    $this->set(compact('posts'));
  }

  public function view($id)
  {
    $post = $this->Posts->get($id);
    $this->set(compact('post'));
  }

  public function add()
  {
    $post = $this->Posts->newEntity();

    if ($this->request->is('post')) {
      $post = $this->Posts->patchEntity($post, $this->request->getData());

      if ($this->Posts->save($post)) {
        $this->Flash->success('投稿に成功');
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error('投稿に失敗');
    }

    $this->set(compact('post'));
  }

  public function edit($id)
  {
    $post = $this->Posts->get($id);
    if ($this->request->is('post', 'put')) {
      $this->Posts->patchEntity($post, $this->request->getData());

      if ($this->Posts->save($post)) {
        $this->Flash->success('編集に成功');
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error('編集に失敗');
    }
    $this->set(compact('post'));
  }

  public function delete($id)
  {
    $this->request->allowMethod(['post']);

    $post = $this->Posts->get($id);
    if ($this->Posts->delete($post)) {
      $this->Flash->success('削除しました');
    } else {
      $this->Flash->error('削除に失敗しました');
    }

    return $this->redirect(['action' => 'index']);
  }

}
