<h1>投稿</h1>

<?php
  echo $this->Form->create($post);
  echo $this->Form->control('title',[
    'value'     => '',
    'maxLength' => 30
  ]);
  echo $this->Form->control('content', [
    'type'      => 'textarea',
    'value'     => '',
    'maxLength' => 200
  ]);
  echo $this->Form->button('投稿する', ['class' => 'btn btn-warning']);
  echo $this->Form->end();
?>
